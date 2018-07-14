<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="{{URL::asset('images/icon.png')}}">
	<link rel="stylesheet" href="{{URL::asset('css/style_button.css')}}">
	<title>Food Paradise | @yield('title')</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="keywords"/>
	<script type="application/x-javascript"> addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		} </script>
	<!-- //for-mobile-apps -->
	<link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all"/>
	<link href="{{URL::asset('css/font-awesome.css')}}" rel="stylesheet">
	<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
	<!--web-fonts-->
	<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
	<!--//web-fonts-->

	{{--SET MENU--}}
	<link rel="stylesheet" href="{{URL::asset('css/setmenu.css')}}" type="text/css" media="screen" property="" />
	<link href="{{URL::asset('css/style7.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/jquery-ui1.css')}}">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
		  rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
{{--Comtent--}}
@yield('content')

<div class="copyright-wthree">
	<p>&copy; 2018 Food Paradise . Developed by | <a href="https://www.facebook.com/falconxi1611">Le Duc Toan</a></p>
</div>
<!-- //Footer -->

<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover"
																		 style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="{{URL::asset('js/jquery-2.1.4.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/numscroller-1.0.js')}}"></script>
<script src="{{URL::asset('js/particles.js')}}"></script>
<script src="{{URL::asset('js/style.js')}}"></script>
<!--menu-->
<script type="text/javascript">
	$(window).load(function () {
		$("#flexiselDemo1").flexisel({
			visibleItems: 4,
			animationSpeed: 1000,
			autoPlay: true,
			autoPlaySpeed: 3000,
			pauseOnHover: true,
			enableResponsiveBreakpoints: true,
			responsiveBreakpoints: {
				portrait: {
					changePoint: 480,
					visibleItems: 1
				},
				landscape: {
					changePoint: 640,
					visibleItems: 2
				},
				tablet: {
					changePoint: 768,
					visibleItems: 3
				}
			}
		});

	});
</script>
<script type="text/javascript" src="{{URL::asset('js/jquery.flexisel.js')}}"></script>
<!--menu-->
<!-- Dropdown-Menu-JavaScript -->
<script>
	$(document).ready(function () {
		$(".dropdown").hover(
			function () {
				$('.dropdown-menu', this).stop(true, true).slideDown("fast");
				$(this).toggleClass('open');
			},
			function () {
				$('.dropdown-menu', this).stop(true, true).slideUp("fast");
				$(this).toggleClass('open');
			}
		);
	});
</script>
<!-- //Dropdown-Menu-JavaScript -->
<!-- Calendar -->
<link rel="stylesheet" href="{{URL::asset('css/jquery-ui.css')}}"/>
<script src="{{URL::asset('js/jquery-ui.js')}}"></script>
<script>
	$(function () {
		$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
	});
</script>
<!-- //Calendar -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{URL::asset('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
			event.preventDefault();
			$('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
	$(document).ready(function () {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/

		$().UItoTop({easingType: 'easeOutQuart'});

	});
</script>
<!-- //here ends scrolling icon -->
<!--js for bootstrap working-->
<script src="{{URL::asset('js/bootstrap.js')}}"></script>
<!-- //for bootstrap working -->
<!-- script-for-menu -->
<script>
	$("span.menu").click(function () {
		$(".top-nav ul").slideToggle("slow", function () {
		});
	});
</script>
<!-- script-for-menu -->

<!-- cart-js -->
<script src="{{URL::asset('js/minicart.js')}}"></script>
<script>
    shoe.render();

    shoe.cart.on('shoe_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>
<!-- //cart-js -->
</body>
</html>