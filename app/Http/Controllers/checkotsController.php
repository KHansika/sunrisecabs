<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class checkotsController extends Controller
{
    //
    public function billing($id){
        return view('pages.checkout')->with($id);

    }
}
