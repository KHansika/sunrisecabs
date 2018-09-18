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
            <h1 class="d-flex justify-content-center">New Orders<span class="badge badge-secondary">New</span></h1>
                            @if(count($bookings)>0)
                                @foreach ($bookings as $booking)
                            <div class= "card">
                                            
                            <div class= "card-body">
                                    <h2>New Order <span class="badge badge-secondary">New</span></h2>
                                <div class="row">
                                        <div class="col-md-6">
                                        <h5 class="card-title"> Vehicle Type: {{$booking->vtype}}</h5>
                                        <h5 class="card-title"> Pickup Date :{{$booking->date}}</h5>
                                        <h5 class="card-title">Pickup Time:{{$booking->piklocation}}</h5>
                                        <h5 class="card-title">Pickup Location: {{$booking->piklocation}}</h5>
                                        <h5 class="card-title">Drop Down Location:{{$booking->droplocation}}</h5>                                    
                                      </div>
                                    <div class="col-md-6">
                                            <img src="https://via.placeholder.com/250x200" alt="..." class="img-thumbnail"> <br>
                                      <a href="/update/{{$booking->id}}">
                                        <button type="button" class="btn btn-primary "> 
                                          Send A Vehicle</button>
                                      </a>
                                            <button type="button" class="btn btn-primary ">View Cutomer Details</button>

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


          