<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingForeignkeysInBookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('bookings',function( Blueprint $table){
            $table->integer('customerid')->unsigned()->change();
            $table->foreign('customerid')->references('id')->on('customers');
            $table->integer('vehicle_id')->unsigned()->change();
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->integer('driverid')->unsigned()->change();
            $table->foreign('driverid')->references('id')->on('drivers');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
