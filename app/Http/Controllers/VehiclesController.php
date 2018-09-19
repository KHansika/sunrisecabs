<?php

namespace App\Http\Controllers;
use App\Vehicle;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    //
    public function index(){
        $vehicles= Vehicle::all();
        return view('admin.pages.vehiclefleet')->with('vehicle',$vehicles);
    }
    public function addvehicle(){
        return view('admin.pages.addvehicle');
    }
    public function tostore (Request $request){
            $owner =new Vehicle;
            $owner->regno=$request->input('regno');
            $owner->plateno=$request->input('plateno');
            $owner->type=$request->input('type');
            $owner->price=$request->input('price');
            $owner->category=$request->input('category');
    
            $owner->save();
            return redirect('/addvehicles');
    }
}
