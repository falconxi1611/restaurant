@extends('about.about')

@section('title', 'Thực Đơn')
@section('menu', 'menu__item--current')
@section('about', '')
@section('main_content')
    <!-- menu -->
    <div class="gallery">
        <div class="container">
            <h2 class="tittle-w3">THỰC ĐƠN</h2>
            <div class="gallery-grids">
                <div class="col-md-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <a class="example-image-link" href="{{URL::asset('images/wedding_menu.jpg')}}" data-lightbox="example-set"
                               data-title="">
                                <img class="menu_fp" src="{{URL::asset('images/wedding_menu.jpg')}}" alt=""/>
                                <figcaption>
                                    <h3>TIỆC CƯỚI</h3>
                                    <p>Food Paradise <br>Món ăn ngon tuyệt</p>
                                    <div class="menu_fd">
                                        <form action="/" >
                                            <button class="w3-button w3-block w3-hover-yellow">SET MENU</button>
                                        </form>
                                        <form action="/" >
                                            <button class="w3-button w3-block w3-hover-yellow">CHỌN MÓN</button>
                                        </form>
                                    </div>
                                </figcaption>

                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <a class="example-image-link" href="{{URL::asset('images/private_menu.jpg')}}" data-lightbox="example-set"
                               data-title="">
                                <img class="menu_fp" src="{{URL::asset('images/private_menu.jpg')}}" alt=""/>
                                <figcaption>
                                    <h3>TIỆC CÁ NHÂN</h3>
                                    <p>Food Paradise <br>Món ăn ngon tuyệt</p>
                                    <div class="menu_fd">
                                        <form action="/" >
                                            <button class="w3-button w3-block w3-hover-yellow">SET MENU</button>
                                        </form>
                                        <form action="/" >
                                            <button class="w3-button w3-block w3-hover-yellow">CHỌN MÓN</button>
                                        </form>
                                    </div>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <a class="example-image-link" href="{{URL::asset('images/company_menu.jpg')}}" data-lightbox="example-set"
                               data-title="">
                                <img class="menu_fp" src="{{URL::asset('images/company_menu.jpg')}}" alt=""/>
                                <figcaption>
                                    <h3>TIỆC CÔNG TY</h3>
                                    <p>Food Paradise <br>Món ăn ngon tuyệt</p>
                                    <div class="menu_fd">
                                        <form action="/" >
                                            <button class="w3-button w3-block w3-hover-yellow">SET MENU</button>
                                        </form>
                                        <form action="/" >
                                            <button class="w3-button w3-block w3-hover-yellow">CHỌN MÓN</button>
                                        </form>
                                    </div>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>



                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //menu -->
@endsection