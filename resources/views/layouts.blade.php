<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>




    <link rel="stylesheet" href="{{ asset('bootstrap4/bootstrap.min.css')}}">
    <script src="{{asset('bootstrap4/jquery.slim.min.js')}}"></script>
    <script src="{{asset('bootstrap4/popper.min.js')}}"></script>

    <script src="{{asset('bootstrap4/bootstrap.bundle.min.js')}}"></script>

   


</head>
<body>
    @include('nav')
    @yield('contenido')
</body>


</html>