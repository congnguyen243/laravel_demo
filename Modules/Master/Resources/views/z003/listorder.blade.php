<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Data Table Example
    </div>
    <div class="card-body">
        <div class="">
            <div class="container d-flex justify-content-end mt-100">
                <div class="input-group-overlay d-none d-lg-flex mx-4"> 
                    <input class="form-control appended-form-control" type="text" placeholder="Search for order">
                    <div class="input-group-append-overlay" >
                        <span class="input-group-text mx-1" style="height:100%"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
            <br/>
            <div class="row">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Avatar</th>
                        <th>Full Name</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Quantity</th>
                        <th>Total</th>                       
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- OrderList -->
                        @foreach($dataOrder as $row)
                            <tr>
                                <td>
                                    {{$row->id}}
                                </td>
                                <td style="width:80px">
                                    <img src="{{ asset('/storage/'.$row->avatar) }}" style="width: 100px; height: 100px; object-fit: cover;">
                                </td>
                                <td>
                                    {{$row->name}}
                                </td>
                                <td style="width:220px">
                                    {{$row->phone}}
                                </td>
                                <td>
                                    {{$row->date}}
                                </td>
                                <td>
                                    {{$row->quantity}}
                                </td>
                                <td>
                                    {{$row->total}}
                                </td>
                                <td>
                                    <a data-order="{{$row->id}}" class="btn btn-primary btn-detail-order">View</a>
                                    &nbsp; 
                                    <a data-order="{{$row->id}}"  class="btn-delete btn btn-secondary order-delete-btn" id="btn-delete-order" data-confirm="Are you sure to delete this item?">Delete</a>
                                </td>
                            </tr>
                        @endforeach 

                        <!-- modal-detail-block -->
                        <div id="orderDetailModal" class="modal">
                            <!-- Modal content -->
                            <div class="modal-content">
                                <span id="close-detail-order" class="close">&times;</span>
                                <button class="btn btn-primary edit-order-btn">Edit</button>
                                <section class="mt-3">
                                    <div class="order-info"></div>
                                </section>
                                <section class="order-edit-form my-1 mx-4">
                                    <div class="container">
                                    <ul id="update_noti_err" style="position: absolute; right: 10px; top: 20px; z-index: 2;"></ul>
                                        
                                        <form enctype="multipart/form-data" method="post" action="" id="order-show">
                                            @csrf                        
                                            <div class="row">
                                                <div class="col-12">
                                                    <h1>Detail Order</h1>
                                                </div>
                                                <div class="col-6">
                                                    <div class="col-12">
                                                        <span>Customer infomation</span>
                                                        <hr class="mt-1">
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="row mx-4">
                                                            <input type="hidden" name="id" id="edit-order-id">
                                                            <div class="col-12 mb-2">
                                                                <label class="order-form-label">Full Name </label>
                                                            </div>
                                                            <div class="col-6 col-sm-6">
                                                                <input id="edit-order-name" class="order-form-input" type="text" name="name">
                                                            </div>
                                                            <div class="col-6 col-sm-6 mt-2 mt-sm-0">
                                                                <input class="order-form-input" id="edit-upload-order-avt" type="file" name="avatar">
                                                                <img id="edit-order-avt" alt="img" src="{{ asset('/storage/') }}" style="width: 100px; height: 100px; object-fit: cover;"/>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3 mx-4">
                                                            <div class="col-12">
                                                                <label class="order-form-label">Phone Number</label>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="order-form-input" placeholder="Phone Number" type="tel" pattern="[0]{1}[0-9]{9}" name="phone" id="edit-order-phone">
                                                                <br><small>Format: 0123456789</small><br>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3 mx-4">
                                                            <div class="col-12">
                                                                <label class="order-form-label">Address</label>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="order-form-input" placeholder="Address" name="address" id="edit-order-address">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3 mx-4">
                                                            <div class="col-12">
                                                                <label class="order-form-label">Email </label>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="order-form-input" placeholder="Email" type="email"  name="email" id="edit-order-email">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3 mx-4">
                                                            <div class="col-12">
                                                                <label class="order-form-label" for="date-picker-example">Date Order</label>
                                                            </div>
                                                            <div class="col-12">
                                                                <input class="order-form-input datepicker" placeholder="Selected date" type="text" name="date" id="edit-order-date">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3 mx-4">
                                                            <div class="col-12">
                                                                <label class="order-form-label">Note</label>
                                                            </div>
                                                            <div class="col-12">
                                                                <textarea class="form-control"  rows="2" name="note" id="edit-order-note"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3 mx-4">
                                                            <div class="col-12">
                                                                <input class="order-form-input" id="edit-order-qty" name="quantity">
                                                                <input class="order-form-input" id="edit-order-total" name="total">
                                                            </div>
                                                        </div>
                                                        <div class="row mt-3 mx-4">
                                                            <div class="col-12">
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" name="validation" value="1">
                                                                    <label for="validation" class="form-check-label">I know what I need to know</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="col-12">
                                                        <span>Product infomation</span>
                                                        <hr class="mt-1">
                                                    </div> 
                                                    <div class="col-12" id="wrap_item" style="height:500px; overflow:auto">
                                                        <div id="products-list"></div>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-dark d-block mx-auto btn-submit">Save</button>
                                                </div>
                                            </div>                        
                                        </form>
                                    </div>
                                </section>
                            </div>
                        </div>
                        <!-- modal-detail-block -->
                    <!-- orderList -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>