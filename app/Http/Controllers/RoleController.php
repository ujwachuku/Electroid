<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function apiAll()
    {
        return Role::orderBy('name')->get();
    }
}
