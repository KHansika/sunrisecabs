<?php

namespace App\Http\Controllers;
use App\Booking;
use Illuminate\Http\Request;

class SentvehiclesController extends Controller
{
    //
    public function index(){
        $bookings= Booking::where('status',1)->get();
        return view('admin.pages.sentvehicle')->with('bookings',$bookings);
    }
}
