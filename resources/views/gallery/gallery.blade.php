@extends('about.about')

@section('title', 'Gallery')
@section('gallery', 'menu__item--current')
@section('about', '')
@section('main_content')
    <!-- gallery -->
    <div class="gallery">
        <div class="container">
            <h2 class="tittle-w3">THỰC ĐƠN</h2>
            <div class="gallery-grids">
                <div class="col-md-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <a class="example-image-link" href="{{URL::asset('images/wedding.jpg')}}" data-lightbox="example-set"
                               data-title="">
                                <img class="menu_fp" src="{{URL::asset('images/wedding.jpg')}}" alt=""/>
                                <figcaption>
                                    <h3>TIỆC CƯỚI</h3>
                                    <p>Food Paradise <br>Món ăn ngon tuyệt</p>
                                    <form action="/" >
                                        <button type="submit" class="btn btn-success">Order</button>
                                    </form>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <a class="example-image-link" href="images/g2.jpg" data-lightbox="example-set"
                               data-title="">
                                <img class="menu_fp" src="images/g2.jpg" alt=""/>
                                <figcaption>
                                    <h3>TIỆC CÁ NHÂN</h3>
                                    <p>Food Paradise <br>Món ăn ngon tuyệt</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
                    <div class="grid">
                        <figure class="effect-apollo">
                            <a class="example-image-link" href="images/g3.jpg" data-lightbox="example-set"
                               data-title="">
                                <img class="menu_fp" src="images/g3.jpg" alt=""/>
                                <figcaption>
                                    <h3>TIỆC CÔNG TY</h3>
                                    <p>Food Paradise <br>Món ăn ngon tuyệt</p>
                                </figcaption>
                            </a>
                        </figure>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //gallery -->
@endsection