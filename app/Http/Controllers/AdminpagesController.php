<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class AdminpagesController extends Controller
{
    //
    public function viewit ()
    {
        //view for the admin
        $bookings= Booking::where('status',0)->get();
        return view('admin.pages.neworders')->with('bookings',$bookings);
    }
    // public function adminlogin(){
    //     return redirect('/booking');
    // }
}
