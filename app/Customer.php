<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //one to one relatonship with Booking
    public function booking(){
        return $this->hasOne('App\Booking');
    }
}
