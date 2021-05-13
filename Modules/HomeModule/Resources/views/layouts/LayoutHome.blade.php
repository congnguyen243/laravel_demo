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
        <header class="navbar  flex-md-nowrap">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
            <ul class="navbar-nav px-3">
                <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sign out</a>
                </li>
            </ul>
        </header>

        <main>
            <div class="row mt-5">
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block collapse">
                    <div class="mx-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="">
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    Product
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    Category
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">
                                    User
                                </a>
                            </li>
                        </ul>
                    
                        <h6 class="sidebar-heading d-flex justify-content-between  px-3 mt-4 mb-1 text-muted">
                            <span>Saved reports</span>
                            
                        </h6>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Current month
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                @yield('main')
            </div>
        </main>
    </body>
    
    <script type="text/javascript"  src="/js/admin.js"></script>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
</html>
