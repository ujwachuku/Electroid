<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemSetupController extends Controller
{
    public function index()
    {
        return view('setup.index');
    }
}
