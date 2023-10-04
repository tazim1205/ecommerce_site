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
                        <h2>Organi Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Price</h4>
                            <div class="price-range-wrap">
                                <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                    data-min="10" data-max="540">
                                    <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                    <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                                </div>
                                <div class="range-slider">
                                    <div class="price-input">
                                        <input type="text" id="minamount">
                                        <input type="text" id="maxamount">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h4>Colors</h4>
                            <div class="sidebar__item__color">
                                <label>
                                    <input type="radio">
                                    White
                                </label>
                            </div>
                            <div class="sidebar__item__color">
                                <label>
                                    <input type="radio">
                                    Gray
                                </label>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h4>Popular Size</h4>
                            <div class="sidebar__item__size">
                                <label>
                                    <input type="radio">
                                    Large
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label>
                                    <input type="radio">
                                    Medium
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label>
                                    <input type="radio">
                                    Small
                                </label>
                            </div>
                            <div class="sidebar__item__size">
                                <label>
                                    <input type="radio">
                                    Tiny
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-6 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-4">
                                <form action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search by name">
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-transparent">
                                                <i class="fa fa-search"></i>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="product_grid">
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
                            <div class="product_grid">
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
                            <div class="product_grid">
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
                            <div class="product_grid">
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
                            <div class="product_grid">
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
                            <div class="product_grid">
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
                            <div class="product_grid">
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
                            <div class="product_grid">
                                <div class="row">
                                    <div class="content">
                                        <div class="left">
                                            <div class="product_img">
                                                <img src="{{ asset('assets/frontend/img')}}/product/product-8.jpg" alt="">
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
                            <div class="product_grid">
                                <div class="row">
                                    <div class="content">
                                        <div class="left">
                                            <div class="product_img">
                                                <img src="{{ asset('assets/frontend/img')}}/product/product-9.jpg" alt="">
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
                            <div class="product_grid">
                                <div class="row">
                                    <div class="content">
                                        <div class="left">
                                            <div class="product_img">
                                                <img src="{{ asset('assets/frontend/img')}}/product/product-10.jpg" alt="">
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
                            <div class="product_grid">
                                <div class="row">
                                    <div class="content">
                                        <div class="left">
                                            <div class="product_img">
                                                <img src="{{ asset('assets/frontend/img')}}/product/product-11.jpg" alt="">
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
                            <div class="product_grid">
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
                        </div>
                    </div>
                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection
