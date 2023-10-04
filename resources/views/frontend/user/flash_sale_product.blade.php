@extends('frontend.layouts.master')
@section('body')

                </div>
            </div>
        </div>
    </section>

<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="{{ asset('assets/frontend/img')}}/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>@lang('frontend.flash_sale')</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
        <div class="container">
            <div class="flash_timer">
                <div class="row">
                    <div class="col-lg-10 col-md-8 col-sm-9">
                        <div id="flash_countdown">
                            <ul>
                                <span class="flash_txtone">On Sale Now</span>
                                <span class="flash_txttwo">Ends In</span>
                                <li class="count"><span id="days"></span></li> :
                                <li class="count"><span id="hours"></span></li> :
                                <li class="count"><span id="minutes"></span></li> :
                                <li class="count"><span id="seconds"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-5">
                    <div class="flash_font">
                        <span>One Sale Now</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="row">
                            <div class="content">
                            <div class="left">
                                <div class="product_img">
                                    <img src="{{ asset('assets/frontend/img')}}/product/product-12.jpg" alt="">
                                </div>
                                <div class="product_details">
                                    <h4 class="title">Woakers</h4>
                                    <p class="discription">Men's White Printed Sneakers</p>
                                    <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>
                                    <a href="" class="secondary-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="row">
                            <div class="content">
                            <div class="left">
                                <div class="product_img">
                                    <img src="{{ asset('assets/frontend/img')}}/product/product-1.jpg" alt="">
                                </div>
                                <div class="product_details">
                                    <h4 class="title">Woakers</h4>
                                    <p class="discription">Men's White Printed Sneakers</p>
                                    <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>
                                    <a href="" class="secondary-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="row">
                            <div class="content">
                            <div class="left">
                                <div class="product_img">
                                    <img src="{{ asset('assets/frontend/img')}}/product/product-2.jpg" alt="">
                                </div>
                                <div class="product_details">
                                    <h4 class="title">Woakers</h4>
                                    <p class="discription">Men's White Printed Sneakers</p>
                                    <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>
                                    <a href="" class="secondary-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="row">
                            <div class="content">
                            <div class="left">
                                <div class="product_img">
                                    <img src="{{ asset('assets/frontend/img')}}/product/product-3.jpg" alt="">
                                </div>
                                <div class="product_details">
                                    <h4 class="title">Woakers</h4>
                                    <p class="discription">Men's White Printed Sneakers</p>
                                    <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>
                                    <a href="" class="secondary-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="row">
                            <div class="content">
                            <div class="left">
                                <div class="product_img">
                                    <img src="{{ asset('assets/frontend/img')}}/product/product-4.jpg" alt="">
                                </div>
                                <div class="product_details">
                                    <h4 class="title">Woakers</h4>
                                    <p class="discription">Men's White Printed Sneakers</p>
                                    <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>
                                    <a href="" class="secondary-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="row">
                            <div class="content">
                                <div class="left">
                                    <div class="product_img">
                                        <img src="{{ asset('assets/frontend/img')}}/product/product-5.jpg" alt="">
                                    </div>
                                    <div class="product_details">
                                        <h4 class="title">Woakers</h4>
                                        <p class="discription">Men's White Printed Sneakers</p>
                                        <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>
                                        <a href="" class="secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="row">
                            <div class="content">
                                <div class="left">
                                    <div class="product_img">
                                        <img src="{{ asset('assets/frontend/img')}}/product/product-6.jpg" alt="">
                                    </div>
                                    <div class="product_details">
                                        <h4 class="title">Woakers</h4>
                                        <p class="discription">Men's White Printed Sneakers</p>
                                        <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>
                                        <a href="" class="secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="row">
                            <div class="content">
                                <div class="left">
                                    <div class="product_img">
                                        <img src="{{ asset('assets/frontend/img')}}/product/product-7.jpg" alt="">
                                    </div>
                                    <div class="product_details">
                                        <h4 class="title">Woakers</h4>
                                        <p class="discription">Men's White Printed Sneakers</p>
                                        <p class="price">₹824 <span class="price_original">₹4000</span> <span class="offer"> 79% OFF</span></p>
                                        <a href="" class="secondary-btn">View Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        (function () {
            const second = 1000,
            minute = second * 60,
            hour = minute * 60,
            day = hour * 24;
  
            //I'm adding this section so I don't have to keep updating this pen every year :-)
            //remove this if you don't need it
    
            let today = new Date(),
            dd = String(today.getDate()).padStart(2, "0"),
            mm = String(today.getMonth() + 1).padStart(2, "0"),
            yyyy = today.getFullYear(),
            dayMonth = "08/31/",
            birthday = dayMonth + yyyy;
  
            today = mm + "/" + dd + "/" + yyyy;

            //end
  
            const countDown = new Date(birthday).getTime(),
            x = setInterval(function () {
                const now = new Date().getTime(),
                distance = countDown - now;
      
                (document.getElementById("days").innerText = Math.floor(distance / day)),
                (document.getElementById("hours").innerText = Math.floor(
                    (distance % day) / hour
                    )),
                (document.getElementById("minutes").innerText = Math.floor(
                    (distance % hour) / minute
                    )),
                (document.getElementById("seconds").innerText = Math.floor(
                    (distance % minute) / second
                    ));
      
                    //do something later when date is reached
                    if (distance < 0) {
                        document.getElementById("headline").innerText = "It's my birthday!";
                        document.getElementById("countdown").style.display = "none";
                        document.getElementById("content").style.display = "block";
                        clearInterval(x);
                    }
                    //seconds
                }, 0);
            })();

    </script>
@endsection
