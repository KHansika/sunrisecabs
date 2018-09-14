@extends('layouts.app')
<header>
<!--Navbar-->
@section('content')
<!--Mask-->
<div id="intro" class="view">
        <div class="mask rgba-black-strong">
                <div class="d-flex align-items-center justify-content-center h-100">
            <div class="container">
            <div class="row">
                <div class="justify-content-center text-center col-md-7 col-sm-12">
                            <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">Travel</h2>
                            <!-- Divider -->
                            <hr class="hr-light">
                        <!-- Description -->
                    <h4 class="white-text my-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti consequuntur.</h4>
                    <button type="button" class="btn btn-outline-white">Read more<i class="far fa-address-card"></i></button>
    
                     </div>
                    <div class="col-md-5 col-sm-12">
                            @include('pages.formintro')
                                  <!-- Form contact -->
                                    </div>
            </div>
            </div>
            </div>
        </div>
    
    
    </div>
        
    <!--/.Mask-->

</header>  
@endsection
   