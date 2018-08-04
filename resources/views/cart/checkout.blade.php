@extends('about.about')

@section('title', 'Thực Đơn')
@section('menu', 'menu__item--current')
@section('about', '')
@section('main_content')

    <script type="text/javascript">
        function removeall() {
            document.getElementById("frm_removeall").submit();
            shoe.reset();
        }

        function remove(id) {
            document.getElementById("id_del").value = id;
            document.getElementById("remove_frm").submit();
            shoe.cart.remove(id);
        }

        function edit(id) {
            document.getElementById("id_edit").value = id;
            document.getElementById('new_quantity').value = $($('input[name=quantity]')[id]).val();
            shoe.cart._items[id]._data.quantity = $($('input[name=quantity]')[id]).val() - 1;
            shoe.cart.add(shoe.cart.items(id));
            document.getElementById("edit_frm").submit();
        }

        function validateEmail(email) {
            var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function validate() {
            var $result = $("#result");
            var email = $("#email").val();
            $result.text("");

            if (validateEmail(email)) {
                $result.text(email + " is valid :)");
                $result.css("color", "green");
            } else {
                $result.text(email + " is not valid :(");
                $result.css("color", "red");
            }
            return false;
        }

        $("#validate").bind("click", validate);

        function setValue(value) {
            var num_people = document.getElementById("num_people").value;
            var num_table;
            if ((num_people % value) == 0) {
                num_table = num_people / value;
            }
            else {
                num_table = parseInt(num_people / value) + 1
            }

            // document.getElementById("option_quantity").value = num_table;
            // document.getElementById("frm_option").submit();
            document.getElementById("num_table").value = num_table;
        }

    </script>

    <div class="checkout_margin">
        {{--Check Out Content--}}


        <div class="ads-grid_shop">
            <div class="shop_inner_inf">
                <div class="privacy about">
                    <h3>Giỏ<span> Hàng</span></h3>

                    <div class="checkout-right">
                        @if($total == 0)
                            <div class="alert alert-info" style="margin-top: 10px">
                                <h5>Không có sản phẩm nào trong giỏ hàng.</h5>
                            </div>
                        @else
                            <h4>Giỏ hàng của bạn hiện có: <span>{{$total}} Sản phẩm</span></h4>
                            <table class="timetable_sub">
                                <thead>
                                <tr>
                                    <th>STT</th>
                                    <th>Hình</th>
                                    <th>Số lượng</th>
                                    <th>Loại</th>
                                    <th>Tên Sản Phẩm</th>

                                    <th>Đơn Giá</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @for ($i = 0; $i < count($cart_name); $i++)
                                    <tr class="rem{{$i+1}}">
                                        <td class="invert">{{$i+1}}</td>
                                        <td class="invert" width="inherit"><a href="single.html"><img
                                                        src="{{asset("images/menu/$image[$i]")}}" alt=" "
                                                        class="img-responsive"></a>
                                        </td>
                                        <td class="invert" width="200px"><input type="text"
                                                                                name="quantity"
                                                                                style="text-align: center;width: 60px; height: 40px"
                                                                                maxlength="3" value="{{$quantity[$i]}}"
                                                                                onkeyup="edit({{$i}})"></td>
                                        <td class="invert" width="200px">{{$people_num[$i]}}</td>
                                        <td class="invert" width="250px">{{$cart_name[$i]}}</td>

                                        <td class="invert" width="200px">{{number_format($amount[$i])}} VND</td>
                                        <td class="invert" width="122px">
                                            <div class="rem">
                                                <button type="submit" class="close1" onclick="remove({{$i}})"/>
                                            </div>
                                        </td>
                                    </tr>
                                @endfor
                                </tbody>
                            </table>
                        @endif
                    </div>

                    <div class="checkout-left">
                        <div class="col-md-4 checkout-left-basket">
                            <h4>Hóa Đơn Thanh Toán</h4>
                            <ul>
                                @for ($i = 0; $i < count($cart_name); $i++)
                                    <li>{{$cart_name[$i]}}<i>-</i>
                                        <span>{{number_format($amount[$i]*$quantity[$i])}} VND</span></li>
                                @endfor
                                <li class="total_price" style="color: #000000">Tổng Cộng<i>-</i> <span>{{number_format($total_amount)}}
                                        VND</span></li>
                            </ul>
                        </div>
                        <div class="col-md-8 address_form">
                            <form id="payment_frm" action="/payment" method="post"
                                  class="creditly-card-form agileinfo_form">
                                @if($mode == 1)
                                    <div class="description">
                                        <h5>SỐ NGƯỜI</h5>
                                        <input class="form-control" type="text" id="num_people" name="num_people"
                                               placeholder="Nhập vào số người"
                                               required="" maxlength="4" value="{{$total_peo}}"
                                               style="width: 200px; color: #000000">

                                    </div>
                                    <div class="size_menu">
                                        <label class="radio-inline"><input type="radio" name="people" id='p1' value="8"
                                                                           onclick="setValue(8)"
                                            >Bàn
                                            8
                                            Người</label>
                                        <label class="radio-inline"><input type="radio" name="people" id='p2'
                                                                           value="10" onclick="setValue(10)">Bàn
                                            10
                                            Người</label>
                                        <label class="radio-inline"><input type="radio" name="people" id='p3' value="12"
                                                                           onclick="setValue(12)">Bàn
                                            12
                                            Người</label>
                                    </div>
                                    <div class="description">
                                        <h5>SỐ BÀN</h5>
                                        <input class="form-control" type="text" id="num_table" name="num_table"
                                               required="" maxlength="3" style="width: 200px; color: #000000"
                                               value="" readonly>
                                    </div>
                                @endif
                                <h4>Thông Tin Khách Hàng</h4>

                                <section class="creditly-wrapper wrapper">
                                    <div class="information-wrapper">
                                        <div class="first-row form-group">
                                            <div class="controls">
                                                <label class="control-label">Họ Tên </label>
                                                <input class="billing-address-name form-control" id="fullname"
                                                       type="text"
                                                       name="fullname"
                                                       placeholder="Nhập họ tên" required="">
                                                <span id="name_error"></span>
                                            </div>
                                            <div class="card_number_grids">
                                                <div class="card_number_grid_left">
                                                    <div class="controls">
                                                        <label class="control-label">Số điện thoại</label>
                                                        <input class="form-control" id="phone" name="phone" type="text"
                                                               placeholder="Nhập SĐT" required="">
                                                        <span id="phone_error"></span>
                                                    </div>
                                                </div>
                                                <div class="card_number_grid_right">
                                                    <div class="controls">
                                                        <label class="control-label">Email </label>
                                                        <input class="form-control" id="email" type="email" id="email"
                                                               name="email"
                                                               placeholder="Nhập email" required="">
                                                        <span id="email_error"></span>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                            <div class="controls">
                                                <label class="control-label">Ngày đặt tiệc</label>
                                                <input class="form-control" id="datepicker1" name="date_order"
                                                       type="text" value="{{$date_order}}"
                                                       onfocus="this.value = '';"
                                                       onblur="if (this.value == '') {this.value = 'yyyy-mm-dd';}"
                                                       required="">
                                                {{--<input class="form-control" name="date"  type="date" value="{{$date_order}}" required="">--}}
                                                <span id="address_error"></span>
                                            </div>

                                            <div class="controls">
                                                <label class="control-label">Giờ</label>
                                                <input class="form-control" name="date_time" type="time"
                                                       value="{{$time_order}}" required="">
                                                <span id="address_error"></span>
                                            </div>

                                            <div class="controls">
                                                <label class="control-label">Địa chỉ </label>
                                                <input class="form-control" name="address" type="text"
                                                       placeholder="Nhập địa chỉ">
                                                <span id="address_error"></span>
                                            </div>

                                            <div class="controls">
                                                <label class="control-label">Ghi chú </label>
                                                <textarea class="form-control" name="remark">
                                                </textarea>
                                            </div>
                                            @foreach($cart_name as $name)
                                                <input type="hidden" name="name[]"
                                                       value="{{$name}}">
                                            @endforeach
                                            @foreach($people_num as $type)
                                                <input type="hidden" name="type[]"
                                                       value="{{$type}}">
                                            @endforeach

                                            @foreach($id_menu as $id)
                                                <input type="hidden" name="id[]"
                                                       value="{{$id}}">
                                            @endforeach

                                            @foreach($quantity as $num)
                                                <input type="hidden" name="quantity_table[]"
                                                       value="{{$num}}">
                                            @endforeach

                                            <input type="hidden" name="total_amount" value="{{$total_amount}}">
                                            @csrf
                                        </div>
                                        <button type="submit" class="submit check_out" onclick="check()">Thanh toán
                                        </button>
                                    </div>
                                </section>
                            </form>
                            <form id="frm_removeall" action="/checkout_all" method="POST">
                                <div class="checkout-right-basket">
                                    @csrf
                                    <button type="submit" class="submit check_out" onclick="removeall()">Hủy Đặt Tiệc
                                    </button>
                                </div>
                            </form>
                        </div>
                        {{--Remove--}}
                        <form id="remove_frm" action="/checkout_remove" method="post">

                            <input type="hidden" id="id_del" name="id_del" value="">
                            @foreach($id_menu as $id)
                                <input type="hidden" name="id_menu[]"
                                       value="{{$id}}">
                            @endforeach

                            @foreach($cart_name as $name)
                                <input type="hidden" name="name[]"
                                       value="{{$name}}">
                            @endforeach
                            @foreach($image as $img)
                                <input type="hidden" name="image[]"
                                       value="{{$img}}">
                            @endforeach
                            @foreach($quantity as $num)
                                <input type="hidden" name="quantity[]"
                                       value="{{$num}}">
                            @endforeach
                            @foreach($people_num as $peo_num)
                                <input type="hidden" name="people_num[]"
                                       value="{{$peo_num}}">
                            @endforeach
                            @foreach($amount as $price)
                                <input type="hidden" name="amount[]"
                                       value="{{$price}}">
                            @endforeach
                            @csrf
                        </form>

                        {{--Edit Cart--}}
                        <form id="edit_frm" action="/checkout_edit" method="post">

                            <input type="hidden" id="id_edit" name="id_edit" value="">
                            <input type="hidden" id="new_quantity" name="new_quantity" value="">
                            @foreach($id_menu as $id)
                                <input type="hidden" name="id_menu[]"
                                       value="{{$id}}">
                            @endforeach
                            @foreach($cart_name as $name)
                                <input type="hidden" name="name[]"
                                       value="{{$name}}">
                            @endforeach
                            @foreach($image as $img)
                                <input type="hidden" name="image[]"
                                       value="{{$img}}">
                            @endforeach
                            @foreach($quantity as $num)
                                <input type="hidden" name="quantity[]"
                                       value="{{$num}}">
                            @endforeach
                            @foreach($people_num as $peo_num)
                                <input type="hidden" name="people_num[]"
                                       value="{{$peo_num}}">
                            @endforeach
                            @foreach($amount as $price)
                                <input type="hidden" name="amount[]"
                                       value="{{$price}}">
                            @endforeach
                            @csrf
                        </form>

                        <form id="frm_option" method="post" action="">

                            <input type="hidden" id="option_quantity" name="option_quantity" value="">
                            @foreach($id_menu as $id)
                                <input type="hidden" name="id_menu[]"
                                       value="{{$id}}">
                            @endforeach
                            @foreach($cart_name as $name)
                                <input type="hidden" name="name[]"
                                       value="{{$name}}">
                            @endforeach
                            @foreach($image as $img)
                                <input type="hidden" name="image[]"
                                       value="{{$img}}">
                            @endforeach
                            @foreach($quantity as $num)
                                <input type="hidden" name="quantity[]"
                                       value="{{$num}}">
                            @endforeach
                            @foreach($people_num as $peo_num)
                                <input type="hidden" name="people_num[]"
                                       value="{{$peo_num}}">
                            @endforeach
                            @foreach($amount as $price)
                                <input type="hidden" name="amount[]"
                                       value="{{$price}}">
                            @endforeach
                            @csrf
                        </form>

                        <div class="clearfix"></div>


                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- //top products -->
            <div class="mid_slider_w3lsagile">
                <div class="col-md-3 mid_slider_text">
                    <h5>Some More Shoes</h5>
                </div>
                <div class="col-md-9 mid_slider_info">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g1.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g2.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g3.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g4.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item active">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g5.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g6.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g2.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g1.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g1.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g2.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g3.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g4.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g1.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g2.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g3.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 slidering">
                                        <div class="thumbnail"><img src="images/g4.jpg" alt="Image"
                                                                    style="max-width:100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="fa fa-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="fa fa-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                        <!-- The Modal -->

                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection