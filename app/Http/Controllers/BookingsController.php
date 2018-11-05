<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;
use App\Customer;
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
            $booking =new Booking;
            $customer=new Customer;
            // $booking->vtype=$request->input('vtype');
            $booking->piklocation=$request->input('piklocation');
            $booking->date=$request->input('date');
            $customer=new Customer;
            $booking->save();
            $customer->save();
            return redirect()->route('booking.edit', $booking->id,$customer->id);
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
    public function edit($id,$id2)
    {
        //Validation of the edit code
        $booking = Booking::find($id);
        $customer=Customer::find($id2);
        return view('pages.vehicleselect')->with('booking',$booking)->with('customer',$customer);
        
    }

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
            $booking->save();
            return redirect('/');
            
            $booking->piktime=$request->input('pickdate');
            //update into customer table
            $customer=new Customer;
            $customer->fname=$request->input('fname');
            $customer->lname=$request->input('lname');
            $customer->nic=$request->input('nic');
            $customer->email=$request->input('email');
            $customer->address1=$request->input('addres1');
            $customer->address2=$request->input('addres2');

    
            
           
    }
    public function update2(Request $request, $id){
        

    }

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
