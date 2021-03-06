<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Repositories\UserRepository;
use App\User;
use http\Env\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private $repository;

    public function __construct()
    {
        //$this->middleware(['auth', 'admin']);
        $this->repository = new UserRepository();
    }

    public function index()
    {
        $users = $this->repository->all();
        return view('user.index', compact('users'));
    }

    public function create(User $user)
    {
        return view('user.create', compact('user'));
    }

    public function store(StoreUserRequest $request, User $user)
    {
        $this->repository->store($request, $user);
        return redirect()->route('user.index')->with('success', 'The user was created successfully');
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    public function update(StoreUserRequest $request, User $user)
    {
        $this->repository->store($request, $user);
        return redirect()->route('user.index')->with('success', 'The user was updated successfully');
    }

    public function delete(User $user)
    {
        $this->repository->delete($user);
        return redirect()->route('user.index')->with('success', 'The user was deleted successfully');
    }

    public function reset(User $user)
    {
        $this->repository->resetPassword($user);
        return redirect()->route('user.index')->with('success', 'A password reset link was sent to the user\'s email address.');
    }

    public function impersonate(User $user)
    {
        // Guard against administrator impersonate
        if(! $user->isAdmin())
        {
            Auth::user()->setImpersonating($user->id);
        }
        else
        {
            //flash()->error('Impersonate disabled for this user.');
        }

        return redirect()->route('home');
    }

    public function stopImpersonate()
    {
        Auth::user()->stopImpersonating();

        //flash()->success('Welcome back!');

        return redirect()->route('home');
    }
}
