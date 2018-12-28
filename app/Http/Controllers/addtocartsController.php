<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Vehicle;
class addtocartsController extends Controller
{
    
    //getting the vehicle details using the vehicel id and passing as a jason
    public function addItem(Request $request){
        $vehicleid=$request->message;
        $vehicle=Vehicle::find($vehicleid);
        $vname=$vehicle->vname;
        $vimage="/storage/cover_images/".$vehicle->cover_image;
        $vprice=$vehicle->price;
        $category=$vehicle->category;
        $response=array(
            'status'=>'success',
            'msg'=>$request->message,
            'vname'=>$vname,
            'vimage'=>$vimage,
            'vprice'=>$vprice,
            'vcategory'=>$category

    );      
    return response()->json($response);


    }
}
