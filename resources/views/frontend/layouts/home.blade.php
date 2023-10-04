 
    @extends('frontend.layouts.master')
    @section('body')
                
                    <div class="hero__item set-bg">
                        
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>
                            <ul class="uk-slider-items uk-grid">
                                <li class="uk-width-4">
                                    <div class="uk-panel">
                                        <img src="{{ asset('assets/frontend/img')}}/banner/banner-5.jpg" width="1800" height="1200" alt="">
                                    </div>
                                </li>
                                <li class="uk-width-4">
                                    <div class="uk-panel">
                                        <img src="{{ asset('assets/frontend/img')}}/banner/banner-2.jpg" width="1800" height="1200" alt="">
                                    </div>
                                </li>
                                <li class="uk-width-4">
                                    <div class="uk-panel">
                                        <img src="{{ asset('assets/frontend/img')}}/banner/banner-3.jpg" width="1800" height="1200" alt="">
                                    </div>
                                </li>
                                <li class="uk-width-4">
                                    <div class="uk-panel">
                                        <img src="{{ asset('assets/frontend/img')}}/banner/banner-4.jpg" width="1800" height="1200" alt="">
                                    </div>
                                </li>
                                <li class="uk-width-4">
                                    <div class="uk-panel">
                                        <img src="{{ asset('assets/frontend/img')}}/banner/banner-1.jpg" width="1800" height="1200" alt="">
                                    </div>
                                </li>
                            </ul>

                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('assets/frontend/img/')}}/banner/banner-1.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('assets/frontend/img/')}}/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Flash Sale Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="filter__bottom">
                <div class="row">
                    <div class="col-lg-6 col-md-5">
                        <div class="filter__font">
                            <span>@lang('frontend.flash_sale')</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timer">
                <div class="row">
                    <div class="col-lg-10 col-md-8 col-sm-9">
                        <div id="countdown">
                            <ul>
                                <span class="txtone">@lang('frontend.on_sale_now')</span>
                                <span class="txttwo">@lang('frontend.ending_in')</span>
                                <li class="count"><span id="days"></span></li> :
                                <li class="count"><span id="hours"></span></li> :
                                <li class="count"><span id="minutes"></span></li> :
                                <li class="count"><span id="seconds"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-3">
                        <div class="more_btn">
                            <a href="{{url('/flash_sale_product')}}">@lang('frontend.shop_more')</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-1.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Women's & Girls' Fashion</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-2.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Phone Cases</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-3.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Tshirts</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-4.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Smartwatches</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-5.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">In-Ear Headphones</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-1.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Jersey</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Flash Sale Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="section-title">
                <h2>@lang('frontend.featured_category')</h2>
                <h6>@lang('frontend.featured_category_text')</h6>
            </div>
            <div class="row">
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-1.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Jersey</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-2.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Phone Cases</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-3.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Tshirts</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-4.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Smartwatches</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-5.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">In-Ear Headphones</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-1.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Jersey</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-2.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Phone Cases</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-3.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Tshirts</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-4.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Smartwatches</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-5.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">In-Ear Headphones</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-4.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">Smartwatches</div>
                    </div>
                </div>
                <div class="responsive">
                    <div class="gallery">
                        <a target="_blank" href="#">
                            <img src="{{ asset('assets/frontend/img/')}}/categories/cat-5.jpg" alt="Cinque Terre" width="600" height="400">
                        </a>
                        <div class="desc">In-Ear Headphones</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Categories Section End -->
    
    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="section-title">
                <h2>@lang('frontend.featured_product')</h2>
                <h6>@lang('frontend.featured_product_text')</h6>
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
            dayMonth = "09/03/",
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