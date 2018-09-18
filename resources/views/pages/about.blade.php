<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sunrise Cabs</title>

     <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/business-frontpage.css')}}" rel="stylesheet">
    <style>
    .business-header {
 background: url("../img/cover/aboutcover.jpg")no-repeat center center fixed;
 height: 50vh;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color fixed-top">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Sunrise Cabs</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse justify-content-center" id="basicExampleNav">

        <!-- Links -->
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/cars">Cars</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/services">Services</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/team">Team</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                </li>
               
                <!-- Right navbar elements -->
                
                <!-- right nav bar elements -->
                
        </ul>
        <!-- Links -->
    </div>
</nav>

    <!-- Header with Background Image -->
    <header class = "business-header">
      
    </header>

    <!-- Page Content -->
    <div class="container">

      <div class="row" style="margin-top:10px;">
        <div class="col-sm-8">
          <h2 class="mt-4"><b>About us</h2>
          <p>Sunrise Cabs company Sri Lanka is a leading Car rental company established in the Kandy district which has maintained its leading position as a trustworthy, efficient and innovative one-stop-shop for all vehicle rental needs. We rent everything from standard sedans to top of the range luxury cars, vans and jeeps on self-drive or with driver at the cheapest rates in town.</b></p>
          
         
        </div>
       <div class="col-sm-4" style="background-color: #bac9e0">
          <h2 class="mt-4"><b>Head Office</h2>
          <address>
            <strong>Sunrise Cabs</strong>
            <br>No 5
            <br>Dharmashoka Mawatha
            <br>Kandy
            <br>
          </address>
          <address>
            <abbr title="Phone">Tel:</abbr>
             077 781 0341
            <br>
            <abbr title="Email">Email:</abbr>
            <a href="mailto:#">sunrisecabs1@gmail.com</a></b>
          </address>
        </div>
      </div>

      <div class = "row" style="margin-top:10px;">
        <div class ="col-sm-12">
        <img src="../img/cover/fleet.jpg" style="height:47vh;" alt="">
      </div>
      </div>
      <div class="row">
        <div class="col-sm-4 my-4">
              
              <h4 class= "text-center"><b>Trust and Reliality</b></h4>
                  <p class= "text-center">Make an online booking with a deposit and be certain that a vehicle of your choice will be assigned to you on the requested date and time. No excuses.</p>
                </div>

          <div class="col-sm-4 my-4">   
              <h4 class= "text-center"><b>Convenience</b></h4>
                When you pick up your vehicle, paperwork is kept to a minimum. Fill out the essentials and you are on your way. Hassle free to the max.</p>
              </div>

                <div class="col-sm-4 my-4">
            <h4 class= "text-center"><b>Safety</b></h4>
            <p>Choose from our fleet of latest model Japanese vehicles with the best safety features. All Shineway rental car Sri Lanka vehicles are equipped with driver and passenger airbags, seatbelts for all passengers and side collision bars on the doors and much more.</p>
          </div>
        </div>
        <hr>


      <div class="row">
        <div class="col-sm-6 my-4">
           <h4 class= "text-center"><b>Vision and Mission</b></h4>
            <img src = "../img/cover/mission.jpg" height="200px" class="mx-auto d-block">
            <p class= "text-center">To be the leading car rental service provider in Sri Lanka.</p>
        </div>

        <div class="col-sm-6 my-4">
              <h4 class= "text-center"><b>Director</h4>
                <img src = "../img/cover/team.jpg" height="100px" class="rounded-circle mx-auto d-block">
                <br>
              <p class= "text-center">Sasitha Palitha Kaluarachchi</b></p>
              <p>The founder of the company, an old student of Trinity College, works as the Managing Director of the company</p>
            </div>
          </div>
        
          </div>
   
      <!-- /.row -->

    </div>
    <!-- /.container -->
    
  </body>

</html>
