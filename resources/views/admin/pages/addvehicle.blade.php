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
                        <h1 class="d-flex justify-content-center">Add Vehicle</h1>
                    {!!Form::open(['action' =>'VehiclesController@tostore','method'=>'POST','enctype'=>'multipart/form-data'])!!}

                        <div class="form-group">
                            {{Form::label('type', 'Type')}}
                            {{Form::text('type','',['class'=>'form-control','placeholder'=>'Vehicle Type','required'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('price', 'Price Per Day')}}
                            {{Form::number('price','',['class'=>'form-control','placeholder'=>'Price Perday','required'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('category', 'Category')}}
                            {{Form::text('category','',['class'=>'form-control','placeholder'=>'A/C or non A/C','required'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('regno', 'Registration Number')}}
                            {{Form::number('regno','',['class'=>'form-control','placeholder'=>'Vehicle Registration Number','required'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('plateno', 'Vehicle Plate Number')}}
                            {{Form::text('plateno','',['class'=>'form-control','placeholder'=>'Vehicle Plate Number','required'])}}
                        </div>
                        <div class="form-group">
                            {{Form::file('cover_image')}}
                        </div>
                        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                        {!! Form::close() !!}
                    </div>

                </div>

            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="{{asset('js/popper.min.js')}}"></script>
            <!-- Icons -->
            <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
            <script>
                feather.replace()
            </script>
        </main>
    </div>
</div>
@endsection