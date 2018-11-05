<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.adminhome');
    
        // $usertype=auth()->user()->roll;
        // return $usertype;

        // if($usertype=='Admin'){
        //     return view('admin.adminhome');
        // }elseif($usertype=='Manager'){
        //     return view('admin.adminhome2');
        // }
        
    }
}
