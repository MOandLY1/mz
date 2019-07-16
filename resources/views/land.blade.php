<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>登录页面</title>
    <link rel="stylesheet" href="./css/land.css">

    <script src="https://libs.cdnjs.net/jquery/3.4.1/jquery.js"></script>
    <script type="text/javascript"  src="./js/mzsc.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="wrap">
        <div class="a"></div>
        <div class="main">
            <div class="main_header">登录魅族商城</div>
            <div class="main_main">
                <form action="{{url('/user_l')}}">
                <div class="b">
                    <input class="main_input_text" id="name" name="name" type="text" placeholder="输入账号">
                </div>
                <div class="b">
                    <input id="main_input_password" name="password" class="main_input_password" type="password" placeholder="输入密码" value="">

                    <input id="main_input_password_" name="password_" class="main_input_password_" type="text" placeholder="输入密码" value="">
                    <span onclick="c()" class="c"><img src="./img/31.png" alt=""></span>
                </div>
                <div class="b">
                    <input type="button" class="main_input_submit" onclick="Submission()" placeholder="提交" value="提交">
                </div>
            <form>
            </div>
            <div class="footer">没有账号*<a href="{{url('/register')}}">注册</a></div>
        </div>
    </div>

    <script>
    function Submission() {

    var name  = $('#name').val();         //把content id表的值赋值给变量
    var v = $('#main_input_password').css("display")
        if(v=='block') {
            var password = $('#main_input_password').val();

        }else{
            var password = $('#main_input_password_').val();
        }

    $.ajax({
        type: 'post',             //设定提交方式,get或post
        url: "{{url('/user_l')}}",         //提交的url
        data: {name:name,password:password},    //第一个参数相当于form表单的name，第二个参数则是里面的内容
        //提交给服务器的数据
        dataType: "json",            //服务器返回的数据格式
        success: function (data) {        //执行成功的方法
        alert(data.info)
            if(data.code==1){
                window.location.href="/mzsc1";
            }
        },
    });
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    </script>

</body>
</html>