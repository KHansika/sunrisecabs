@extends('layouts.app')
@section('content')
{{-- Testing Form --}}
{{-- date picker scdn --}}
<meta name="csrf-token" content="{{ csrf_token() }}">
<body class="bg-light">

        <div class="container">
          <div class="py-5 text-center">
                    {{-- {!!Form:: open(['action'=>['BookingsController@update',$customer->id], 'method'=>'POST','class'=>'needs-validation'])!!} --}}
            <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
              <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Purchased Vehicle</span>
              </h4>

            <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div id="cart">
                        <h6 class="my-0">Vehicle Image</h6>
                        {{-- <small class="text-muted">Brief description</small> --}}
                      </div>
                      {{-- <span class="text-muted">$12</span> --}}
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div id='regno'>
                      <h6 class="my-0">Price Perday</h6>
                      <small class="text-muted">Brief description</small>
                    </div>
                  <span class="text-muted">{{$vehicle->price}}</span>
                  <input name="perday" type="hidden" value="">       

                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div id="plateno">
                      <h6 class="my-0">Descreption</h6>
                      {{-- <small class="text-muted">Brief description</small> --}}
                    </div>
                    {{-- <span class="text-muted">$5</span> --}}
                  </li>
                  <li class="list-group-item d-flex justify-content-between bg-light">                  
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                    <span>Total (LKR)</span>
                    <strong>$20</strong>
                  </li>
            </ul>
          </div>
              <div class="col-md-8 order-md-1">

                    {!!Form:: open(['action'=>['BookingsController@update',$booking->id], 'method'=>'POST','class'=>'needs-validation'])!!}
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                            <span class="text-muted">Card Details</span>
                          </h4>                 
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="fname"> Name On the Card</label>
                  <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" value="{{$customer->fname}}" required>
                    <div class="invalid-feedback">
                            Valid First name is requires
                        </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="lName">Name On the Card</label>
                    <input type="text" name="lname" class="form-control" id="dropdown" placeholder="Last Name" value="{{$customer->lname}}" required>
                    <div class="invalid-feedback">
                      Valid last name is required.
                    </div>
                  </div>
                </div>
                <div class="row">
                        <div class="col-md-4 mb-3">
                          <label for="fname"> Card Number</label>
                          <input type="number" name="cardnum" class="form-control" id="cardnum" placeholder="" value="" required>
                          <div class="invalid-feedback">
                                  Valid First name is requires
                              </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label for="lName">Expiery Year</label>
                          <input type="number" name="year" class="form-control" id="year" placeholder="Year" value="" required>
                          <div class="invalid-feedback">
                            Valid last name is required.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                                <label for="lName">Expiery Month</label>
                                <input type="number" name="month" class="form-control" id="Month" placeholder="Month" value="" required>
                                <div class="invalid-feedback">
                                  Valid Month is required.
                                </div>
                              </div>
                        <div class="col-md-2 mb-3">
                                <label for="lName">CSV</label>
                                <input type="number" name="lname" class="form-control" id="dropdown" placeholder="***" value="" required>
                                <div class="invalid-feedback">
                                  Valid last name is required.
                                </div>
                              </div>
                      </div>
                <div class="mb-3">
                  <label for="email">Email <span class="text-muted">(To send your invoice)</span></label>
                <input type="email" name="email" class="form-control" value="{{$customer->email}}"id="email" placeholder="you@example.com">
                  <div class="invalid-feedback">
                    Please enter a valid email address for Inovice and updates.
                  </div>
                </div>
    
                <div class="mb-3">
                  <label for="address">Billing Address</label>
                <input type="text"  name="addres1"class="form-control" value="{{$customer->address1}}"id="address" placeholder="1234 Main St" required>
                  <div class="invalid-feedback">
                    Please Enter Your Billing Address.
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
                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>

                {{Form::hidden('_method','PUT')}}
              </form>
            </div>
          </div>
          
    </div>
  