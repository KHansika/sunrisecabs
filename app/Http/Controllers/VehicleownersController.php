<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicleowner;

class VehicleownersController extends Controller
{
    //
    public function index(){
        $owners= Vehicleowner::all();
        return view('admin.pages.vehicleowner')->with('owner',$owners);
    }
    public function addvehicleowners(){
        return view('admin.pages.addowner');

    }
    public function tostore(Request $request){

        $this->validate($request, [
            'voname'=>'required',

            'nic'=>[
                'required',
                'regex:/^\d{9}[V|v]$/',  //regex to match nic number pattern ex- 123456789V or 123456789v
                'unique:vehicleowners,nic'],  //check if vehicle owner with given NIC number already exists

            'address'=>'required',

            'contact'=>[
                'required',
                'regex:/^\d{10}$/'],  //regex to match 10 digit telephone number

            'email'=>'required|email|unique:vehicleowners,email'
        ]);

        $owner =new Vehicleowner;
        $owner->voname=$request->input('voname');
        $owner->nic=$request->input('nic');
        $owner->address=$request->input('address');
        $owner->contact=$request->input('contact');
        $owner->email=$request->input('email');
    
        $owner->save();
        return redirect('/addvehicleowners')->with('success', 'Vehicle Owner has been added.');

    }
}
