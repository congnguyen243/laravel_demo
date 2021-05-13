<!-- @extends('layouts.main')

@section('title')
    Category list
@endsection
@section('stylesheet')
    <link rel="stylesheet" href="/modules/master/css/z001.css?<?php echo time();?>">
@endsection

@section('page_javascript')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>
    <script type="text/javascript" src="/modules/master/js/z001.js"></script>
    <script type="text/javascript" charset="utf-8">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@endsection
@section('content')
<div class="">
    
    <div class="row mx-5 ">
        <div class="">
            <h3 class="text-center">List of Category</h3>
            <hr>
            <div class=" text-left">
                <div class="d-flex justify-content-between">
                    <input type="text" name="categoryName" placeholder="Nhập tên danh mục mới" id="content_cate" >
                    <button type="button" class="btn btn-success" id="btn-add-new" >Save</button>
                </div>
                
            </div>
            <br>
            <div id="listcontent">
                @include('master::z001.listcontent')
            </div>
        </div>
    </div>
</div>

@endsection -->
