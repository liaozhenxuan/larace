<!DOCTYPE html>
<!-- saved from url=(0041)http://static7.calm7.com/login/index.html -->
<html lang="zh"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>登录 - static7 - 后台管理系统</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('/') }}css/login/register-login.css">
    <link id="layuicss-layer" rel="stylesheet" href="{{ URL::asset('/') }}css/login/layer.css" media="all">
    <script charset="UTF-8" async="" src="{{ URL::asset('/') }}css/login/fullpage.8.0.5.js"></script>
    <link href="{{ URL::asset('/') }}css/login/style.1.4.6.css" rel="stylesheet">
    <link href="{{ URL::asset('/') }}css/login/style.1.3.0.css" rel="stylesheet">
<body>
<div id="box"><canvas class="particles-js-canvas-el" width="3360" height="1818" style="width: 100%; height: 100%;"></canvas></div>
<div class="cent-box">
    <div class="cent-box-header">
        <h1 class="main-title"></h1>
        <h2 class="sub-title"> 后台管理系统</h2>
    </div>

    <div class="cont-main clearfix">
        <form class="login form" action="" method="/admin/login">
            <div class="group">

                <div class="group-ipt email">
                    <input type="text" name="username" id="email" class="ipt" placeholder="输入您的账号" required="">
                </div>

                <div class="group-ipt password">
                    <input type="password" name="password" id="password" class="ipt" placeholder="输入您的登录密码" required="">
                </div>

            </div>


            <div class="button">
                <button type="submit" class="login-btn register-btn button" id="embed-submit">登录</button>
            </div>
        </form>
    </div>
</div>

<div class="footer">
    <p>© 2017 <a href="https://www.theon.xin/">theon.xin </a></p>
</div>

<script type="text/javascript" src="{{ URL::asset('/') }}js/layui/layui.js" charset="utf-8"></script>
<script type="text/javascript" src="{{ URL::asset('/') }}css/login/particles.js"></script>
<script type="text/javascript" src="{{ URL::asset('/') }}css/login/background.js"></script>
<script type="text/javascript" src="{{ URL::asset('/') }}css/login/gt.js"></script>
<script>

</script>

