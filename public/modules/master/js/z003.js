(function ($, app) {

    var homeCls = function () {

        var el = {};

        function getListContent() {
            try {
                var data = {};
                $.ajax({
                    type: 'POST',
                    url: '/master/z003/getOrders',
                    dataType: 'html',
                    loading: true,
                    data: data,
                    success: function (res) {
                        $("#orders").empty();
                        $("#orders").append(res);
                    },
                    // Ajax error
                    error: function (res) {

                    }
                });
            } catch (e) {
                alert('' + e.message);
            }
        }
    
        this.run = function () {
            this.init();
            this.bindEvents();
        };

        this.init = function () {
            $('.datepicker').datepicker({ dateFormat: 'yy-mm-dd' });
            //add modal
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("new-order-btn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            
            //init
            var seAll = $('#selectAllProduct');
            // console.log($('#selectAllProduct'))
            
            var seItem = $('.item_check');
            seItem.prop('checked', false);
            
            //selectAll
            seAll.click(function(){
                if(seAll.is(":checked")){
                    $('.item-check').prop('checked', true);
                }
                else $('.item-check').prop('checked', false);
            })
           
            //delete order
            var delOrders = $('.order-delete-btn');
            for(var i=0 ;i<delOrders.length;i++){
                delOrders[i].addEventListener('click',function(){
                    var choice = confirm(this.getAttribute('data-confirm'));
                    if (choice) {
                        var data ={};
                        data['id'] = this.dataset.order;
                        $.ajax({
                            type:'post',
                            url : '/master/z003/delete',
                            dataType: 'json',
                            loading: true,
                            data:data,
                            success: function(res){
                                switch(res['status']){
                                    case '200':
                                        getListContent();
                                        console.log(res['data'])
                                        break;
                                }
                            }
                        })
                    }
                })
            }                      
            //ckeditor
            CKEDITOR.replace('note-order');

            $('.item-check, .quantity-product, #selectAllProduct').on('keypress change', function(e){
                update_amount();
                updateInputQtyTotal();
            })

            function update_amount() {
                var total_quantity = 0;
                var sum = 0;
                $('.item_order').each(function(){
                    var checkboxItem =  $(this).find('.item-check');
                    var isChecked = checkboxItem.is(':checked');
                    if(isChecked){
                        var quantity = $(this).find('.quantity-product');
                        quantity.attr("disabled", false);
                        var price = $(this).find('.item-check').val();
                        var qty = quantity.val();
                        console.log(qty,price);
                        sum += price*qty;
                        total_quantity += 1*qty;
                    }  
                })
                $("#total-quantity").text(total_quantity);
                $('#order_total_amount').text(sum);
            }

            function updateInputQtyTotal(){
                $("#date-quantity-order").val($("#total-quantity").text());
                $("#date-total-order").val($("#order_total_amount").text());
            }

            updateInputQtyTotal();

            el.btnSubmit1 = $('.btn-submit-info');
            el.btnSubmit2 = $('.btn-submit-voucher');
            el.btnSubmitOrder = $('#form-order #btn-submit-order');
            //show error toast
            $(".toast").toast('show');

        };

        this.bindEvents = function () {
            //initSlider();
            //initWheel();
            initSubmit();
            //initSliderMobile();  
        };

        this.resize = function () {

        };

        var initSlider = function () {
            var swiperProd = new Swiper('.swiper-prod', {
                slidesPerView: 4,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.btn-prod-next',
                    prevEl: '.btn-prod-prev',
                },
                breakpoints: {
                    480: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 2,

                    },
                    991: {
                        spaceBetween: 30,
                        slidesPerView: 2,
                    },


                }
            });

            var swiperNews = new Swiper('.swiper-news', {
                slidesPerView: 4,
                spaceBetween: 30,
                navigation: {
                    nextEl: '.btn-news-next',
                    prevEl: '.btn-news-prev',
                },
                breakpoints: {
                    480: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    768: {
                        slidesPerView: 2,

                    },
                    991: {
                        spaceBetween: 30,
                        slidesPerView: 2,
                    },


                }
            });

            var galleryThumbs = new Swiper('.swiper-tab', {
                spaceBetween: 0,
                slidesPerView: 6,
                freeMode: true,
                watchSlidesVisibility: true,
                watchSlidesProgress: true,
                allowTouchMove: false,
                navigation: {
                    nextEl: '.tab-button-next',
                    prevEl: '.tab-button-prev',
                },
                breakpoints: {
                    480: {
                        slidesPerView: 3,
                        allowTouchMove: true,
                    },
                    768: {
                        slidesPerView: 3,
                        allowTouchMove: true,
                    },
                    991: {
                        slidesPerView: 3,
                        allowTouchMove: true,
                    },
                }
            });
            var galleryTop = new Swiper('.gallery-thumbs', {
                spaceBetween: 10,
                allowTouchMove: false,
                thumbs: {
                    swiper: galleryThumbs
                }
            });

            AOS.init();
        };

        var initSliderMobile = function() {
            if ($(window).innerWidth() < 768) {
                $('.slide-voucher-mobile').slick({
                    autoplay: false,
                    arrow: true, 
                    dots: false,
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    prevArrow: '<a href="javascript:void(0)" class="prev-slide"><i class="fa fa-angle-left"></i></a>',
                    nextArrow: '<a href="javascript:void(0)" class="next-slide"><i class="fa fa-angle-right"></i></a>',
                    responsive: [
                        {
                            breakpoint: 767,
                            settings: {
                                slidesToShow: 3,
                            }
                        },
                        {
                            breakpoint: 480,
                            settings: {
                                slidesToShow: 2,
                            }
                        }
                    ]
                });
            }
        }
        
        var initWheel = function () {
            let theWheel = new Winwheel({
                'numSegments'       : 12,
                'outerRadius'       : 150,
                'drawMode'          : 'image',
                'drawText'          : true,
                'textStrokeStyle'   : '#fff0',
                'textFillStyle'     : '#fff0',
                'pointerAngle'   : 180,
                'segments'     :
                    [
                        {'text' : '100K'},
                        {'text' : 'ChĂºc báº¡n may may máº¯n láº§n sau'},
                        {'text' : '200K'},
                        {'text' : '100K'},
                        {'text' : '50K'},
                        {'text' : 'ChĂºc báº¡n may may máº¯n láº§n sau'},
                        {'text' : '50K'},
                        {'text' : '100K'},
                        {'text' : 'ChĂºc báº¡n may may máº¯n láº§n sau'},
                        {'text' : '200K'},
                        {'text' : '50K'},
                        {'text' : '200K'}
                    ],
                'animation' :
                    {
                        'type'     : 'spinToStop',
                        'duration' : 5,
                        'spins'    : 8,
                        'callbackFinished' : alertPrize
                    }
            });

            let loadedImg = new Image();
            loadedImg.onload = function()
            {
                theWheel.wheelImage = loadedImg;
                theWheel.draw();
            }

            // Set the image source, once complete this will trigger the onLoad callback (above).
            loadedImg.src = $.app.vars.url + "assets/vincom/images/wheel.png";

            let wheelPower    = 0;
            let wheelSpinning = false;

            // Click handler for spin button.
            $('.btn-play').click(function () {
                $('#notiModal').modal();
                $('.js-alert-form').addClass('hidden');
            });

            // Called when the animation has finished.
            function alertPrize(indicatedSegment) {
                setTimeout(function (){
                    $('#successModal').modal();
                },1000);


                el.btnSubmit2.unbind('click').bind('click', function (e) {
                    $.app.facebook.share($.app.vars.url, null, $.app.vars.url + '?contest_shared=1&id=' + el.btnSubmit2.data('id'), true);
                });
            }
        };

        //create order
        var initSubmit = function () {
            $('#form-order').submit(function(event){
                event.preventDefault();
                var formData = new FormData(this);
                console.log('formData'+formData);
                console.log('test',$('#file-avatar').prop("files")[0]);
                var file_avatar = $('#file-avatar').prop("files")[0];
                if(file_avatar != undefined){
                    formData.append('avatar', file_avatar);
                }
                
                try {
                    $.ajax({
                        type:'post',
                        url:'/master/z003/create',
                        dataType:'json',
                        contentType: false,
                        processData: false,
                        loading: true,
                        data: formData,
                        success: function(res){
                            alert("Created order")
                            getListContent();
                            $('.modal').css("display", "none");          
                        }, 
                        error: function(res) {
                            $("#noti_err").empty();
                            var er =  res.responseJSON.errors;
                            for (const property in er) {
                                $("#noti_err").append(`
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
            // console.log($('#form-order').serialize());            
            // console.log('test2',$('#file-avatar'))

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

//console.log($(".order_total #order_total_amount span").text());

