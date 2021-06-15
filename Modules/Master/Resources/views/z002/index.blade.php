@extends('layouts.main')
@section('title')
Product List
@endsection
@section('stylesheet')
    <!-- <link rel="stylesheet" href="/modules/master/css/z002.css?<?php echo time();?>"> -->
@endsection
@section('page_javascript')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="/modules/master/js/z002.js"></script>
    <script type="text/javascript" charset="utf-8">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@endsection
@section('content')

<div id="content-wrapper">

      <div class="container-fluid  mx-4">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Product</li>
        </ol>

        <div class="mb-3">
            <input type="text" name="categoryName" placeholder="Tên" id="product_name">
            
            <input type="text" name="" placeholder="Price" id="product_price">
            <select id="product_memory">
                <option value="16GB">16GB</option>
                <option value="32GB">32GB</option>
                <option value="64GB">64GB</option>
                <option value="128GB">128GB</option>
                <option value="512GB">512Gb</option>
            </select>
            <input type="number" name="" placeholder="Stock" id="product_stock">
            <label for="filename">Select a image</label>
            <input type="file" id="product_path" name="filename">
        </div>
        <div>
          <textarea  rows="2" placeholder="Content" id="product_content" style="width:100%"></textarea>
        </div>
        <div class="btns my-3">
          <button type="button" class="btn btn-success " id="btn-new-product" >New product</button>
          <button type="button" class="btn btn-primary d-none" id="btn-update-product" >Update</button>
          <button type="button" class="btn btn-secondary" id="btn-cancel-product" >Cancel</button>

        </div>

        <!-- DataTables Example -->
        <div id="products">
          @include('master::z002.datacontent')
        </div>

        

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <!-- <span>Copyright © Your Website 2019</span> -->
          </div>
        </div>
      </footer>

    </div>


@endsection