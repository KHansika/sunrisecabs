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
                </button>
              </div>
              
            </div>
            <h1 class="d-flex justify-content-center">Our Vehicle Fleet</h1>
                            @if(count($vehicle)>0)
                                @foreach ($vehicle as $vehicle)
                            <div class= "card">
                                            
                            <div class= "card-body">
                                    <h2>Vehicle <span class="badge badge-secondary">Added</span></h2>
                                <div class="row">
                                        <div class="col-md-6">
                                        <h5 class="card-title"> Vehicle Reg No: {{$vehicle->regno}}</h5>
                                        <h5 class="card-title"> Plate No :{{$vehicle->plateno}}</h5>
                                        <h5 class="card-title">Vehicle Type:{{$vehicle->type}}</h5>
                                        <h5 class="card-title">Vehicle Price: {{$vehicle->price}}</h5>
                                        <h5 class="card-title">AC or Non A/C:{{$vehicle->category}}</h5>                                    
                                      </div>
                                    <div class="col-md-6">
                                    <img src="/storage/cover_images/{{$vehicle->cover_image}}" alt="..." class="img-thumbnail" width="250" height="150"> <br>
                                      <a href=" ">
                                        <button type="button" class="btn btn-primary "> 
                                         View Details</button>
                                      </a>
                                            <button type="button" class="btn btn-primary ">Remove Vehicle</button>

                                        </div>
                                </div>

                                
                            </div>
                                
                                
                                @endforeach
                                @else
                                     <p>No Bookings</p>
                                @endif
                        
                                
                                    </div>
                                    
                
          
              <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
                <script src="{{asset('js/popper.min.js')}}"></script>
                <!-- Icons -->
                <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
                <script>
                  feather.replace()
                </script>


          