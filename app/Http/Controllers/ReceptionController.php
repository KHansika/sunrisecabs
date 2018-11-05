<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReceptionController extends Controller
{
    //view the dashboard initially
    public function index(){
        return view('reception.pages.resdashboard');

    }
}
