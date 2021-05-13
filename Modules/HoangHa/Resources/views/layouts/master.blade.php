<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module HoangHa</title>
        <link rel="icon" href="{{asset('img/smart-home.png')}}" type="image/gif" sizes="16x16">
       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/hoangha.css') }}"> --}}
       <link rel="stylesheet" href="{{asset('css/app.css')}}">
       <!-- <link rel="stylesheet" href="{{asset('css/hoangha.css')}}"> -->
       <link rel="stylesheet" href="/css/hoangha.css?<?php echo time();?>">
    </head>
    <body>
        @yield('header')
        
        @yield('content')
        
        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/hoangha.js') }}"></script> --}}
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
        <!-- <script type="text/javascript" src="{{asset('js/scripts.js')}}"></script> -->
        <script type="text/javascript" src="/js/scripts.js"></script>

        <!-- ajax_jquery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>
        
        <!-- js_main -->
        <script type="text/javascript" charset="utf-8">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
    </body>
</html>
