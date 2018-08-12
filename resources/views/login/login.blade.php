<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <link rel="shortcut icon" href="{{URL::asset('images/icon.png')}}">
    <title>Food Paradise || Login</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords"
          content="Prime login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="{{URL::asset('css/login.css')}}" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta+Mahee:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //fonts -->
    <link rel="stylesheet" href="{{URL::asset('css/font-awesome.css')}}" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->
</head>
<!-- //Head -->
<!-- Body -->

<body>
<h1 class="title-agile text-center">Food Paradise</h1>
@if($errors->has('errorlogin'))
    <div class="alert alert-danger" align="center" style="color: #FFFFFF">
        {{$errors->first('errorlogin')}}
    </div>
@endif
<div class="content-w3ls">
    <div class="content-bottom">
        <form action="" method="post">
            {{ csrf_field() }}
            <div class="field-group">
                <span class="fa fa-user" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="username" id="username" type="text" value="" placeholder="username" required>
                    @if($errors->has('username'))
                        <p style="color:red">{{$errors->first('username')}}</p>
                    @endif
                </div>
            </div>
            <div class="field-group">
                <span class="fa fa-lock" aria-hidden="true"></span>
                <div class="wthree-field">
                    <input name="password" id="myInput" type="Password" placeholder="password" required>
                    @if($errors->has('password'))
                        <p style="color:red">{{$errors->first('password')}}</p>
                    @endif
                </div>
            </div>
            <div class="field-group">
                <div class="check">
                    <label class="checkbox w3l">
                        <input type="checkbox" onclick="myFunction()">
                        <i> </i>show password</label>
                </div>
                <!-- script for show password -->
                <script>
                    function myFunction() {
                        var x = document.getElementById("myInput");
                        if (x.type === "password") {
                            x.type = "text";
                        } else {
                            x.type = "password";
                        }
                    }
                </script>
                <!-- //script for show password -->
            </div>
            <div class="wthree-field">
                <input id="saveForm" name="saveForm" type="submit" value="sign in"/>
            </div>
            <ul class="list-login">
                <li class="switch-agileits">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                        keep me signed in
                    </label>
                </li>
                <li>
                    <a href="#" class="text-right">forgot password?</a>
                </li>
                <li>
                    <a href="{{URL::asset('/signup')}}" class="text-right">Register new account</a>
                </li>
                <li class="clearfix"></li>
            </ul>
        </form>
    </div>
</div>
<div class="copyright text-center">
    <p>&copy; 2018 Food Paradise . Developed by |
        <a href="https://www.facebook.com/falconxi1611" target="_blank"> Le Duc Toan</a>
    </p>
</div>
</body>
<!-- //Body -->
</html>