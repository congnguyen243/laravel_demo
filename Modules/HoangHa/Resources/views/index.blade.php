@extends('hoangha::layouts.master')

@section('header')
<div class="top-navigator">
        <div class="container">
            <div class="">
                <ul class="d-flex flex-row-reverse align-items-center ">
                    <li class="ml-3"><a class="top-navigator--link" href="#">Đăng ký</a></li>
                    <li class="ml-3"><a class="top-navigator--link" href="#">Đăng nhập</a></li>
                    <li class="ml-3"><a class="top-navigator--link" href="##">Giới thiệu</a></li>
                    <li class="ml-3"><a class="top-navigator--link" href="#">Trung tâm bảo hành</a></li>
                    <li class="ml-3"><a class="top-navigator--link" href="#">Tuyển dụng</a></li>
                    <li class="ml-3"><a class="top-navigator--link" href="#">Tra cứu đơn hàng</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar my-3">
            <a class="navbar-brand" href="#">
                <img src="{{asset('img/logo-text.png')}}" alt="logo" class="navbar-brand--img">
            </a> 
            <!-- <div class="navbar-sub">

            </div> -->
            <div class="input-group mt-1 search">
            <input type="text" class="form-control" placeholder="Hôm nay bạn cần tìm gì?" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
                <button class="btn btn-search" type="button" id="button-addon2">Tìm kiếm</button>
            </div>
            </div>
            <div class="order">
                <img src="" alt="img" style="">
                <a href="##" class="order-link ">Kiểm tra đơn hàng</a>
                <div class="">
                </div>
            </div>
            <a href="##" class="cart"><img class="cart-img" src="{{asset('img/shopping-cart--v2.png')}}" alt=""></a>
        </nav>
        <nav class="navbar navbar-drop">
            <a href="##" class="navbar-brand">
                Điện thoại
                <img src="" alt="" class="navbar-brand--img">
            </a>
            <a href="##" class="navbar-brand">
                Máy tính bảng
                <img src="" alt="" class="navbar-brand--img">
            </a>
            <a href="##" class="navbar-brand">
                Đồng hồ
                <img src="" alt="" class="navbar-brand--img">
            </a>
            <a href="##" class="navbar-brand">
                Laptop
                <img src="" alt="" class="navbar-brand--img">
            </a>
            <a href="##" class="navbar-brand">
                Phụ kiện
                <img src="" alt="" class="navbar-brand--img">
            </a>
            <a href="##" class="navbar-brand">
                SmartHome
                <img src="" alt="" class="navbar-brand--img">
            </a>
            <a href="##" class="navbar-brand">
                Sửa chữa
                <img src="" alt="" class="navbar-brand--img">
            </a>
            <a href="##" class="navbar-brand">
                Sim thẻ
                <img src="" alt="" class="navbar-brand--img">
            </a>
            <a href="##" class="navbar-brand">
                Tin tức
                <img src="" alt="" class="navbar-brand--img">
            </a>
            <a href="##" class="navbar-brand">
                Khuyến mãi
                <img src="" alt="" class="navbar-brand--img">
            </a>
        </nav>
    </div>
@endsection

