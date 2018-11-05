<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditBokkingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //removing the columns related to customer
        Schema::table('bookings',function($table){
            $table->dropColumn('vtype');
            $table->dropColumn('fname');
            $table->dropColumn('lname');
            $table->dropColumn('nic');
            $table->dropColumn('email');
            $table->dropColumn('address1');
            $table->dropColumn('address2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //readding the columns
        Schema::table('bookings',function($table){
            $table->string('vtype');
            $table->string('fname');
            $table->string('lname');
            $table->string('nic');
            $table->string('email');
            $table->string('address1');
            $table->string('address2');
        });
    }
}
