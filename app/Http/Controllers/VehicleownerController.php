<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleownerController extends Controller
{
    //view it initially
    public function index(){
        return view('vowner.pages.vodashboard');

    }
}
