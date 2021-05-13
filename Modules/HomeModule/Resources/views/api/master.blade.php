<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/homemodule.css') }}"> --}}
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
    </head>
    <body class="">
        
        @yield('content')

    </body>

    
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</html>
