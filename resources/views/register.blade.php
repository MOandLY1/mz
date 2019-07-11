<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>注册页面</title>
    <link rel="stylesheet" href="./css/register.css">
    <script type="text/javascript"  src="./js/mzsc.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="wrap">
    <div class="a"></div>
    <div class="main">
        <div class="main_header">注册魅族账号</div>
        <div class="main_main">
            <form action="{{url('/user_r')}}">
            <div class="b">
                <input class="main_input_text" name="name" type="text" placeholder="输入用户名">
            </div>
            <div class="b">
                <input id="main_input_password" name="password" class="main_input_password" type="password" placeholder="输入密码">
                <span onclick="c()" class="c"><img src="./img/31.png" alt=""></span>
            </div>
            <div class="b">
                <input class="main_input_password" name="password_" type="password" placeholder="确认密码">
                <span onclick="c()" class="c"><img src="./img/31.png" alt=""></span>
            </div>
            <div class="b">
                <input class="main_input_submit" type="submit" placeholder="提交">
            </div>
            </form>
        </div>
        <div class="footer">已有账号*<a href="{{url('/land')}}">登录</a></div>
    </div>
</div>

</body>
</html>