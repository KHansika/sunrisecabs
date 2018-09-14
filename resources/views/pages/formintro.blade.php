
@extends('layouts.app')
<header>
<!--Navbar-->
@section('content')

{!! Form::open(['action' => 'BookingsController@store', 'method'=>'POST','class' => 'form-intro align-items-center justify-content-center form-horizontal']) !!}
     
    <!-- Select vehicle type -->
    <div class="form-group">
        <div class="col-lg-10">
                {!!Form::select('vtype', ['s'=>'Select Vehicle Type','cars' => 'Cars', 'vans' => 'Vans','buses'=>'Buses'], 's',['class'=>'form-control'])!!}
        </div>
    </div>
    <!-- Select Pickup Location -->
    <div class="form-group">
            <div class="col-lg-10">
                    {!!Form::select('piklocation', ['Kandy District' => 'Kandy District', 'Kandy City' => 'Kandy City','Kadugannawa' => 'Kadugannawa','A'=>'Pickup Location'], 'A',['class'=>'form-control'])!!}
                </div>
        </div>
    <!-- Select Pickup Date -->
    <div class="form-group">
            <div class="col-lg-10">
                    {!!Form::text('date','',['class' => 'form-control','placeholder'=>'Pickup Date'])!!}
            </div>
        </div>

    <!-- Submit Button -->
    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary'] ) !!}
        </div>
    </div>

{!! Form::close()  !!}

</div>
