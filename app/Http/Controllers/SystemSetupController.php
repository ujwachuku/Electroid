<?php

namespace App\Http\Controllers;

use App\Mail\Test;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SystemSetupController extends Controller
{
    public function index()
    {
        return view('setup.index');
    }
}
