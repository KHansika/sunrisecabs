<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function welcome(){
        return view('welcome');
    }
    public function about(){
        return view('pages.about');
    }
    public function cars(){
        return view('pages.cars');
    }
    public function contact(){
        return view('pages.contact');
    }
    public function services(){
        return view('pages.services');
    }
    public function team(){
        return view('pages.team');
    }
    public function vehicleselect(){
        return view('pages.vehicleselect');
    }
    public function vehiclesent(){
        return view('admin.pages.sentvehicle');
    }
}
