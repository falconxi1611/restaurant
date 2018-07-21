@extends('about.about')

@section('title', 'Set Menu')
@section('menu', 'menu__item--current')
@section('about', '')
@section('main_content')
    <!-- //banner -->

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
                    <div class="rating1">
                        <ul class="stars">
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                        </ul>
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
                    <div class="color-quality">
                        <div class="color-quality-right">
                            <h5>SỐ LƯỢNG :</h5>
                            <input style="width: 100px" type="number" name="quantity" onfocus="this.value = '';"
                                   onblur="if (this.value == '') {this.value = '';}"
                                   required="">
                        </div>
                    </div>

                    <div class="occasion-cart">
                        <div class="shoe single-item single_page_b">
                            <form action="#" method="post">
                                <input type="hidden" name="cmd" value="_cart">
                                <input type="hidden" name="add" value="1">
                                <input type="hidden" name="shoe_item" value="Chikku Loafers">
                                <input type="hidden" name="amount" value="405.00">
                                <input type="submit" name="submit" value="Add to cart" class="button add">

                                <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                            </form>

                        </div>
                    </div>
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
                                            <form action="#" method="post">
                                                <input type="text" name="Name" required="Name">
                                                <input type="email" name="Email" required="Email">
                                                <textarea name="Message" required=""></textarea>
                                                <input type="submit" value="SEND">
                                            </form>
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
                                            <form action="#" method="post">
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
