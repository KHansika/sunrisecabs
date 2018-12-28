
@extends('layouts.app')
<header>
<!--Navbar-->
@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">


{!! Form::open(['action' => 'BookingsController@store', 'method'=>'POST','class' => 'form-intro align-items-center justify-content-center form-horizontal']) !!}
     
    <!-- Select vehicle type -->
    <div class="form-group">
        <div class="col-lg-10">
                {!!Form::select('vtype', ['s'=>'Select Vehicle Type','Cars' => 'Cars', 'Vans' => 'Vans','Buses'=>'Buses'], 's',['class'=>'form-control'])!!}
        </div>
    </div>
    <!-- Select Pickup Location -->
    <div class="form-group">
            <div class="col-lg-10">
                    {!!Form::select('piklocation', ['Kandy District' => 'Kandy District', 'Kandy City' => 'Kandy City','Kadugannawa' => 'Kadugannawa','A'=>'Select Pickup Location'], 'A',['class'=>'form-control'])!!}
                </div>
        </div>
    <!-- Select Pickup Date -->
    <div class="form-group">
            <div class="col-lg-10">
                    {!!Form::text('date','',['class' => 'form-control','placeholder'=>'Pickup Date','id'=>'datepicker' ])!!}
            </div>
        </div>
        <div class="form-group">
            @include('inc.messages')
        </div>

    <!-- Submit Button -->
    <div class="form-group">
        <div class="col-lg-10 col-lg-offset-2">
            {!! Form::submit('Submit', ['class' => 'btn btn-primary'] ) !!}
        </div>
    </div>

{!! Form::close()  !!}
<script type="text/javascript" src="{{asset('js/jquery.datetimepicker.full.min.js')}}"></script>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
    $('#datepicker').datetimepicker({
    inline:true,
    });
    </script>

</div>
