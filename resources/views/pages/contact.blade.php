<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sunrise Cabs</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
     <link href="{{asset('css/mdb.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    
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
                <li class="nav-item ">
                    <a class="nav-link" href="/about">About Us</a>
                </li>
                <li class="nav-item active">
                        <a class="nav-link" href="/contact">Contact</a>
                </li>
               
                <!-- Right navbar elements -->
                
                <!-- right nav bar elements -->
                
        </ul>
        <!-- Links -->
    </div>
</nav>

<div class = "row" style="padding:20px 0 0 20px;">
<div class="col-md-8">
   <h3>Write to us!</h3>
   <p>We'd love to hear from you. You can either reach out to us as a whole and one of our awesome team members will get back to you, or if you have a specific question reach out to one of our staff. We love getting email all day <em>all day</em>.</p>
   <form role="form"> 
     <br />
     <div class="row">
  <div class="col-md-2"><label for="name">Your Name</label></div>
        <div class="col-md-10"><input type="text" id="name" class="form-control" placeholder="Your Name" /></div>
     </div>
     <br />
     <div class="row">
  <div class="col-md-2"><label for="email">Your Email</label></div>
    <div class="col-md-10"><input type="email" id="email" class="form-control" placeholder="Your email" /></div>
     </div>
     <br />
     <div class="row">
  <div class="col-md-2"><label>Your messege</label></div>
  <div class="col-md-10"><textarea rows="3" class="form-control"></textarea></div>
     </div>
   </form>
</div>

<div class="col-md-4">
<!-- Clicking this placeholder fires the mapModal Reveal modal -->
<p>
<a href="" data-toggle="modal" data-target="#myModal">  <iframe width="280" height="280" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=d&amp;source=s_d&amp;saddr=USA&amp;daddr=&amp;hl=en&amp;geocode=&amp;aq=0&amp;oq=usa&amp;sll=13.045084,80.211027&amp;sspn=0.023621,0.027595&amp;mra=ls&amp;ie=UTF8&amp;ll=35.58537,0&amp;spn=108.82926,360&amp;t=m&amp;output=embed"></iframe><br />

</a><br />
<a href="" data-toggle="modal" data-target="#myModal">View Map</a>
</p>
<div class = "row" style="text-align: center;font-size:15px;padding-right:90px ;">
<div class = "col-sm-4">
<i class="fa fa-map-marker" style="font-size:40px;color: navy;"></i>
<p>No 5, Aruppola <br> Kandy</p>
</div>
<div class = "col-sm-4">
<i class="fa fa-phone" style="font-size:40px;color: navy;"></i>
<p>+94-776-4856</p>
</div>
<div class = "col-sm-4">
<i class="fa fa-envelope" style="font-size:40px;color: navy;"></i>
<p style="text-align: center;">sunrisecabs1@gmail.com</p>
</div>
</div>

</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <h4>Where We Are</h4>
<p>  <iframe width="700" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=d&amp;source=s_d&amp;saddr=USA&amp;daddr=&amp;hl=en&amp;geocode=&amp;aq=0&amp;oq=usa&amp;sll=13.045084,80.211027&amp;sspn=0.023621,0.027595&amp;mra=ls&amp;ie=UTF8&amp;ll=35.58537,0&amp;spn=108.82926,360&amp;t=m&amp;output=embed"></iframe><br />
</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<hr/>
</div>
</body>
</html>
