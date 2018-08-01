<!doctype html>
<html>
<head>
    <link rel="shortcut icon" href="{{URL::asset('images/icon.png')}}">
    <title>Sign Up | Food Paradise</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="SIGNUP - FOOD PARADISE"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!-- fonts -->
    <link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
    <!-- /fonts -->
    <!-- css -->
    <link href="{{URL::asset('css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{URL::asset('css/signup.css')}}" rel='stylesheet' type='text/css' media="all"/>
    <!-- /css -->
</head>
<body>
<h1 class="w3ls"></h1>
<div class="content-w3ls">
    <div class="content-agile1">
        <h2 class="agileits1">FOOD PARADISE</h2>
        <p class="agileits2">to be member with Our Restaurant</p>
    </div>
    <div class="content-agile2">
        <form action="#" method="post">
            <div class="form-control w3layouts">
                <input type="text" id="fullname" name="fullname" placeholder="FullName" title="Please enter UserName"
                       required="">
            </div>

            <div class="form-control w3layouts">
                <input type="text" id="username" name="username" placeholder="Username" title="Please enter UserName"
                       required="">
            </div>

            <div class="form-control w3layouts">
                <input type="email" id="email" name="email" placeholder="mail@example.com"
                       title="Please enter a valid email" required="">
            </div>

            <div class="form-control agileinfo">
                <input type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
            </div>

            <div class="form-control agileinfo">
                <input type="password" class="lock" name="confirm-password" placeholder="Confirm Password"
                       id="password2" required="">
            </div>

            <input type="submit" class="register" value="Register">
        </form>
        <script type="text/javascript">
            window.onload = function () {
                document.getElementById("password1").onchange = validatePassword;
                document.getElementById("password2").onchange = validatePassword;
            }

            function validatePassword() {
                var pass2 = document.getElementById("password2").value;
                var pass1 = document.getElementById("password1").value;
                if (pass1 != pass2)
                    document.getElementById("password2").setCustomValidity("Passwords Don't Match");
                else
                    document.getElementById("password2").setCustomValidity('');
                //empty string means no validation error
            }
        </script>
        <p class="wthree w3l">Fast Signup With Your Favourite Social Profile</p>
        <ul class="social-agileinfo wthree2">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
    </div>
    <div class="clear"></div>
</div>
<p class="copyright w3l">&copy; 2018 Food Paradise . Developed by |<a href="https://www.facebook.com/falconxi1611"
                                                                      target="_blank"> Le Duc Toan</a></p>
</body>
</html>