@section('content')
   
    <div class="container">
        <!-- slider  -->
        <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner ">
                <div class="carousel-item active ">
                <img src="{{asset('img/tet-111.png')}}" class="d-block w-100 radius" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{asset('img/s21111.png')}}" class="d-block w-100 radius" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{asset('img/ooo.gif')}}" class="d-block w-100 radius" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        
        <!-- quick sale -->
        <div class="container-npad">
            <div class="row mt-3">
                <div class="col-3 quicksale-item">
                    <a href="#" class="quicksale-link">
                        <img class="quicksale-img" src="{{asset('img/max_637459572995469320.png')}}" alt=""  style="width: 100%;
                            border-radius: 0.4rem;">
                    </a>
                </div>
                <div class="col-3 quicksale-item">
                    <a href="#" class="quicksale-link">
                        <img src="{{asset('img/ooo.gif')}}" alt="" class="quicksale-img" style="width: 100%;
                            border-radius: 0.4rem;">
                    </a>
                </div>
                <div class="col-3 quicksale-item">
                    <a href="##" class="quicksale-link">
                        <img src="{{asset('img/anh-sp-hot.png')}}" alt="" class="quicksale-img" style="width: 100%;
                            border-radius: 0.4rem;">
                    </a>
                </div>
                <div class="col-3 quicksale-item">
                    <a href="##" class="quicksale-link">
                        <img src="{{asset('img/anh-oppo-linh.png')}}" alt="" class="quicksale-img" style="width: 100%;
                            border-radius: 0.4rem;">
                    </a>
                </div>
            </div>
        </div>
        
        
         <!-- ads  -->
         
        <div class="row px-3 mt-3">
            <a href="##" class="banner-ads--link">
                <img src="{{asset('img/aaaaaaaazzzzzzzzzz.gif')}}" alt="" class="quicksale-img" style="width: 100%;
                    border-radius: 0.4rem;">
            </a>
            
        </div>

        <!-- FASH SALE ONLINE -->
            <!-- header flash sale  -->
        <div class="row align-items-center px-3 mt-3" >
            <!-- <span style=" border: 1px solid; width:20px; background-color:#0F8573; color: white; font-weight:bold"> </span> -->
            <a href="" class="header-navlist " style=" margin-right:20px; color: #fc521d; font-weight:bold; font-size:28px; ">FASH SALE ONLINE</a>
            <div class="timer" id="timer" style="font-size:25px">
                <strong> 0</strong><strong> 0</strong><span> : </span><strong> 0</strong><strong> 0</strong><span> : </span><strong> 0</strong><strong> 0</strong>
            </div>
        </div>

        <div class="d-flex justify-content-between mt-3">
            <div class="col-2 product-item py-3" style=" background-color:white; border-radius: 0.4rem; box-shadow: 0px 0px 4px #ccc;">
           

                <a href="" class="product-link" style="color:black; text-align:center;">
                    <img class="product-img" src="{{asset('img/1.png')}}" alt=""  style="width: 100%;
                        border-radius: 0.4rem;">
                        Apple iPhone 12 Mini - Chính hãng VN/A
                        <span class="price">
                            <strong>10,490,000 ₫</strong>
                        </span>
                </a>
            </div>
            
            <div class="col-2 product-item py-3" style=" background-color:white; border-radius: 0.4rem; box-shadow: 0px 0px 4px #ccc;">
                <a href="##" class="product-link">
                    <img src="{{asset('img/xrr.png')}}" alt="" class="product-img" style="width: 100%;
                        border-radius: 0.4rem;">
                        Apple iPhone 12 Mini - Chính hãng VN/A
                        <span class="price">
                            <strong>10,490,000 ₫</strong>
                        </span>
                </a>
            </div>
            <div class="col-2 product-item py-3" style=" background-color:white; border-radius: 0.4rem; box-shadow: 0px 0px 4px #ccc;">
                <a href="#" class="product-link">
                    <img src="{{asset('img/Artboard 1 copy 45.jpg')}}" alt="" class="product-img" style="width: 100%;
                        border-radius: 0.4rem;">
                        Samsung Galaxy S21 Plus 5G - Chính hãng (ĐKH)
                        <span class="price">
                            <strong>10,490,000 ₫</strong>
                        </span>
                </a>
            </div>
            <div class="col-2 product-item py-3" style=" background-color:white; border-radius: 0.4rem; box-shadow: 0px 0px 4px #ccc;">
                <a href="#" class="product-link">
                    <img src="{{asset('img/oppoa.png')}}" alt="" class="product-img" style="width: 100%;
                        border-radius: 0.4rem;">
                        Apple iPhone 12 Mini - Chính hãng VN/A
                        <span class="price">
                            <strong>10,490,000 ₫</strong>
                        </span>
                </a>
            </div>
            <div class="col-2 product-item py-3" style=" background-color:white; border-radius: 0.4rem; box-shadow: 0px 0px 4px #ccc;">
                <a href="##" class="product-link">
                    <img src="{{asset('img/image-removebg-preview(1).png')}}" alt="" class="product-img" style="width: 100%;
                        border-radius: 0.4rem;">
                        Oppo Reno5 - Chính hãng
                        <span class="price">
                            <strong>10,490,000 ₫</strong>
                        </span>
                </a>
            </div>
        </div>

        <!-- end FASH SALE ONLINE -->

        <!-- Product -->
        <div class="row px-3 mt-3" >
            <span style=" border: 1px solid; width:20px; background-color:#0F8573; color: white; font-weight:bold"> </span>
            <a href="" class="header-navlist px-5" style=" border: 1px solid; width:150px; background-color:#00483D; color: white; font-weight:bold">IPHONE</a>
        </div>
        <div class="d-flex justify-content-between mt-3">
            @foreach($data as $row)
                <div data-product="{{$row->id}}" data-action="datail"  class="col-2 product-item py-3" style=" background-color:white; border-radius: 0.4rem; box-shadow: 0px 0px 4px #ccc;">
                    <a href="/hoangha/detailProduct" class="product-link" style="color:black; text-align:center;">
                        <img class="product-img" src="{{asset($row->path)}}" alt="{{$row->path}}"  style="width: 100%;
                            border-radius: 0.4rem;">
                            {{$row->name}}
                            <span class="price">
                                <strong>{{$row->price}}</strong>
                            </span>
                    </a>
                </div>
            @endforeach 
            
        </div>

        <!-- Android -->
        <div class="row px-3 mt-3" >
            <span style=" border: 1px solid; width:20px; background-color:#0F8573; color: white; font-weight:bold"> </span>
            <a href="" class="header-navlist px-5" style=" border: 1px solid; width:150px; background-color:#00483D; color: white; font-weight:bold">ANDROID</a>
        </div>
        <div class="d-flex justify-content-between my-3">
            <div class="col-2 product-item py-3" style=" background-color:white; border-radius: 0.4rem; box-shadow: 0px 0px 4px #ccc;">
                <a href="#" class="product-link">
                    <img class="product-img" src="{{asset('img/Artboard 1 copy 44.jpg')}}" alt=""  style="width: 100%;
                        border-radius: 0.4rem;">Xiaomi Mi 10T Pro - 8GB/128GB - Chính Hãng DGW
                        <span class="price">
                            <strong>10,490,000 ₫</strong>
                        </span>
                </a>
            </div>
            <div class="col-2 product-item py-3" style=" background-color:white; border-radius: 0.4rem; box-shadow: 0px 0px 4px #ccc;">
                <a href="#" class="product-link">
                    <img src="{{asset('img/Artboard 1 copy 45.jpg')}}" alt="" class="product-img" style="width: 100%;
                        border-radius: 0.4rem;">
                        Samsung Galaxy S21 Plus 5G - Chính hãng (ĐKH)
                        <span class="price">
                            <strong>10,490,000 ₫</strong>
                        </span>
                </a>
            </div>
            <div class="col-2 product-item py-3" style=" background-color:white; border-radius: 0.4rem; box-shadow: 0px 0px 4px #ccc;">
                <a href="##" class="product-link">
                    <img src="{{asset('img/Artboard 1 copy 61.jpg')}}" alt="" class="product-img" style="width: 100%;
                        border-radius: 0.4rem;">
                        Nokia 5.4 - Chính hãng
                        <span class="price">
                            <strong>10,490,000 ₫</strong>
                        </span>
                </a>
            </div>
            <div class="col-2 product-item py-3" style=" background-color:white; border-radius: 0.4rem; box-shadow: 0px 0px 4px #ccc;">
                <a href="##" class="product-link">
                    <img src="{{asset('img/image-removebg-preview(1).png')}}" alt="" class="product-img" style="width: 100%;
                        border-radius: 0.4rem;">
                        Oppo Reno5 - Chính hãng
                        <span class="price">
                            <strong>10,490,000 ₫</strong>
                        </span>
                </a>
            </div>
            <div class="col-2 product-item py-3" style=" background-color:white; border-radius: 0.4rem; box-shadow: 0px 0px 4px #ccc;">
                <a href="#" class="product-link">
                    <img src="{{asset('img/oppoa.png')}}" alt="" class="product-img" style="width: 100%;
                        border-radius: 0.4rem;">
                        Apple iPhone 12 Mini - Chính hãng VN/A
                        <span class="price">
                            <strong>10,490,000 ₫</strong>
                        </span>
                </a>
            </div>
        </div>
        
    </div>
@endsection
