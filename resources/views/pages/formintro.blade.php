
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
                    {!!Form::text('date','',['class' => 'form-control datetimepicker','value'=>'2019/12/03','placeholder'=>'Select a Pickup Date','id'=>'datepicker1' ,'readonly' ])!!}
            <input  class="form-control" id='input-val13' name='date'type="text" value="29 Apr">
                    {{-- {!!Form::text('date','',['class' => 'form-control datetimepicker','placeholder'=>'Pickup Date','id'=>'datepicker' ])!!} --}}

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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="{{asset('js/jquery.datetimepicker.full.min.js')}}"></script>
<script>
     
    $('#input-val13').datetimepicker({
    format: 'Y-m-d',       
    inline:true,
    timepicker: false,
    minDate:true,
    onSelectDate: function () {
        $date=$('#input-val13').val();
document.getElementById("datepicker1").value=$date;

}

    });
    
    

</script>

</div>
