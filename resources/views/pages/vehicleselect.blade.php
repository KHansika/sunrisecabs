@extends('layouts.app')
@section('content')
{{-- Testing Form --}}
{{-- date picker scdn --}}
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

<body class="bg-light">

        <div class="container">
          <div class="py-5 text-center">
            <h2>Select your Vehicle</h2>
            {{-- image gallery --}}
            @include('inc.gallery')
            <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Your cart</span>
                <span class="badge badge-secondary badge-pill">3</span>
              </h4>
              <ul class="list-group mb-3">
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Product name</h6>
                    <small class="text-muted">Brief description</small>
                  </div>
                  <span class="text-muted">$12</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Second product</h6>
                    <small class="text-muted">Brief description</small>
                  </div>
                  <span class="text-muted">$8</span>
                </li>
                <li class="list-group-item d-flex justify-content-between lh-condensed">
                  <div>
                    <h6 class="my-0">Third item</h6>
                    <small class="text-muted">Brief description</small>
                  </div>
                  <span class="text-muted">$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between bg-light">
                  <div class="text-success">
                    <h6 class="my-0">Promo code</h6>
                    <small>EXAMPLECODE</small>
                  </div>
                  <span class="text-success">-$5</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                  <span>Total (USD)</span>
                  <strong>$20</strong>
                </li>
              </ul>
    
              <form class="card p-2">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Promo code">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">Redeem</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-md-8 order-md-1">
              {!!Form:: open(['action'=>['BookingsController@update',$booking->id], 'method'=>'POST','class'=>'needs-validation'])!!}
              {{-- <form class="needs-validation" action=>['BookingsController@update',$Booking->id] novalidate> --}}
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="pickup">Pickup Location (Mark On the Map )</label>
                    <input type="text" name="piklocation" class="form-control" id="pickup" placeholder="" value="{{$booking->piklocation}}" required>
                    <div class="invalid-feedback">
                      Valid Pickup Location is required.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="dropdown">Drop Down Location (Mark On the Map)</label>
                    <input type="text" name="droplocation" class="form-control" id="dropdown" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid Drop Down Loaction is required.
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="pickup">Pickup Date and time</label>
                  <input type="text" name="pickdate" class="form-control" id="datepicker" placeholder="" value="{{$booking->date}}" required>
                    {{-- Pickup time --}}
                      
                    <div class="invalid-feedback">
                      Valid Pickup Date and time is required.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="lastName">Number Of Days</label>
                    <input type="number" name="days"class="form-control" id="" min='1'  placeholder="No of Days" value="" required>
                    <div class="invalid-feedback">
                      Valid Drop Down Loaction is required.
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" class="form-control" id="pickup" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="lName">Last Name</label>
                    <input type="text" name="lname" class="form-control" id="dropdown" placeholder="" value="" required>
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                  </div>
                </div>
    
                <div class="mb-3">
                  <label for="nic">NIC Number</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="nic" id="nic" placeholder="NIC Number" required>
                    <div class="invalid-feedback" style="width: 100%;">
                      Nic is required
                    </div>
                  </div>
                </div>

                
    
                <div class="mb-3">
                  <label for="email">Email <span class="text-muted">(To send your invoice)</span></label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="you@example.com">
                  <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                  </div>
                </div>
    
                <div class="mb-3">
                  <label for="address">Address Line 1</label>
                  <input type="text"  name="addres1"class="form-control" id="address" placeholder="1234 Main St" required>
                  <div class="invalid-feedback">
                    Please enter your shipping address.
                  </div>   
                </div>
                <div class="mb-3">
                  <label for="address2">Address Line 2 <span class="text-muted">(Optional)</span></label>
                  <input type="text"  name="addres2"class="form-control" id="address2" placeholder="Apartment or suite">
                </div>
                <hr class="mb-4">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="save-info">
                </div>               
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
              {{Form::hidden('_method','PUT')}}
              </form>
            </div>
          </div>
</div>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
  {{-- <script>
    $(function() {
      $( "#datepicker2" ).datepicker();
    });
    </script> --}}
@endsection 