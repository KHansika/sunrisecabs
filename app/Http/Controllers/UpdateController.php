<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class UpdateController extends Controller
{
    //
    public function update(Request $request, $id)
    {
        $booking =Booking::find($id);
        $booking->status='1';
        $booking->save();
        return redirect('/neworders');           
    }
}

