(function ($, app) {

    var homeCls = function () {

        var el = {};
        this.run = function () {
            this.init();
            this.bindEvents();
        };

        this.init = function () {
            
            CKEDITOR.replace('edit-order-note');
            var editor = CKEDITOR.instances['edit-order-note'];
            //edit order
            function editOrder() {
                $('.edit-order-btn').show();
                $('.order-info').show();
                $('.order-edit-form').hide();
                $('.edit-order-btn').on('click',function(){
                    $('.edit-order-btn').hide();
                    $('.order-info').hide()
                    $('.order-edit-form').show();
                })
            }

            //check product in order
            function checkOrder(pro,proOrder) {
                for(var i=0;i<pro.length;i++){
                    for(var j=0;j<proOrder.length;j++){
                        if(pro[i]['id']==proOrder[j]['product_id']){
                            console.log(pro[i]['id']);
                            fillPro(pro[i],proOrder[j]['quantity'],"checked");
                            break;
                        }
                        if(j==proOrder.length-1){
                            // console.log('ubn ',pro[i]['id']);
                            fillPro(pro[i],0,"");
                        }
                    }
                }
            }

            function fillPro(item, qty,isSelect) {
                $('#products-list').append(
                    `
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 rounded item-order-edit">
                        <div class="col-6 d-flex flex-row">
                            <input type="checkbox" class="my-3 mx-2 item-check-edit-order" ${isSelect} value=${item['price']}>
                            <img alt="img" class="rounded"  width="40">
                            <div class="ml-2"><span class="font-weight-bold d-block" id="product_content">${item['name']}</span><span class="spec">${item['memory']} GB</span></div>
                        </div>
                        <div class="col-6 d-flex flex-row align-items-center">
                            <!-- <span class="d-block">2</span> -->
                            <div class="pl-md-0 pl-2"> 
                                <!-- <span class="fa fa-minus-square text-secondary"></span> -->
                                <div class="form-outline">
                                    <label class="form-label" for="quantity-product" >Quantity </label>
                                    <input
                                            disabled
                                            name="item[${item['id']}]"
                                            style="width: 70px;"
                                            type="number"
                                            class="form-control quantity-product-edit-order"
                                            value=${qty}
                                            min="1"
                                            />
                                </div>
                            </div>
                            <span class="d-block ml-5 font-weight-bold item-price">${item['price']}$</span>
                            <a href="##">
                            </a>
                        </div>
                    </div>
                    `); 
            }
            
            var orderDetailModal = $('#orderDetailModal');
            //detail order
             $('.btn-detail-order').on('click',function(){
                orderDetailModal.show();
                console.log($(this).attr('data-order'))
                var data = {};
                data['id']= $(this).attr('data-order');
                try {
                    $.ajax({
                        type:'post',
                        url:'/master/z003/show',
                        dataType:'json',
                        loading: true,
                        data: data,
                        success: function(res){
                            var orderShow = res['order'];
                            var productsOrder = res['productOrder'];
                            var products = res['products'];
                            console.log(orderShow);
                            console.log(products);
                            console.log(productsOrder);
                            $(".order-info").empty();
                            $('.order-info').append("name: "+orderShow['name']+'<br/>'
                                +"phone: "+orderShow['phone']+'<br/>'
                                +"address: "+orderShow['address']+'<br/>'
                                +"email: "+orderShow['email']+'<br/>'
                                +"date: " +orderShow['date']+'<br/>'
                                +"note: "+orderShow['note']+"<br/>")
                            for(var i=0;i<productsOrder.length;i++){
                                $('.order-info').append("<li>"+productsOrder[i]['name']+"_"+productsOrder[i]['price']+"$"+"</li>");
                            }
                            $('#edit-order-id').val(orderShow['id']);
                            $( "#edit-order-name" ).val(orderShow['name'])
                            $( "#edit-order-phone" ).val(orderShow['phone'])
                            $( "#edit-order-avt" ).attr("src", 'http://localhost:8008/storage/'+orderShow['avatar'])
                            $( "#edit-order-address" ).val(orderShow['address'])
                            $( "#edit-order-email" ).val(orderShow['email'])
                            $( "#edit-order-date" ).val(orderShow['date'])
                            $( '#edit-order-qty').val(orderShow['quantity'])
                            $( '#edit-order-total').val(orderShow['total'])
                            
                            editor.setData(orderShow['note']);
                            $('#products-list').empty();
                            editOrder();
                            checkOrder(products,productsOrder);
                            update_amount();
                            updateTolQtyEditOrder();
                            // let myForm = document.getElementById('order-show');
                            // formDataUpdate = new FormData(myForm);
                            // console.log(formDataUpdate);
                        }, 
                        error: function(res) {
                        }
                    })
                } catch (e) {
                    alert('' + e.message);
                }
            })

            $('#close-detail-order').on('click',function(){
                orderDetailModal.hide();
            })

            function updateTolQtyEditOrder() {
                    
                $('.item-check-edit-order,.quantity-product-edit-order').on('keypress change', function(e){
                    update_amount();
                    console.log('test change')
                })
    
            }
            
            function update_amount() {
                var total_quantity = 0;
                var sum = 0;
                $('.item-order-edit').each(function(){
                    var checkboxItem =  $(this).find('.item-check-edit-order');
                    var isChecked = checkboxItem.is(':checked');
                    if(isChecked){
                        var quantity = $(this).find('.quantity-product-edit-order');
                        quantity.attr("disabled", false);
                        var price = parseInt($(this).find('.item-check-edit-order').val());
                        var qty = parseInt(quantity.val());
                        console.log(qty,price);
                        sum += price*qty;
                        console.log(sum);
                        total_quantity += 1*qty;
                    }  
                })
                $("#edit-order-qty").val(total_quantity);
                $('#edit-order-total').val(sum);
            }
        };

        this.bindEvents = function () {
            //initSlider();
            //initWheel();
            initSubmit();
            //initSliderMobile();  
        };

        this.resize = function () {

        };

        

        
        var initSubmit = function () {     
            //update order 
            $('#order-show').submit(function(event){
                event.preventDefault();
                var formDataUpdate = new FormData(this);
                console.log('formData'+formDataUpdate);
                console.log('test img',$('#edit-upload-order-avt').prop("files")[0]);
                var file_avatar = $('#edit-upload-order-avt').prop("files")[0];
                if(file_avatar != undefined){
                    formDataUpdate.append('avatar', file_avatar);
                }
                
                try {
                    $.ajax({
                        type:'post',
                        url:'/master/z003/update',
                        dataType:'json',
                        contentType: false,
                        processData: false,
                        loading: true,
                        data: formDataUpdate,
                        success: function(res){
                            alert("Updated order")
                            getListContent();
                            $('.modal').css("display", "none");          
                        }, 
                        error: function(res) {
                            $("#update_noti_err").empty();
                            var er =  res.responseJSON.errors;
                            for (const property in er) {
                                $("#update_noti_err").append(`
                                <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="true"  data-delay="0" style="">
                                    <div class="toast-header">
                                        <strong class="mr-auto">Error</strong>
                                        <small><?php echo " " . date("h:i:sa"); ?></small>
                                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="toast-body">
                                        ${property}  ${er[property]}
                                    </div>
                                </div>`
                                )
                            }
                            $(".toast").toast('show');
                        }
                    })
                } catch (e) {
                    alert('' + e.message);
                }
            });
        }
    };

    $(document).ready(function () {
        var homeObj = new homeCls();
        homeObj.run();

        // On resize
        $(window).resize(function () {
            homeObj.resize();
        });
    });
}(jQuery, $.app));
