@extends('layouts.admin')
@section('content')
<div class="container-fluid">
        <div class="row">
          @include('admin.pages.adminsidenav')
  
          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
              <h1 class="h2">Dashboard</h1>
              <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                </div>
                
              </div>
              
            </div>
            <div class="row">
            <div class="container">
                <div class="col-md-7">
                    <h1 class="d-flex justify-content-center">Add Owner<span class="badge badge-secondary">New</span></h1>

                    {!!Form::open(['action' =>'VehicleownersController@tostore','method'=>'POST'])!!}

                    {{Form::label('name', 'Name')}}
                    {{Form::text('voname','',['class'=>'form-control','placeholder'=>'Add Vehicle Owner','required'])}}
                    {{Form::label('NIC', 'National ID')}}
                    {{Form::text('nic','',['class'=>'form-control','placeholder'=>'National ID','required'])}}
                    {{Form::label('Address', 'Address')}}
                    {{Form::text('address','',['class'=>'form-control','placeholder'=>'Owner Address','required'])}} 
                    {{Form::label('contact', 'Contact Number')}}
                    {{Form::number('contact','',['class'=>'form-control','placeholder'=>'Contact Number','required'])}}
                    {{Form::label('email', 'E-Mail Address')}}
                    {{Form::text('email','',['class'=>'form-control','placeholder'=>'Email Address','required'])}}  
                      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                     {!! Form::close() !!}
                </div>
                
                </div>                      
                        
        </div>
       
        
          
              <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
                <script src="{{asset('js/popper.min.js')}}"></script>
                <!-- Icons -->
                <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
                <script>
                  feather.replace()
                </script>


          