@extends('hoangha::layouts.master')

@section('header')
  <!-- navtop -->
  <div class="top-navigator">
    <div class="container">
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
    <!-- navheader -->
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
        <div class="order pl-3">
            <img src="" alt="img" style="">
            <a href="" class="order-link ">Kiểm tra đơn hàng</a>
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

    <h4 class="font-weight-bold my-3">Apple iPhone 12 Pro - 128GB - Chính hãng VN/A</h4>
    <div class="row">
        <div class="silder-product" style="width:25%">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('img/1.png')}}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('img/2.png')}}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('img/4.png')}}" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="detail-product px-5 " style="width:45%">
            <div class="row">
                <h5 class="price-new;" style=" color:red; font-weight:700;">27,290,000 ₫ </h5>
                <p class="price-old"> &nbsp;&nbsp;Giá Niêm Yết: &nbsp;
                    <p class="line" style="text-decoration-line: line-through;">30,990,000 ₫</p>
                    &nbsp;Đã bao gồm 10%
                </p>
                
            </div>
            <div class="row">
                <span class="Vat">
                VAT | Máy mới 100% chính hãng Apple Việt Nam - Hoanghamobile nhà bán lẻ ủy quyền chính thức của Apple tại Việt Nam
                </span>
            </div>
            <div class="row justify-content-center align-items-center my-1" style="width:100%; height:25px; background:#00483D; color:white; font-size: 0.7rem; border-radius: 0.2rem;">
                <span class="freeship ">MIỄN PHÍ VẬN CHUYỂN TOÀN QUỐC</span>
            </div>
            <div class="row">
                <span class="font-weight-bold">
                Lựa chọn phiên bản
                </span>
            </div>
            <form action="">
                <div class="row">
                    <div class=" btn-radio px-1 atv" style=" margin-right:20px">
                        <input type="radio" checked="checked" name="vehicle1" value="128GB">
                        <label for="vehicle1" class="mb-0"> 128GB</label><br>
                        <strong style="color:red" class="">29,850,000 ₫</strong>
                    </div>
                    <div class=" btn-radio px-1 " style=" margin-right:20px">
                        <input type="radio" name="vehicle1" value="256GB">
                        <label for="vehicle2" class="mb-0"> 256GB</label><br>
                        <strong style="color:red" class="">30,850,000 ₫</strong>
                    </div>
                    <div class=" btn-radio px-1 " style=" margin-right:20px">
                        <input type="radio" name="vehicle1" value="512GB">
                        <label for="vehicle3" class="mb-0"> 512GB</label><br>
                        <strong style="color:red" class="">31,850,000 ₫</strong>
                    </div>
                </div>
            </form>

            <div class="row">
                <span class="font-weight-bold">
                Lựa chọn màu và xem địa chỉ còn hàng
                </span>
            </div>
            <form action="">
                <div class="row">
                    <div class=" btn-radio px-1 atv" style=" margin-right:20px">
                        <input type="radio" checked="checked" name="vehicle1" value="Black">
                        <label for="vehicle1" class="mb-0"> Black</label><br>
                        <strong style="color:red" class="">29,850,000 ₫</strong>
                    </div>
                    <div class=" btn-radio px-1 " style=" margin-right:20px">
                        <input type="radio" name="vehicle1" value="Blue">
                        <label for="vehicle2" class="mb-0"> Blue</label><br>
                        <strong style="color:red" class="">30,850,000 ₫</strong>
                    </div>
                    <div class=" btn-radio px-1 " style=" margin-right:20px">
                        <input type="radio" name="vehicle1" value="Gold">
                        <label for="vehicle3" class="mb-0"> Gold</label><br>
                        <strong style="color:red" class="">31,850,000 ₫</strong>
                    </div>
                    <div class=" btn-radio px-1 " style=" margin-right:20px">
                        <input type="radio" name="vehicle1" value="Silver">
                        <label for="vehicle4" class="mb-0"> Silver</label><br>
                        <strong style="color:red" class="">30,750,000 ₫</strong>
                    </div>
                </div>
            </form>

            <div class="row mt-3">
                <span class="font-weight-bold">
                KHUYẾN MÃI
                </span>
            </div>
            <div class="paddingreset">
                <span class="km">KM 1</span>
                <p class="km-content">Thu cũ - đổi mới, Lên đời iPhone 12 series giảm trực tiếp 1.000.000đ - &#40;<a href="##" class="km-link">Xem chi tiết</a>&#41;</p>
            </div>
            <div class="paddingreset">
                <span class="km">KM 2</span>
                <p class="km-content ">Bốc thăm trúng thưởng iPhone 12 Pro Max và 10 tai nghe AirPods Pro + Ưu đãi Hái lộc vàng đầu xuân 100% trúng thưởng - &#40;<a href="##" class="km-link">Xem chi tiết</a>&#41;
                </p>
            </div>
            <div class="paddingreset">
                <span class="km">KM 3</span>
                <p class="km-content ">Chơi game online - Trúng ngay quà khủng - &#40;<a href="##" class="km-link">Xem chi tiết</a>&#41;
                </p>
            </div>
            <div class="paddingreset">
                <span class="km">KM 4</span>
                <p class="km-content ">Khuyến mãi mua thêm: Sạc nhanh Innostyle PD 20W Minigo III với giá 290.000đ. - &#40;<a href="##" class="km-link">Xem chi tiết</a>&#41;
                </p>
            </div>
            <div class="row my-3 justify-content-between">
                <div class="btn-buy d-flex flex-column align-items-center justify-content-center">
                    <strong>MUA NGAY</strong>
                    <small>Trả tiền khi nhận hàng (COD)</small>
                </div>
                <div class="btn-cart">
                    cart
                </div>
            </div>
        </div>

        <div class="warranty" style="width:25%">
            <div class="row justify-content-center mt-3">
                <strong>THÔNG TIN BẢO HÀNH</strong>
            </div>
            <div class="d-flex px-3">
                <small>Bảo hành 12 tháng chính hãng, bao xài đổi trả trong 15 ngày.</small>
            </div>
            <div class="row justify-content-center mt-3 ">
                <strong style="font-size:0.7rem">CHỌN MÀU VÀ XEM ĐỊA CHỈ CÒN HÀNG</strong>
            </div>
            <div class="mt-1 d-flex px-3">
                <a href="##" class="btn-branch">
                    Toàn bộ chi nhánh
                </a>    
            </div>
        </div>
    </div>
</div>
@endsection