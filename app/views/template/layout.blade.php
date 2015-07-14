<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel Site</title>

    <!-- Bootstrap CSS -->
    <link href="{{asset('app/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('app/bower_components/bxslider-4/dist/jquery.bxslider.min.css')}}">
    <link rel="stylesheet" href="{{asset('app/css/style.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@include('template.header')
@yield('content')
@include('template.footer')
@include('template.modals')
{{--assets_begin--}}
<script src="{{asset('app/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('app/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('app/bower_components/bxslider-4/dist/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('app/bower_components/parallax.js/parallax.js')}}"></script>
<script src="{{asset('app/js/main.js')}}"></script>
{{--assets_end--}}
</body>
</html>