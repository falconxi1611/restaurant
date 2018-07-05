@extends('about.about')

@section('title', 'Service')
@section('service', 'menu__item--current')
@section('about', '')
@section('main_content')
    <!-- special -->
    <div class="special">
        <div class="container">
            <div class="special-heading">
                <h2 class="tittle-w3"><span>Special</span> Services</h2>
            </div>
            <div class="special-grids">
                <div class="col-md-4 w3l-special-grid">
                    <div class="col-md-6 w3ls-special-img">
                        <div class="w3ls-special-text effect-1">
                            <h4>Aliquam</h4>
                        </div>
                    </div>
                    <div class="col-md-6 agileits-special-info">
                        <h4>Aliquam</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3l-special-grid">
                    <div class="col-md-6 w3ls-special-img wthree-img">
                        <div class="w3ls-special-text effect-1">
                            <h4>Nullam</h4>
                        </div>
                    </div>
                    <div class="col-md-6 agileits-special-info">
                        <h4>Nullam</h4>
                        <p>Maecenas ac purus. Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3l-special-grid">
                    <div class="col-md-6 w3ls-special-img wthree-img1">
                        <div class="w3ls-special-text effect-1">
                            <h4>Maecenas</h4>
                        </div>
                    </div>
                    <div class="col-md-6 agileits-special-info">
                        <h4>Maecenas</h4>
                        <p>Donec nibh enim, sodales laoreet sit amet, tincidunt</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3l-special-grid">
                    <div class="col-md-6 agileits-special-info">
                        <h4>Aliquam</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="col-md-6 w3ls-special-img wthree-img2">
                        <div class="w3ls-special-text effect-1">
                            <h4>Aliquam</h4>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3l-special-grid">
                    <div class="col-md-6 agileits-special-info">
                        <h4>Nullam</h4>
                        <p>Maecenas ac purus. Lorem ipsum dolor sit amet</p>
                    </div>
                    <div class="col-md-6 w3ls-special-img wthree-img3">
                        <div class="w3ls-special-text effect-1">
                            <h4>Nullam</h4>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-4 w3l-special-grid">
                    <div class="col-md-6 agileits-special-info">
                        <h4>Maecenas</h4>
                        <p>Donec nibh enim, sodales laoreet sit amet, tincidunt</p>
                    </div>
                    <div class="col-md-6 w3ls-special-img wthree-img4">
                        <div class="w3ls-special-text effect-1">
                            <h4>Maecenas</h4>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //special -->
    <!--services-section-->
    <div class="services-w3layouts" id="services">
        <!-- //Stats -->
        <div class="col-md-6 agitsworkw3ls-grid ">
            <h3 class="tittle-w3"><span>Always</span> fresh <span>& </span>delicious <span>food</span></h3>
            <p class="para-w3l">Gourmet is a full-service catering and event planning company dedicated to providing you with exquisite cuisine and fantastic customer service. We offer a variety of menus and design options, for everything from box lunches to full-service plated dinners.</p>
            <div class="services-left-w3-agile">
                <h3 class="tittle-w3 sub-head"><span>Our </span>Menu</h3>
                <ul>
                    <li><i class="fa fa-check" aria-hidden="true"></i>BEVERAGES</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>BREAKFASTS</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>LUNCH BUFFETS</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>DINNER BUFFETS</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>PARTY TRAYS</li>
                </ul>
            </div>
            <div class="services-right-w3-agile">
                <h3 class="tittle-w3 sub-head"><span>Catering</span> for</h3>
                <ul>
                    <li><i class="fa fa-check" aria-hidden="true"></i>GRADUATION PARTY</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>WEDDING PARTY</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>BRIDAL SHOWER</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>BIRTHDAY PARTY</li>
                    <li><i class="fa fa-check" aria-hidden="true"></i>ANNIVERSARY</li>
                </ul>
            </div>
        </div>

        <div class="col-md-6 agitsworkw3ls-grid-2">
            <div class="info-imgs">
                <ul>
                    <li>
                        <div class="gallery-grid1">
                            <a href="single.html"><img src="{{URL::asset('images/s1.jpg')}}" alt=" " class="img-responsive"></a>
                            <div class="p-mask">
                                <h4><span>D</span>elish <span>F</span>ood</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="gallery-grid1">
                            <a href="single.html"><img src="{{URL::asset('images/s2.jpg')}}" alt=" " class="img-responsive"></a>
                            <div class="p-mask">
                                <h4><span>D</span>elish <span>F</span>ood</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="gallery-grid1">
                            <a href="single.html"><img src="{{URL::asset('images/s3.jpg')}}" alt=" " class="img-responsive"></a>
                            <div class="p-mask">
                                <h4><span>D</span>elish <span>F</span>ood</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum.</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="gallery-grid1">
                            <a href="single.html"><img src="{{URL::asset('images/s4.jpg')}}" alt=" " class="img-responsive"></a>
                            <div class="p-mask">
                                <h4><span>D</span>elish <span>F</span>ood</h4>
                                <p>Neque porro quisquam est, qui dolorem ipsum.</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
        <div class="clearfix"></div>
        <!-- //Stats -->
        <div class="clearfix"></div>
    </div>
    <!--//services-section-->
    <!-- features -->
    <div class="features">
        <div class="container">
            <div class="features-heading">
                <h3 class="tittle-w3"><span>Our</span> Features</h3>
            </div>
            <div class="features-grids">
                <div class="col-md-8 features-right">
                    <div class="features-right-info">
                        <h4>Quisque scelerisque mollis lacus, nec commodo lacus posuere quis. Aliquam erat volutpat. Sed laoreet, felis vitae viverra aliquet, magna nulla tincidunt odio, at laoreet nisi nisl sit amet risus. Suspendisse ullamcorper tempus eros, eget aliquam eros tincidunt in.</h4>
                    </div>
                    <div class="features-right-grids">
                        <div class="features-right-left">
                            <div class="features-right-icon effect-2">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="features-right-right">
                            <p>Nulla auctor vel ex a suscipit. Integer scelerisque nec dui et ullamcorper. Aenean vitae urna non est luctus venenatis. </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="features-right-grids">
                        <div class="features-right-left">
                            <div class="features-right-icon effect-2">
                                <i class="fa fa-asterisk" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="features-right-right">
                            <p>Nulla auctor vel ex a suscipit. Integer scelerisque nec dui et ullamcorper. Aenean vitae urna non est luctus venenatis. </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="features-right-grids">
                        <div class="features-right-left">
                            <div class="features-right-icon effect-2">
                                <i class="fa fa-inr" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="features-right-right">
                            <p>Nulla auctor vel ex a suscipit. Integer scelerisque nec dui et ullamcorper. Aenean vitae urna non est luctus venenatis. </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="features-right-grids">
                        <div class="features-right-left">
                            <div class="features-right-icon effect-2">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="features-right-right">
                            <p>Nulla auctor vel ex a suscipit. Integer scelerisque nec dui et ullamcorper. Aenean vitae urna non est luctus venenatis. </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="col-md-4 features-left">
                    <div class="features-left-info">
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //features -->
@endsection