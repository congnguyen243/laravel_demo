@extends('layouts.main')
@section('title')
    Order Management
@endsection
@section('stylesheet')
    <link rel="stylesheet" href="/modules/master/css/z003.css?<?php echo time();?>">
@endsection
@section('page_javascript')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" charset="utf-8">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script type="text/javascript" src="/modules/master/js/z003.js"></script>
@endsection
@section('content')

<div id="content-wrapper">

      <div class="container-fluid  mx-4">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Order</li>
        </ol>
       
        <div id="myModal" class="modal">

          <!-- Modal content -->
          <div class="modal-content">
            <span class="close">&times;</span>
            
            <section class="order-form my-1 mx-4">
                <div class="container pt-4">
                    <form>
                        <div class="row">
                            <div class="col-12">
                                <h1>Create Your Order Form</h1>
                            </div>
                            <div class="col-6" id="block-cus">
                                <div class="col-12">
                                    <span>Customer infomation</span>
                                    <hr class="mt-1">
                                </div>
                                <div class="col-12">

                                    <div class="row mx-4">
                                        <div class="col-12 mb-2">
                                            <label class="order-form-label">Full Name</label>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <input class="order-form-input" placeholder="Full Name">
                                        </div>
                                        <div class="col-12 col-sm-6 mt-2 mt-sm-0">
                                            <input class="order-form-input" type="file">
                                        </div>
                                    </div>

                                    <div class="row mt-3 mx-4">
                                        <div class="col-12">
                                            <label class="order-form-label">Phone Number</label>
                                        </div>
                                        <div class="col-12">
                                            <input class="order-form-input" placeholder="Phone Number" type="tel" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
                                            <br><small>Format: 123-45-678</small><br>
                                        </div>
                                    </div>

                                    <div class="row mt-3 mx-4">
                                        <div class="col-12">
                                            <label class="order-form-label">Address</label>
                                        </div>
                                        <div class="col-12">
                                            <input class="order-form-input" placeholder="Address">
                                        </div>
                                    </div>

                                    <div class="row mt-3 mx-4">
                                        <div class="col-12">
                                            <label class="order-form-label">Email</label>
                                        </div>
                                        <div class="col-12">
                                            <input class="order-form-input" placeholder="Email" type="email">
                                        </div>
                                    </div>

                                    <div class="row mt-3 mx-4">
                                        <div class="col-12">
                                            <label class="order-form-label" for="date-picker-example">Date Order</label>
                                        </div>
                                        <div class="col-12">
                                            <input class="order-form-input datepicker" placeholder="Selected date" type="text"
                                            id="date-picker-example">
                                        </div>
                                    </div>

                                    <div class="row mt-3 mx-4">
                                        <div class="col-12">
                                            <label class="order-form-label">Note</label>
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control" id="" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="row mt-3 mx-4">
                                        <div class="col-12">
                                            <div class="form-check">
                                            <input type="checkbox" class="form-check-input" name="validation" id="validation" value="1">
                                            <label for="validation" class="form-check-label">I know what I need to know</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-6" id="block-product">

                                <div class="col-12">
                                    <span>Product infomation</span>
                                    <hr class="mt-1">
                                </div>
                                
                                <div class="col-12">
                                    <input type="checkbox" class="mx-2" id="selectAllProduct"><span>Select all</span>
                                </div>

                                <div class="col-12" id="wrap_item" style="height:500px; overflow:scroll">
                                @foreach($data as $row)
                                    <div id="item_order" class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded" data-productid="{{$row->id}}">
                                        <div class="d-flex flex-row">
                                            <input type="checkbox" class="my-3 mx-2 item_check" value="{{$row->price}}">
                                            <img data-productImg="{{$row->path}}" class="rounded" src="https://i.imgur.com/QRwjbm5.jpg" width="40">
                                            <div class="ml-2"><span class="font-weight-bold d-block" id="product_content">{{$row->name}}</span><span class="spec">{{$row->memory}}GB, Navy Blue</span></div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <!-- <span class="d-block">2</span> -->
                                            <div class="pl-md-0 pl-2"> <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1">1</span><span class="fa fa-plus-square text-secondary"></span> </div>
                                            <span class="d-block ml-5 font-weight-bold">${{$row->price}}</span>
                                            <a href="##">
                                              <i class="far fa-trash-alt mx-4" ></i>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach

                                    
                                </div>

                                <div class="col-12">
                                <hr/>
                                    <div class="order_total">
                                        <div class="order_total_content text-md-right">
                                            <div class="order_total_title">Order Total:</div>
                                            <div id="order_total_amount">$ <span>100</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <button type="button" id="btnSubmit" class="btn btn-dark d-block mx-auto btn-submit">Submit</button>
                            </div>
                            
                        </div>
                    </form>
                </div>
            </section>

          </div>

        </div>

        
        <div class="btns my-3">
          <button type="button" class="btn btn-success " id="myBtn" >New Order</button>
          <button type="button" class="btn btn-primary d-none" id="btn-update-product" >Update</button>
          <button type="button" class="btn btn-secondary mx-2" id="btn-cancel-product" >Cancel</button>

        </div>

        <!-- DataTables Example -->
        <div id="products">
          @include('master::z003.listorder')
        </div>

        

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
          </div>
        </div>
      </footer>

    </div>


@endsection