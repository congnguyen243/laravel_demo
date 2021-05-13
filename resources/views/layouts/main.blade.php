<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="" type="image/x-icon" />
    <title>@yield('title')</title>

    <!-- Global stylesheets -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Global stylesheets -->

    <!-- Component CSS files -->		
		@yield('stylesheet')
    <!-- /Component CSS files -->

    <!-- Core JS files -->

    <!-- Core JS files -->
    
    <!-- Component JS files -->		
		@yield('components')
    <!-- /Component JS files -->
</head>
<body>
    @include('layouts._header')
    <main>
    <div class="row">
            @include('layouts._navleft')
            <div class="container">
              @yield('content')
            </div>
        </div>
    </main>

    @yield('page_javascript')
		<!-- /form's  Jquery files -->
  
		<!-- form's hidden field (table add row, hidden textbox) -->
    @yield('content_hidden')
    <!-- /form's  hidden field -->
</body>
</html>