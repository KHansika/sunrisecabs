<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleownersController extends Controller
{
    //
    public function index(){
        return view('admin.pages.vehicleowner');
    }
    public function addvehicleowners(){
        return view('admin.pages.addowner');

    }
}
