<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Vehiclereservation;
use App\Vehicle;

class reservationsController extends Controller
{
    //
public function insert(Request $request){
$bid=$request->input('bookingid');
$vid=$request->input('vehicleid');
$booking= Booking::find($bid);
$vehicle=Vehicle::find($vid);
$vtype=$vehicle->type;
$startdate=$booking->date;
$endate=$booking->dropdate;
$reservation=new Vehiclereservation;
$reservation->vehicle_id=$vid;
$reservation->vtype=$vtype;
$reservation->start_date=$startdate;
$reservation->end_date=$endate;
$reservation->save();

return view('pages.thankyou');
    }
}
