@extends('about.about')

@section('title', 'Thực Đơn')
@section('about', '')
@section('main_content')
    <div style="margin-bottom: 165px">
        <script type="text/javascript">
        var time = 5; // Thời gian đếm ngược
        var page = "/"; // Trang bạn muốn chuyển đến
        function countDown() {
        time--;
        gett("timecount").innerHTML = time;
        if (time == -1) {
        window.location = page;
        }
        }

        function gett(id) {
        if (document.getElementById) return document.getElementById(id);
        if (document.all) return document.all.id;
        if (document.layers) return document.layers.id;
        if (window.opera) return window.opera.id;
        }

        function init() {
        if (gett('timecount')) {
        setInterval(countDown, 1000);
        gett("timecount").innerHTML = time;
        }
        else {
        setTimeout(init, 50);
        }
        }

        document.onload = init();
        </script>


        <div class="checkout_margin" style="width: 90%; height: 200px; font-size: 22px" >

        <div class="alert alert-success" role="alert">
        <h3 style="margin-bottom: 20px">Đặt Tiệc Thành Công !</h3> Quý khách vui lòng check mail đơn hàng
        <h6>Trang sẽ tự chuyển sau <span id="timecount"></span> giây!</h6>
        </div>
        </div>
    </div>
@endsection
