<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Booking;
use App\Vehiclereservation;
use App\Vehicle;
use Illuminate\Support\Facades\Input;
use Validator;
use DateTime;
use App\Http\Requests\SearchFunction;
use Illuminate\Support\Facades\Redirect;


class SearchController extends Controller
{
    //search function
    public function vehiclesearch(Request $request){

    $vtype = Input::get ( 'vtype' );
    $bookingid=Input::get('bookid');
    $startdate=Input::get('startdate');
    $returndate=Input::get('returndate');
    //validating the search dates
    if($request->input('vtype')==='s'){
        return Redirect::back()->with('error','Valid Vehicle Type is required');
    }elseif($request->input('startdate')>$returndate){
        return Redirect::back()->with('error','Invalid Start Date');

    }elseif($request->input('returndate')<$startdate){
        return Redirect::back()->with('error','Invalid Return Date');
    }



    // $this->validate($request, [
    //     'startdate' => 'required|bail|date|before:end_date',
    //     'returndate' => 'required|after:start_date',
    // ]);
    $getdate1=new DateTime($startdate);
    $getdate2=new DateTime($returndate);
    $nodays=$getdate2->diff($getdate1);
    $days=$nodays->format('%a');
    $days +=1;
    // echo $days;
    //updating the booking table with start and end dates
   $booking=Booking::find($bookingid);
   $booking->date=$startdate;
   $booking->dropdate=$returndate;
   $booking->days=$days;
   $booking->save();

    
    // $vehicle=DB::select('select * from vehicle where not exists( select * from Vehiclereservation where vehicle.id=:vid',['vid'= vehiclereservaton.vehicle_id]'AND startdate=:sdate,['sdate'=< $returndate]'AND end_date > $startdate)');

    $vehicle = Vehiclereservation::where ( 'vtype', 'LIKE', '%' . $vtype. '%' )
            ->orWhereNull('start_date','<',$returndate)
            ->orWhereNull('end_date','>',$startdate)
            ->get ();

    $dataset = array();
    foreach($vehicle as $v)
    {
        $x = Vehicle::where('id',$v->vehicle_id)->get();
        array_push($dataset,$x[0]);

    }

    if (count ( $vehicle ) > 0){
        $booking = Booking::find($bookingid);
        // dd($dataset);
        return view ( 'pages.vehicleselect' )->with('vehicles',$dataset)->with('booking',$booking);
    }
    else
        // return view ( 'pages.vehicleselect' )->with('booking',$booking)->withDetails ( $vehicle )->withQuery ( $vtype );
    //  return view ( 'pages.vehicleselect' )->withMessage ( 'No Details found. Try to search again !' )->with('booking',$booking);
    $booking = Booking::find($bookingid);
        // dd($dataset);
        return view ( 'pages.vehicleselect' )->with('vehicles',$dataset)->with('booking',$booking);
}

    public function search(Request $request){


    } 
}
