<?php

namespace App\Http\Controllers;
use App\Vehicle;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    //
    public function index(){
        $vehicles= Vehicle::all();
        return view('admin.pages.vehiclefleet')->with('vehicle',$vehicles);
    }
    public function addvehicle(){
        return view('admin.pages.addvehicle');
    }
}
