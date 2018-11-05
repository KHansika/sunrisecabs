<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewToBookings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //adding new table called customer table
        Schema::create('customers', function(Blueprint $table){
            $table->increments('id');
            $table->string('fname');
            $table->string('lname');
            $table->string('nic');
            $table->string('email');
            $table->string('address1');
            $table->string('address2');


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
        Schema::dropIfExits('customers');
    }
}
