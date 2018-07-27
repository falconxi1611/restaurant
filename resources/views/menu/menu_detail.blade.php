@extends('about.about')

@section('title', 'Set Menu')
@section('menu', 'menu__item--current')
@section('about', '')
@section('main_content')
    <!-- //banner -->
    <script type="text/javascript">

        function handler1() {
            document.getElementById("people_cnt").value = document.getElementById("p1").value;
            document.getElementById("people_form").submit();
        }

        function handler2() {
            document.getElementById("people_cnt").value = document.getElementById("p2").value;
            document.getElementById("people_form").submit();
        }

        function handler3() {
            document.getElementById("people_cnt").value = document.getElementById("p3").value;
            document.getElementById("people_form").submit();
        }
    </script>
    <!-- top Products -->
    <div class="div_menu_align">
        <div class="ads-grid_shop">
            <div class="shop_inner_inf">
                <div class="col-md-4 single-right-left ">
                    <div class="grid images_3_of_2">
                        <div class="flexslider">

                            <ul class="slides">
                                @foreach ($food_list as $food)
                                    <li data-thumb="{{asset("images/food/$food->IMAGE")}}">
                                        <div class="thumb-image">
                                            <img src="{{asset("images/food/$food->IMAGE")}}"
                                                 data-imagezoom="true"
                                                 class="img-responsive">
                                            <div>
                                                <h4>{{$food->FOOD_NAME}}</h4>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 single-right-left simpleCart_shelfItem">
                    <h3>{{$menu->MENU_NAME}}</h3>
                    <p><span class="item_price">{{number_format($menu->COST)}} VND</span>
                        {{--<del>$1,199</del>--}}
                    </p>
                    <p>Danh sách món ăn:</p>
                    <div class="w3-container">
                        <ul class="w3-ul">
                            @foreach ($food_list as $food)
                                <li>{{$food->FOOD_NAME}}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="size_menu">
                        <label class="radio-inline"><input type="radio" name="people" id='p1' value="8"
                                                           onclick="handler1()"  @if($flg == 8){{'checked'}} @endif">Bàn 8
                            Người</label>
                        <label class="radio-inline"><input type="radio" name="people" id='p2' value="10"
                                                           onclick="handler2()" @if($flg == 10){{'checked'}} @endif?>Bàn 10
                            Người</label>
                        <label class="radio-inline"><input type="radio" name="people" id='p3' value="12"
                                                           onclick="handler3()" @if($flg == 12){{'checked'}} @endif>Bàn 12
                            Người</label>
                    </div>
                    <div class="description">
                        <h5>CODE GIẢM GIÁ</h5>
                        <form action="#" method="post">
                            <input type="text" name="code" value="Enter your code" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = 'Enter your code';}"
                                   required="">
                            <input type="submit" value="Check">
                        </form>
                    </div>

                    <div class="rating1">
                        <ul class="stars">
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>

                    <div class="occasion-cart">
                        <div class="shoe single-item single_page_b">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="shoe_item" value="{{$menu->MENU_NAME}}">
                                <input type="hidden" name="amount" value="{{$menu->COST}}">
                                <input type="submit" name="submit" value="Add to cart" class="button add">
                                <input type="hidden" name="image" value="{{$menu->IMAGE}}">
                                <input type="hidden" name="people_num" value="{{$flg}}">
                                <input type="hidden" name="_token" id="csrf-token" value="{{csrf_token()}}">

                                <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                            </form>

                        </div>
                    </div>

                    {{--Form for people--}}
                    <form id="people_form" action="/detail" method="post">
                        <input type="hidden" name="ID" value="{{$menu->ID}}">
                        <input type="hidden" id="people_cnt" name="people" value="10">
                        @csrf
                    </form>

                </div>
                <div class="clearfix"></div>
                <!--/tabs-->
                <div class="responsive_tabs">
                    <div id="horizontalTab">
                        <ul class="resp-tabs-list">
                            <li>Description</li>
                            <li>Reviews</li>
                            <li>Information</li>
                        </ul>
                        <div class="resp-tabs-container">
                            <!--/tab_one-->
                            <div class="tab1">

                                <div class="single_page">
                                    <p>{{$menu->DESCRIPTION}}</p>
                                </div>
                            </div>
                            <!--//tab_one-->
                            <div class="tab2">

                                <div class="single_page">
                                    <div class="bootstrap-tab-text-grids">
                                        <div class="bootstrap-tab-text-grid">
                                            <div class="bootstrap-tab-text-grid-left">
                                                <img src="images/t1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="bootstrap-tab-text-grid-right">
                                                <ul>
                                                    <li><a href="#">Admin</a></li>
                                                    <li><a href="#"><i class="fa fa-reply-all" aria-hidden="true"></i>
                                                            Reply</a>
                                                    </li>
                                                </ul>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque
                                                    vehicula augue eget.Ut enim ad minima veniam,
                                                    quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi
                                                    ut
                                                    aliquid ex ea commodi consequatur? Quis
                                                    autem vel eum iure reprehenderit.</p>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="add-review">
                                            <h4>add a review</h4>

                                            <div id="fb-root"></div>
                                            <script>(function(d, s, id) {
                                                    var js, fjs = d.getElementsByTagName(s)[0];
                                                    if (d.getElementById(id)) return;
                                                    js = d.createElement(s); js.id = id;
                                                    js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0&appId=378495575965068&autoLogAppEvents=1';
                                                    fjs.parentNode.insertBefore(js, fjs);
                                                }(document, 'script', 'facebook-jssdk'));</script>
                                            <div class="fb-comments" width="auto" align="center" data-numposts="4"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab3">

                                <div class="single_page">
                                    <h6>Shoe Rock Vision(SRV) Sneakers (Blue)</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque vehicula augue
                                        eget nisl ullamcorper, molestie
                                        blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit,
                                        sed
                                        do eiusmod tempor incididunt
                                        ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco. labore et dolore
                                        magna aliqua.</p>
                                    <p class="para">Lorem ipsum dolor sit amet, consectetur adipisicing elPellentesque
                                        vehicula augue eget nisl ullamcorper, molestie
                                        blandit ipsum auctor. Mauris volutpat augue dolor.Consectetur adipisicing elit,
                                        sed
                                        do eiusmod tempor incididunt
                                        ut lab ore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco. labore et dolore
                                        magna aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--//tabs-->
                <!-- /new_arrivals -->
                <div class="new_arrivals">
                    <h3>THỰC ĐƠN YÊU THÍCH</h3>
                    <!-- /womens -->
                    <div class="col-md-3 product-men women_two">
                        <div class="product-shoe-info shoe">
                            <div class="men-pro-item">
                                <div class="men-thumb-item">
                                    <img src="images/s4.jpg" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="single.html">Shuberry Heels </a>
                                    </h4>
                                    <div class="info-product-price">
                                        <div class="grid_meta">
                                            <div class="product_price">
                                                <div class="grid-price ">
                                                    <span class="money ">$575.00</span>
                                                </div>
                                            </div>
                                            <ul class="stars">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shoe single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="shoe_item" value="Shuberry Heels">
                                                <input type="hidden" name="amount" value="575.00">
                                                <button type="submit" class="shoe-cart pshoe-cart"><i
                                                            class="fa fa-cart-plus" aria-hidden="true"></i></button>

                                                <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men women_two">
                        <div class="product-shoe-info shoe">
                            <div class="men-pro-item">
                                <div class="men-thumb-item">
                                    <img src="images/s5.jpg" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="single.html">Red Bellies </a>
                                    </h4>
                                    <div class="info-product-price">
                                        <div class="grid_meta">
                                            <div class="product_price">
                                                <div class="grid-price ">
                                                    <span class="money ">$325.00</span>
                                                </div>
                                            </div>
                                            <ul class="stars">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="shoe single-item hvr-outline-out">
                                            <form action="/" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="shoe_item" value="Red Bellies">
                                                <input type="hidden" name="amount" value="325.00">
                                                <button type="submit" class="shoe-cart pshoe-cart"><i
                                                            class="fa fa-cart-plus" aria-hidden="true"></i></button>

                                                <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men women_two">
                        <div class="product-shoe-info shoe">
                            <div class="men-pro-item">
                                <div class="men-thumb-item">
                                    <img src="images/s4.jpg" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="single.html">Running Shoes</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <div class="grid_meta">
                                            <div class="product_price">
                                                <div class="grid-price ">
                                                    <span class="money ">$875.00</span>
                                                </div>
                                            </div>
                                            <ul class="stars">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shoe single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="shoe_item" value="Running Shoes">
                                                <input type="hidden" name="amount" value="875.00">
                                                <button type="submit" class="shoe-cart pshoe-cart"><i
                                                            class="fa fa-cart-plus" aria-hidden="true"></i></button>

                                                <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 product-men women_two">
                        <div class="product-shoe-info shoe">
                            <div class="men-pro-item">
                                <div class="men-thumb-item">
                                    <img src="images/s5.jpg" alt="">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="single.html" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top">New</span>
                                </div>
                                <div class="item-info-product">
                                    <h4>
                                        <a href="single.html">Sukun Casuals</a>
                                    </h4>
                                    <div class="info-product-price">
                                        <div class="grid_meta">
                                            <div class="product_price">
                                                <div class="grid-price ">
                                                    <span class="money ">$505.00</span>
                                                </div>
                                            </div>
                                            <ul class="stars">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shoe single-item hvr-outline-out">
                                            <form action="#" method="post">
                                                <input type="hidden" name="cmd" value="_cart">
                                                <input type="hidden" name="add" value="1">
                                                <input type="hidden" name="shoe_item" value="Sukun Casuals">
                                                <input type="hidden" name="amount" value="505.00">
                                                <button type="submit" class="shoe-cart pshoe-cart"><i
                                                            class="fa fa-cart-plus" aria-hidden="true"></i></button>

                                                <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- //womens -->
                    <div class="clearfix"></div>
                </div>
                <!--//new_arrivals-->


            </div>
        </div>
    </div>
    <!-- //top products -->
    <!-- /newsletter-->
@endsection
