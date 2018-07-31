@extends('about.about')

@section('title', 'Thực Đơn')
@section('menu', 'menu__item--current')
@section('about', '')
@section('main_content')
    <div class="checkout_margin">
        <script type="text/javascript">
            function paypal() {
                document.getElementById("paypal_frm").submit();
            }

            function deletecart() {
                shoe.reset();
            }
        </script>
        <!-- top Products -->
        <div class="ads-grid_shop">
            <div class="shop_inner_inf">
                <div class="privacy about">
                    <h3>Pay<span>ment</span></h3>
                    <!--/tabs-->
                    <div class="responsive_tabs">
                        <div id="horizontalTab">
                            <ul class="resp-tabs-list">
                                <li>Thanh toán trực tiếp</li>
                                <li>Chuyễn khoản</li>
                                <li>Thanh toán qua Paypal</li>
                            </ul>
                            <div class="resp-tabs-container">
                                <!--/tab_one-->
                                <div class="tab1">
                                    <div class="pay_info">
                                        <div class="vertical_post check_box_agile">
                                            <h5>THANH TOÁN TRỰC TIẾP TẠI NHÀ HÀNG</h5>
                                            <div class="checkbox">
                                                <form action="/pay" method="post">
                                                    <input type="hidden" name="payment_method" value="1">
                                                    <div class="check_box_one cashon_delivery">
                                                        <label class="anim">
                                                            <li>Quý khách thanh toán tại nhà hàng trong vòng 24h</li>
                                                            <li>Địa chỉ: 97 Man Thiện - P. Hiệp Phú - Q.9 - TP. Hồ Chí
                                                                Minh
                                                            </li>
                                                        </label>
                                                    </div>
                                                    <div style="margin-bottom: 50px">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="deposit" value="{{$total_amount*0.5}}" checked>Thanh toán trước
                                                            50%
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="deposit" value="{{$total_amount}}">Thanh toán 100%
                                                        </label>
                                                    </div>
                                                    <div class="description">
                                                        <h5>CODE GIẢM GIÁ</h5>
                                                            <input type="text" name="code" value=0 placeholder="Nhập mã code">
                                                    </div>
                                                    @csrf
                                                    <input type="submit" value="XÁC NHẬN THANH TOÁN" onclick="deletecart()">
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--//tab_one-->
                                <div class="tab2">
                                    <div class="pay_info">
                                        <form action="/pay" method="post" class="creditly-card-form agileinfo_form">
                                            <input type="hidden" name="payment_method" value="2">
                                            <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                                <div class="credit-card-wrapper">
                                                    <div class="first-row form-group">
                                                        <div style="margin-bottom: 50px">
                                                            <label class="control-label">THÔNG TIN TÀI KHOẢN NGÂN
                                                                HẢNG</label>
                                                        </div>
                                                        <div class="controls">
                                                            <label class="control-label">TÊN TÀI KHOẢN</label>
                                                            <input class="billing-address-name form-control" type=""
                                                                   value="LE DUC TOAN" readonly>
                                                        </div>
                                                        <div class="w3_agileits_card_number_grids">
                                                            <div class="w3_agileits_card_number_grid_left">
                                                                <div class="controls">
                                                                    <label class="control-label">SỐ TÀI KHOẢN</label>
                                                                    <input class="number credit-card-number form-control"
                                                                           type="text" name="number" inputmode="numeric"
                                                                           autocomplete="cc-number" value="000123456789"
                                                                           autocompletetype="cc-number"
                                                                           x-autocompletetype="cc-number"
                                                                           placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;"
                                                                           readonly>
                                                                </div>
                                                            </div>
                                                            <div class="w3_agileits_card_number_grid_right">
                                                                <div class="controls">
                                                                    <label class="control-label">Ngân Hàng</label>
                                                                    <input class="security-code form-control" Â·
                                                                           inputmode="numeric" type="text"
                                                                           name="security-code" value="Tiên Phong Bank"
                                                                           readonly>
                                                                </div>
                                                            </div>
                                                            <div class="w3_agileits_card_number_grid_right">
                                                                <div class="controls">
                                                                    <label class="control-label">Chi Nhánh</label>
                                                                    <input class="security-code form-control" Â·
                                                                           inputmode="numeric" type="text"
                                                                           name="security-code"
                                                                           value="Thủ Đức - TP. Hồ Chí Minh" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="clear"></div>
                                                        </div>
                                                    </div>
                                                    <div style="margin-bottom: 50px">
                                                        <label class="radio-inline">
                                                            <input type="radio" name="deposit" value="{{$total_amount*0.5}}" checked>Thanh toán trước
                                                            50%
                                                        </label>
                                                        <label class="radio-inline">
                                                            <input type="radio" name="deposit" value="{{$total_amount}}">Thanh toán 100%
                                                        </label>
                                                    </div>
                                                    <div class="description">
                                                        <h5>CODE GIẢM GIÁ</h5>
                                                        <form action="#" method="post">
                                                            <input type="text" name="code" value=0 placeholder="Nhập mã code"
                                                                   required="">
                                                        </form>
                                                    </div>
                                                    @csrf
                                                    <button class="submit" onclick="deletecart()"><span>Xác nhận thanh toán </span></button>
                                                </div>
                                            </section>
                                        </form>

                                    </div>
                                </div>
                                <div class="tab3">
                                    <div class="pay_info">
                                        <div class="col-md-6 tab-grid">
                                            <img class="pp-img" src="images/paypal.png" alt="Image Alternative text"
                                                 title="Image Title">
                                            <p>Important: You will be redirected to PayPal's website to securely
                                                complete your payment.</p>
                                        </div>
                                        <form id="paypal_frm" action="https://www.sandbox.paypal.com/cgi-bin/webscr"
                                              method="post">
                                            {{--<input type="hidden" name="payment_method" value="1">--}}
                                            <!-- Nhập địa chỉ email người nhận tiền (người bán) -->
                                            <input type="hidden" name="business" value="ductoanle1611@gmail.com">

                                            <!-- tham số cmd có giá trị _xclick chỉ rõ cho paypal biết là người dùng nhất nút thanh toán -->
                                            <input type="hidden" name="cmd" value="_xclick">

                                            <!-- Thông tin mua hàng. -->
                                            <input type="hidden" name="item_name" value="Thanh Toan Don Hang - Nha Hang FoodParadise">
                                            <!--Trị giá của giỏ hàng, vì paypal không hỗ trợ tiền việt n    ên phải đổi ra tiền $-->
                                            <div style="margin-bottom: 50px">
                                                <label class="radio-inline">
                                                    <input type="radio" name="amount" value="{{($total_amount*0.5)/23325}}" checked>Thanh toán trước
                                                    50%
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="amount" value="{{$total_amount/23325}}">Thanh toán 100%
                                                </label>
                                            </div>
                                            <!--Loại tiền-->
                                            <input type="hidden" name="currency_code" value="USD">
                                            <!--Đường link mình cung cấp cho Paypal biết để sau khi xử lí thành công nó sẽ chuyển về theo đường link này-->
                                            <input type="hidden" name="return"
                                                   value="/sucess">
                                            <!--Đường link mình cung cấp cho Paypal biết để nếu  xử lí KHÔNG thành công nó sẽ chuyển về theo đường link này-->
                                            <input type="hidden" name="cancel_return"
                                                   value="/errors/error">
                                            <!-- Nút bấm. -->
                                            <div class="description">
                                                <h5>CODE GIẢM GIÁ</h5>
                                                <form action="#" method="post">
                                                    <input type="text" name="code" value=0 placeholder="Nhập mã code"
                                                           required="">
                                                </form>
                                            </div>
                                            <input class="btn btn-primary" type="button" name="name"
                                                   value="Thanh toán quay Paypal" onclick="paypal()">
                                        </form>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//tabs-->
                </div>

            </div>
            <!-- //payment -->

            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //credit-card -->
    <!-- //top products -->
@endsection