<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Vehicle;
use App\Booking;
class addtocartsController extends Controller
{
    
    //getting the vehicle details using the vehicel id and passing as a jason
    public function addItem(Request $request){
        $vehicleid=$request->message;
        // $vehicleid=$request->booking;
        // $booking=Booking::find($bookingid);
        // $nodays=$booking->days;
        $vehicle=Vehicle::find($vehicleid);
        $vehicleid=$vehicle->id;
        $vname=$vehicle->vname;
        $vimage="/storage/cover_images/".$vehicle->cover_image;
        $vprice=$vehicle->price;
        $category=$vehicle->category;
        //calculating the price
        // $nodays=$booking->days;
        // $price=$nodays*$vprice;
        $price= 3;
        $response=array(
            'status'=>'success',
            'id'=>$vehicleid,
            'vname'=>$vname,
            'vimage'=>$vimage,
            'vprice'=>$vprice,
            'vcategory'=>$category,
            'totalprice'=>$price

    );      
    return response()->json($response);


    }
}
