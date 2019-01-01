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
        $this->validate($request,[
            'cover_image'=>'image|nullable|max:1999',
            'plateno'=>'required|unique:vehicles,plateno',
            'price'=>'required',
            'category'=>'required',
            'regno'=>'required|unique:vehicles,regno'
        ]);

        //handle file upload
        if($request->hasFile('cover_image')){
        $filenameWithExt=$request->file('cover_image')->getClientOriginalName();
        //get just filename
        $filename=pathinfo($filenameWithExt,PATHINFO_FILENAME);
        //get just ext
        $extension=$request->file('cover_image')->getClientOriginalExtension();
        //filename to store
        $fileNameToStore=$filename.'_'.time().'.'.$extension;
        //uploadImage
        $path=$request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
    }else{
        $fileNameToStore='noimage.jpg';
    }


            $vehicle =new Vehicle;
            $vehicle->regno=$request->input('regno');
            $vehicle->plateno=$request->input('plateno');
            $vehicle->type=$request->input('type');
            $vehicle->price=$request->input('price');
            $vehicle->category=$request->input('category');
            $vehicle->cover_image=$fileNameToStore;

    
            $vehicle->save();
            return redirect('/addvehicles')->with('success', 'Vehicle has been added.');
    }
}
