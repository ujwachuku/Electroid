<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleMakeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}
