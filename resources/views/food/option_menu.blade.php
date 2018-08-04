@extends('about.about')

@section('title', 'Set Menu')
@section('menu', 'menu__item--current')
@section('about', '')
@section('main_content')
    <div class="div_menu_align">
        <!-- top Products -->
        <div class="ads-grid_shop">
            <div class="shop_inner_inf">
                <!-- tittle heading -->

                <!-- //tittle heading -->
                <!-- product left -->
                <div class="side-bar col-md-3">
                    <div class="search-hotel">
                        <h3 class="agileits-sear-head">Search Here..</h3>
                        <form action="#" method="post">
                            <input type="search" placeholder="Product name..." name="search" required="">
                            <input type="submit" value=" ">
                        </form>
                    </div>
                    <!--preference -->
                    <div class="left-side">
                        <h3 class="agileits-sear-head">Occasion</h3>
                        <ul>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Casuals</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Party</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Wedding</span>
                            </li>
                            <li>
                                <input type="checkbox" class="checked">
                                <span class="span">Ethnic</span>
                            </li>
                        </ul>
                    </div>
                    <!-- // preference -->
                    <!-- reviews -->
                    <div class="customer-rev left-side">
                        <h3 class="agileits-sear-head">Customer Review</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <span>5.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <span>4.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <span>3.5</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <span>3.0</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <span>2.5</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- //reviews -->
                    <!-- deals -->
                    <div class="deal-leftmk left-side">
                        <h3 class="agileits-sear-head">Special Deals</h3>
                        <div class="special-sec1">
                            <div class="col-xs-4 img-deals">
                                <img src="images/s4.jpg" alt="">
                            </div>
                            <div class="col-xs-8 img-deal1">
                                <h3>Shuberry Heels</h3>
                                <a href="single.html">$180.00</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="special-sec1">
                            <div class="col-xs-4 img-deals">
                                <img src="images/s2.jpg" alt="">
                            </div>
                            <div class="col-xs-8 img-deal1">
                                <h3>Chikku Loafers</h3>
                                <a href="single.html">$99.00</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="special-sec1">
                            <div class="col-xs-4 img-deals">
                                <img src="images/s1.jpg" alt="">
                            </div>
                            <div class="col-xs-8 img-deal1">
                                <h3>Bella Toes</h3>
                                <a href="single.html">$165.00</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="special-sec1">
                            <div class="col-xs-4 img-deals">
                                <img src="images/s5.jpg" alt="">
                            </div>
                            <div class="col-xs-8 img-deal1">
                                <h3>Red Bellies</h3>
                                <a href="single.html">$225.00</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="special-sec1">
                            <div class="col-xs-4 img-deals">
                                <img src="images/s3.jpg" alt="">
                            </div>
                            <div class="col-xs-8 img-deal1">
                                <h3>(SRV) Sneakers</h3>
                                <a href="single.html">$169.00</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!-- //deals -->

                </div>
                <!-- //product left -->
                <!-- product right -->
                <div class="left-ads-display col-md-9">
                    <div class="wrapper_top_shop">
                        <div class="clearfix"></div>

                        <!-- product-sec1 -->
                        <div class="product-sec1">
                            @foreach($food_list as $fd)
                                <div class="col-md-4 product-men">
                                    <div class="product-shoe-info shoe">
                                        <div class="men-pro-item">
                                            <div class="men-thumb-item">
                                                <img width="254.578" height="179"
                                                     src="{{URL::asset("images/menu/$fd->IMAGE")}}" alt="">
                                                <div class="men-cart-pro">
                                                    <div class="inner-men-cart-pro">
                                                        <a href="/food_id?food_id=$food->id"
                                                           class="link-product-add-cart">Xem
                                                            Chi
                                                            Tiết</a>
                                                    </div>
                                                </div>
                                                <span class="product-new-top">New</span>
                                            </div>
                                            <div class="item-info-product">
                                                <h4 style="margin-top: 10px">
                                                    <a href="/food_id?food_id=$food->id">{{$fd->FOOD_NAME}}</a></h4>
                                                <div class="info-product-price">
                                                    <div class="grid_meta">
                                                        <div class="product_price">
                                                            <div class="grid-price" style="">
                                                                <span class="money">{{number_format($fd->COST)}}
                                                                    VND</span>
                                                            </div>
                                                        </div>
                                                        <ul class="stars1">
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star"
                                                                               aria-hidden="true"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-star-half-o"
                                                                               aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shoe single-item hvr-outline-out">
                                                        <form action="#" method="post">
                                                            <input type="hidden" name="cmd" value="_cart">
                                                            <input type="hidden" name="add" value="1">
                                                            <input type="hidden" name="id_menu" value="{{$fd->FOOD_ID}}">
                                                            <input type="hidden" name="shoe_item"
                                                                   value="{{$fd->FOOD_NAME}}">
                                                            <input type="hidden" name="image"
                                                                   value="{{$fd->IMAGE}}">
                                                            <input type="hidden" name="amount"
                                                                   value="{{$fd->COST}}">
                                                            {{--Chỉ là tên loại, ko phải số lượng num--}}
                                                            <input type="hidden" name="people_num"
                                                                   value="Món ăn tự chọn">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <input type="hidden" name="mode" value="option">
                                                            <input type="hidden" name="_token" id="csrf-token"
                                                                   value="{{csrf_token()}}">
                                                            <button type="submit" class="shoe-cart pshoe-cart"><i
                                                                        class="fa fa-cart-plus" aria-hidden="true"></i>
                                                            </button>

                                                            <a href="#" data-toggle="modal"
                                                               data-target="#myModal1"></a>
                                                        </form>

                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                        <!-- //mens -->
                            <div class="clearfix"></div>
                        </div>
                        <div align="center">{{ $food_list->links() }}</div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection