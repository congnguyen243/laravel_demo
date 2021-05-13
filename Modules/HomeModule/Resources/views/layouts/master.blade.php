<!DOCTYPE html>
<html lang="vi">
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
        
        @yield('content1')

        <main>
            <div class="row">
                @yield('nav')
                @yield('main')
            </div>
        </main>
    </body>
   <!-- chua dung file nay  -->
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</html>
