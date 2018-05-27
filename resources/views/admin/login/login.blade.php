<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.5
Version: 1.4.2
Purchase: http://wrapbootstrap.com
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->
<head>
    <meta charset="utf-8"/>
    <title>后台登录</title>

    <meta name="description" content="login page"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="/dist/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link id="bootstrap-rtl-link" href="" rel="stylesheet"/>
    <link href="/dist/css/font-awesome.min.css" rel="stylesheet"/>

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300"
          rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link href="/dist/css/beyond.min.css" rel="stylesheet"/>
    <link href="/dist/css/demo.min.css" rel="stylesheet"/>
    <link href="/dist/css/animate.min.css" rel="stylesheet"/>
    <link id="skin-link" href="" rel="stylesheet" type="text/css"/>

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="/dist/js/skins.min.js"></script>
</head>
<!--Head Ends-->
<!--Body-->
<body>
<div class="login-container animated fadeInDown">
    <form action="" method="post">
        {{csrf_field()}}
        <div class="loginbox bg-white">
            <div class="loginbox-title">后台登录</div>
            {{--<div class="loginbox-social">--}}
            {{--<div class="social-title ">Connect with Your Social Accounts</div>--}}
            {{--<div class="social-buttons">--}}
            {{--<a href="" class="button-facebook">--}}
            {{--<i class="social-icon fa fa-facebook"></i>--}}
            {{--</a>--}}
            {{--<a href="" class="button-twitter">--}}
            {{--<i class="social-icon fa fa-twitter"></i>--}}
            {{--</a>--}}
            {{--<a href="" class="button-google">--}}
            {{--<i class="social-icon fa fa-google-plus"></i>--}}
            {{--</a>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="loginbox-or">--}}
            {{--<div class="or-line"></div>--}}
            {{--<div class="or">OR</div>--}}
            {{--</div>--}}
            <div class="loginbox-textbox">
                <input type="text" class="form-control" name="username" placeholder="账号" value="{{old('username')}}"/>
            </div>
            <div class="loginbox-textbox">
                <input type="password"  class="form-control" name="password" placeholder="密码"/>
            </div>
            <div class="loginbox-forgot">
                <a href="">忘记密码</a>
            </div>
            <div class="loginbox-submit">
                @if(session('error'))
               <span class="text-danger text-align-center">
                       {{session('error')}}
                 </span>
                @endif
                <input type="submit" class="btn btn-primary btn-block" value="登录">
            </div>
            {{--<div class="loginbox-signup">--}}
            {{--<a href="register.html">Sign Up With Email</a>--}}
            {{--</div>--}}
        </div>
    </form>
    {{--<div class="logobox">--}}
    {{--</div>--}}
</div>

<!--Basic Scripts-->
<script src="/dist/js/jquery.min.js"></script>
<script src="/dist/js/bootstrap.min.js"></script>
<script src="/dist/js/slimscroll/jquery.slimscroll.min.js"></script>

<!--Beyond Scripts-->
<script src="/dist/js/beyond.js"></script>


</body>
<!--Body Ends-->
</html>
