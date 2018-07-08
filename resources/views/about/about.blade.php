@extends('layouts.app')

@section('title', 'About')

@section('content')
    <!-- banner -->
    <div class="banner inner-bg-w3" id="home">
        <!-- header -->
        <div class="banner-top">
            <div class="social-bnr-agileits">
                <ul>
                    <li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="contact-bnr-w3-agile">
                <ul>
                    <li><a href="#"><img src="{{URL::asset('images/VIE.png')}}" width="100%" height="100%"></a></li>
                    <li><a href="#"><img src="{{URL::asset('images/ENG.png')}}" width="100%" height="100%"></a></li>
                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:foodparadise@gmail.com">foodparadise@gmail.com</a>
                    </li>
                    <li><i class="fa fa-phone" aria-hidden="true"></i>+84 969 938 946</li>
                    <li><a href="#"><i class="fa fa-opencart"></i></a></li>
                    <li>
                        <div class="search">
                            <input class="search_box" type="checkbox" id="search_box">
                            <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search"
                                                                              aria-hidden="true"></span></label>
                            <div class="search_form">
                                <form action="#" method="post">
                                    <input type="search" name="Search" placeholder="Search..." required=""/>
                                    <input type="submit" value="Send"/>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <header>
            <div class="container">

                <!-- navigation -->
                <div class="w3_navigation">
                    <nav class="navbar navbar-default">
                        <div class="navbar-header navbar-left">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="w3_navigation_pos">
                                <h1><a href="/"><span>F</span>ood <span>P</span>aradise</a></h1>
                            </div>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                            <nav class="menu menu--miranda">
                                <ul class="nav navbar-nav menu__list">
                                    <li class="menu__item "><a href="/" class="menu__link">TRANG
                                            CHỦ</a>
                                    </li>
                                    <li class="menu__item @section('about') menu__item--current @show"><a href="/about" class=" menu__link">GIỚI THIỆU</a></li>
                                    <li class="dropdown menu__item  @section('service') @show">
                                        <a href="#" class="dropdown-toggle menu__link" data-toggle="dropdown"
                                           role="button" aria-haspopup="true" aria-expanded="false">DỊCH VỤ<span
                                                    class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/code">Tiệc Cưới</a></li>
                                            <li><a href="/icon">Tiệc Cá Nhân</a></li>
                                            <li><a href="/code">Tiệc Công Ty</a></li>
                                            <li><a href="/icon">Tiệc Ngoài</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu__item"><a href="/gallery" class=" menu__link">THỰC ĐƠN</a></li>
                                    <li class="menu__item"><a href="/contact" class=" menu__link">ƯU ĐÃI</a></li>
                                    <li class="menu__item"><a href="/contact" class=" menu__link">LIÊN HỆ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </nav>
                </div>
                <div class="clearfix"></div>
                <!-- //navigation -->
            </div>
        </header>
        <!-- //header -->
    </div>
    <!-- //banner -->
@section('main_content')
    <!-- about-top -->
    <div class="agile-about-top">
        <div class="container">
            <h2 class="tittle-w3">About<span>Us</span></h2>
            <div class="about-section">
                <div class="col-md-7 ab-left">
                    <div class="grid">
                        <div class="h-f">
                            <figure class="effect-jazz">
                                <img src="{{URL::asset('images/s1.jpg')}}" alt="img25">
                                <figcaption>
                                    <h4>Delicious <span>Food</span></h4>
                                    <p>Etiam quis quam auctor, cursus ipsum a, placerat dui.</p>
                                </figcaption>
                            </figure>

                        </div>
                        <div class="h-f">
                            <figure class="effect-jazz">
                                <img src="{{URL::asset('images/s2.jpg')}}" alt="img25">
                                <figcaption>
                                    <h4>Delicious <span>Food</span></h4>
                                    <p>Etiam quis quam auctor, cursus ipsum a, placerat dui.</p>

                                </figcaption>
                            </figure>

                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-5 ab-text">
                    <h3 class="tittle-w3"><span>A brief history of </span>VỀ CHÚNG TÔI</h3>
                    <p>Etiam quis quam auctor, cursus ipsum a, placerat dui. Aliquam erat volutpat. Donec bibendum
                        viverra commodo. Morbi erat est, fringilla id sollicitudin sed, hendrerit nec est. Fusce maximus
                        scelerisque turpis vel tempus
                        <span>Morbi scelerisque a dolor vel feugiat. Nunc volutpat, magna in interdum commodo, magna orci venenatis risus, eu congue dolor ante quis eros.</span>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //about-top -->
    <!--count-->
    <div class="count-agileits">
        <div id="particles-js"></div>

        <div class="count-grids">
            <h3 class="tittle-w3">Handling <span>your needs</span> with care</h3>
            <div class="count-bgcolor-w3ls">
                <div class="col-md-4 count-grid">
                    <i class="fa fa-cutlery" aria-hidden="true"></i>
                    <div class="count hvr-bounce-to-bottom">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1052'
                             data-delay='.5' data-increment="100">1052
                        </div>
                        <span></span>
                        <h5>Products available</h5>
                    </div>
                </div>
                <div class="col-md-4 count-grid">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <div class="count hvr-bounce-to-bottom">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='372'
                             data-delay='.5' data-increment="100">372
                        </div>
                        <span></span>
                        <h5>Clients come back</h5>
                    </div>
                </div>
                <div class="col-md-4 count-grid">
                    <i class="fa fa-user-plus" aria-hidden="true"></i>
                    <div class="count hvr-bounce-to-bottom">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='105209'
                             data-delay='.5' data-increment="100">105209
                        </div>
                        <span></span>
                        <h5>Site members</h5>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--count-->
    <!--team-->
    <div class="team">
        <div class="container">
            <h3 class="tittle-w3"><span>Our </span>Chefs</h3>
            <div class="team-row">
                <div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s">
                    <h5>Thom<span>son</span></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur</p>
                    <div class="social-bnr-agileits about-agile">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-img">
                        <img src="{{URL::asset('images/t1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3 team-grids team-mdl wow fadeInUp animated" data-wow-delay=".5s">
                    <h5>Mary <span>Doe</span></h5>
                    <p>Consectetur adipi lorem ipsum dolor sit amet, est eligendi scing elit consectetur.</p>
                    <div class="social-bnr-agileits about-agile">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-img">
                        <img src="{{URL::asset('images/t2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3 team-grids team-mdl1 wow fadeInUp animated" data-wow-delay=".5s">
                    <h5>Victo<span>ria</span></h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipi est eligendi scing elit consectetur.</p>
                    <div class="social-bnr-agileits about-agile">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-img">
                        <img src="{{URL::asset('images/t3.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3 team-grids wow fadeInUp animated" data-wow-delay=".5s">
                    <h5>Patrick <span>Pool</span></h5>
                    <p>Eligendi scing elit lorem ipsum dolor sit amet, consectetur dolore magnam aliquam</p>
                    <div class="social-bnr-agileits about-agile">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="team-img">
                        <img src="{{URL::asset('images/t4.jpg')}}" alt="">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!--//team-->
@show
@endsection