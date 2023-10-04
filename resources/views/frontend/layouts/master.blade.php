<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Get Ready To Shop">
    <meta name="keywords" content="unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @php use App\Models\site_settings; $data= site_settings::get(); @endphp
    @if($data)
    @foreach($data as $v) 

    <title>{{ $v->title }} | {{ $v->name }}</title>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/site_settings/')}}/{{ $v->image }}">

    @endforeach
    @endif

    <style>
    body
    {
        font-family: 'Hind Siliguri', sans-serif;
    }
    </style>
    
    <!-- CSS Libraries -->
    @include('frontend.layouts.style')
</head>

<body>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
        @if($data)
        @foreach($data as $v) 
            <a href="#"><img src="{{ asset('assets/images/site_settings/')}}/{{ $v->image }}" alt=""></a>
        @endforeach
        @endif
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <span class="arrow_carrot-down"></span>@lang('frontend.language')
                <ul>
                @if (App::isLocale('bn'))
                    <li><a href="{{ route('lang', 'en') }}">English</a>
                    <img src="{{ asset('assets/images/flags/us.jpg') }}" alt="user-image" class="me-0 me-sm-1" height="12">
                    </li>
                    @else
                    <li><a href="{{ route('lang', 'bn') }}">Bangla</a>
                    <img src="{{ asset('assets/images/flags/bd.jpg') }}" alt="user-image" class="me-0 me-sm-1" height="12">
                </li>
                @endif
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="{{request()->Is('/') ? 'active' : ''}}"><a href="{{('/')}}">@lang('frontend.home')</a></li>
                <li class="{{request()->Is('shop') ? 'active' : ''}}"><a href="{{url('/shop')}}">@lang('frontend.shop')</a></li>
                <li class="{{request()->Is('blog') ? 'active' : ''}}"><a href="./blog.html">@lang('frontend.blog')</a></li>
                <li class="{{request()->Is('contact') ? 'active' : ''}}"><a href="{{url('/contact')}}">@lang('frontend.contact')</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> tjm4181@gmail.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> tjm4181@gmail.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <span class="arrow_carrot-down"></span>@lang('frontend.language')
                                <ul>
                                @if (App::isLocale('bn'))
                                    <li><a href="{{ route('lang', 'en') }}">English</a>
                                    <img src="{{ asset('assets/images/flags/us.jpg') }}" alt="user-image" class="me-0 me-sm-1" height="12">
                                    </li>
                                    @else
                                    <li><a href="{{ route('lang', 'bn') }}">Bangla</a>
                                    <img src="{{ asset('assets/images/flags/bd.jpg') }}" alt="user-image" class="me-0 me-sm-1" height="12">
                                </li>
                                @endif
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    @if($data)
                    @foreach($data as $v)
                    <div class="header__logo">
                        <a href="{{('/')}}"><img src="{{ asset('assets/images/site_settings/')}}/{{ $v->image }}" alt=""></a>
                    </div>
                    @endforeach
                    @endif
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="{{request()->Is('/') ? 'active' : ''}}"><a href="{{('/')}}">@lang('frontend.home')</a></li>
                            <li class="{{request()->Is('shop') ? 'active' : ''}}"><a href="{{url('/shop')}}">@lang('frontend.shop')</a></li>
                            <li class="{{request()->Is('blog') ? 'active' : ''}}"><a href="./blog.html">@lang('frontend.blog')</a></li>
                            <li class="{{request()->Is('contact') ? 'active' : ''}}"><a href="{{url('/contact')}}">@lang('frontend.contact')</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-none">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero {{request()->Is('/') ? 'mb-5' : ''}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>@lang('frontend.all_departments')</span>
                        </div>
                        <ul class="collapse{{request()->Is('/') ? 'show' : ''}} {{request()->Is('/') ? '' : 'position-absolute'}}" style="{{request()->Is('/') ? '' : 'width: calc(100% - 30px); z-index: 1;background: white;'}}">
                            <div class="uk-inline">
                                @if($categorie)
                                @foreach($categorie as $c)
                                @php
                                $count = DB::table('sub_categories')->where('cat_id',$c->id)->count();
                                @endphp
                                @if($count > 0)
                                <div class="dropdown">
                                <button class="dropbtn">@if($lang == 'en'){{$c->cat_name_en}}@elseif($lang == 'bn'){{$c->cat_name_bn}}@endif <span uk-drop-parent-icon></span></button>
                                    <div class="dropdown-content">
                                        @foreach($sub_categorie as $s)
                                        @if($s->cat_id == $c->id)
                                        <a href="{{url('sub_categorie_product')}}/{{$s->id}}">@if($lang == 'en'){{$s->sub_cat_name_en}}@elseif($lang == 'bn'){{$s->sub_cat_name_bn}}@endif</a>
                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                                @else
                                <button class="dropbtn"><a class="nav-item" href="{{url('categorie_product')}}/{{$c->id}}">@if($lang == 'en'){{$c->cat_name_en}}@elseif($lang == 'bn'){{$c->cat_name_bn}}@endif</a></button>
                                @endif
                                @endforeach
                                @endif
                            </div>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <input type="text" placeholder="@lang('frontend.search_button_text')">
                                <button type="submit" class="site-btn">@lang('frontend.search')</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>01988444382</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                    
                @yield('body')

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        @if($data)
                        @foreach($data as $v)
                        <div class="footer__about__logo">
                            <a href="{{('/')}}"><img src="{{ asset('assets/images/site_settings/')}}/{{ $v->image }}" alt=""></a>
                        </div>
                        @endforeach
                        @endif
                        <ul>
                            <li>Address: Hazi fazal master lane, Mizan road, Feni</li>
                            <li>Phone: 01988444382</li>
                            <li>Email: tjm4181@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" style="color: #ff2700;">Skill Based IT</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    @include('frontend.Layouts.script')



</body>

</html>