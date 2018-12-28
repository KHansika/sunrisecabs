<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    {{-- jquery --}}
    
    <script type="text/javascript" src="{{asset('js/jquery-2.2.4.min.js')}}"></script>

    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" rel="stylesheet">
    <!-- custom js file -->
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <!-- datetimepicker -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.datetimepicker.min.css')}}">
    <!-- full datetime picker -->
    <script type="text/javascript" src="{{asset('js/jquery.datetimepicker.full.min.js')}}"></script>

</head>
<body>
    @include('inc.nav')
    @yield('content')
    
</body>
