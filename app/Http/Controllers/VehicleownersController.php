<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicleowner;

class VehicleownersController extends Controller
{
    //
    public function index(){
        return view('admin.pages.vehicleowner');
    }
    public function addvehicleowners(){
        return view('admin.pages.addowner');

    }
    public function tostore(Request $request){

            $owner =new Vehicleowner;
            $owner->voname=$request->input('voname');
            $owner->nic=$request->input('nic');
            $owner->address=$request->input('address');
            $owner->contact=$request->input('contact');
            $owner->email=$request->input('email');
    
            $owner->save();
            return redirect('/addvehicleowners');

    }
}
