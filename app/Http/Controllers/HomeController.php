<?php

namespace App\Http\Controllers;

use App\User;
use App\Vehicle;
use App\VehicleIncident;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home', [
            'vehicleCount' => Vehicle::count(),
            'userCount' => User::count(),
            'unattendedIncidentCount' => VehicleIncident::where('status_id', '<>', '99')->count()
        ]);
    }
}
