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
            console.log($('#selectAllProduct'))
            
            var seItem = $('.item_check');
            seItem.prop('checked', false);
            
            //selectAll
            seAll.click(function(){
                if(seAll.is(":checked")){
                    $('.item_check').prop('checked', true);
                }
                else $('.item_check').prop('checked', false);
            })
            //calc total amount
            for(var j=0;j<seItem.length;j++){
            
            }

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

            el.btnSubmit1 = $('.btn-submit-info');
            el.btnSubmit2 = $('.btn-submit-voucher');
            el.btnSubmitOrder = $('#form-order #btn-submit-order');
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

        var initSubmit = function () {
            el.btnSubmitOrder.on('click', function(){
                $('#form-order').submit(function(ev){
                    ev.preventDefault();
                    try {
                        $.ajax({
                            type:'post',
                            url : '/master/z003/create',
                            dataType: 'json',
                            loading: true,
                            data: $('#form-order').serialize(),
                            success: function(res){
                                console.log(res)
                                console.log(res.status=="200");
                                if(res.status=="200"){
                                    window.location.reload();
                                }               
                            }
                        })
                    } catch (e) {
                        alert('' + e.message);
                    }
                })
                                
            })
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

