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
                @foreach($menu_type as $menu)
                    <div class="col-md-4 gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
                        <div class="grid">
                            <figure class="effect-apollo">
                                <a class="example-image-link"
                                   href="{{ asset("images/menu_type/$menu->IMAGE") }}"
                                   data-lightbox="example-set"
                                   data-title="">
                                    <img class="menu_fp" src="{{ asset("images/menu_type/$menu->IMAGE") }}"
                                         alt=""/>
                                    <figcaption>
                                        <h3>{{$menu->MENUTYPE_NAME}}</h3>
                                        <p>Food Paradise <br>Tinh Hoa Ẩm Thực</p>
                                        <div class="menu_fd">
                                            <form action="{{url('set_menu')}}" method="GET">
                                                <input name="menutype_id" type="hidden" value="{{$menu->MENUTYPE_ID}}" >
                                                <button type="submit" class="w3-button w3-block w3-hover-yellow">SET MENU</button>
                                            </form>
                                            <form action="/">
                                                <button class="w3-button w3-block w3-hover-yellow">CHỌN MÓN</button>
                                            </form>
                                        </div>
                                    </figcaption>

                                </a>
                            </figure>
                        </div>
                    </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //menu -->
@endsection