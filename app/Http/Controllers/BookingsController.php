<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Customer;
use App\Vehicle;
use DB;
use Illuminate\Support\Facades\Redirect;
use Validator, Input; 


class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //view for the admin
        // $bookings= Booking::where('status',0)->get();
        // return view('admin.adminhome')->with('bookings',$bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['vtype'=>'required',
        'piklocation'=>'required','date'=>'required']);
        // custom error messages
        // 'regex:(foo|bar|baz)'

        // validator
        Validator::make($request->all(), [
            'date' => 'required|date|'
        ])->validate();

        if($request->input('vtype')==='s'){
            return Redirect::back()->with('error','Valid Vehicle Type is required');
        }
         elseif($request->input('piklocation')==='A'){
            return Redirect::back()->with('error','Valid Pick Location isRequired');
         }
        else{//create initial booking
            $customer=new Customer;
            $customer->save();
            $booking =new Booking;
            $booking->piklocation=$request->input('piklocation');
            $booking->date=$request->input('date');
            $booking->customer_id=$customer->id;
            $booking->save();
            return redirect()->route('booking.edit', $booking->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Validation of the edit code
        $booking = Booking::find($id);
        $vehicles=Vehicle::all();
        return view('pages.vehicleselect')->with('booking',$booking)->with('vehicles',$vehicles);
        
    }

    //search function

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'piklocation'=>'required',
            'pickdate'=>'required','fname'=>'required','lname'=>'required',
            'addres1'=>'required','nic'=>'required',
            'email'=>'required','days'=>'required','droplocation'=>'required'
            ]);
            //create initial booking
            $booking =Booking::find($id);
            $booking->date=$request->input('pickdate');
            $booking->piklocation=$request->input('piklocation');
            $booking->droplocation=$request->input('droplocation');
            $booking->days=$request->input('days');
            $booking->topay=$request->input('perday')*$request->input('days');
            $booking->vehicle_id=$request->input('vehicleid');
            $booking->save();
            $vehicle=Vehicle::find($request->input('vehicleid'));
            //Updating the customer table
            $customerid=$booking->customer_id;
            $customer=Customer::find($customerid);
            $customer->fname=$request->input('fname');
            $customer->lname=$request->input('lname');
            $customer->nic=$request->input('nic');
            $customer->email=$request->input('email'); 
            $customer->address1=$request->input('addres2');
            $customer->address2=$request->input('addres1');
            $customer->save();
            return view('pages.checkout')->with('booking',$booking)->with('customer',$customer)->with('vehicle',$vehicle);

            // return redirect('pages.checkout');
            // return redirect()->route('billing', $booking->id);


            // $booking->piktime=$request->input('pickdate');
            // //update into customer table
            // $customer=new Customer;
            // $customer->fname=$request->input('fname');
            // $customer->lname=$request->input('lname');
            // $customer->nic=$request->input('nic');
            // $customer->email=$request->input('email');
            // $customer->address1=$request->input('addres1');
            // $customer->address2=$request->input('addres2');
  
    
            
           
    }
    // public function addtocart($id, $cid){
    //     $booking = Booking::find($id);
    //     $customer=Cutomer::find($cid);
    //     return view('pages.checkout')->with('booking',$booking)->with('customer',$customer);


    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
