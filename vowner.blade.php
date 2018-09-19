@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="{{asset('css//bootstrap.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>


  
    {{--<background-image: url("{{asset('//img/v1.jpg')}}"">--}}
</head>

<div class="signin registerform" >
		<h2 align="center">REGISTER HERE ! </h2>
		<form action="/register" method="post" accept-charset="utf-8" target="center" class="form-group" id="register_form_vowner">
			{{--<label>ENTER VEHICLE OWNERS ID</label>--}}
            {{--<br>--}}
			{{--<input type="text" name="id"  id="id" placeholder=""  class="input">--}}
			
			{{--<br><br>--}}

			<label>VEHICLE OWNERS NAME</label>
            <br>
			<input type="text" name="voname"   id="voname" class="input">
		
			<br><br>

			<label>VEHICLE OWNERS NIC</label>
            <br>
			<input type="text" name="nic"  id="nic"  class="input">
			
			<br><br>

			<label>VEHICLE OWNERS ADDRESS</label>
            <br>
			<input type="text" name="address"  id="address"  class="input">
			
			<br><br>
            <label>CONTACT</label>
            <br>
			<input type="text" name="contact"  id="contact"  class="contact">
            <br><br>
			<label>EMAIL</label>
            <br>
			<input type="text" name="email"   id="email"  class="input">
			
			<br><br>
			{{--<br>--}}
			
			<button type ="submit" name="submit" style="align:center;" class="btn btn-default">SUBMIT</button>
			
		</form>
	
	</div>
</body>
</html>  