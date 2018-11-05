<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    //search function
    public function vehiclesearch(){
    $vtype = Input::get ( 'vtype' );
    $vehicleid=Input::get('bookid');
    $vehicle = Booking::where ( 'vtype', 'LIKE', '%' . $vtype. '%' )->get ();
    if (count ( $vehicle ) > 0){
        $booking = Booking::find($vehicleid);
        return view ( 'pages.vehicleselect' )->withDetails ( $vehicle )->withQuery ( $vtype )->with('booking',$booking);
    }
    else
        return view ( 'pages.search' )->withMessage ( 'No Details found. Try to search again !' );

    }

    public function search(Request $request){


    } 
}
