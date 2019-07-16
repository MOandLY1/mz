
<!DOCTYPE html>
<html>
<head>
    <title>魅族商城</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/mzsc1.css">
    <script src="https://libs.cdnjs.net/jquery/3.4.1/jquery.js"></script>
    <script src="./js/mzsc.js"></script>
</head>
<body>
<div class="header">                   <!--头部-->
    <div id="Advertisement" class="Advertisement"><img src="./img/6.png">
        <div id="Advertisement_Close" onclick="Advertisement_Close()" class="Advertisement_Close"><img src="./img/32.png" alt=""></div></div>  <!--页首广告-->

    <div class="nav">                                           <!--导航条-->
        <div class="header_left fl">
            <div class="header_nav fl">
                <img src="./img/1.png" alt="">
            </div>
            <div class="header_menu fl">魅族商城</div>
            <div class="header_menu fl">魅族手机</div>
            <div class="header_menu fl">魅蓝手机</div>
            <div class="header_menu fl">魅族声学</div>
            <div class="header_menu fl">智能配件</div>
            <div class="header_menu fl">服务</div>
            <div class="header_menu fl">专卖店</div>
            <div class="header_menu fl">Flyme</div>
            <div class="header_menu fl">社区</div>
        </div>


        <div class="header_right fr">
            <div class="nav_input fl">
                <input class="nav_input_text" type="text">
                <input class="nav_input_submit" type="submit">
            </div>
            <div class="user_state fl">
                <img onmouseover="Personal_Center()" onmouseout="Personal_Center_()" src="./img/8.png" alt="">
            </div>
            <?php if(session('user')){ ?>
            <div onmouseout="user_state_details()"  id="user_state_details" class="user_state_details_">用户：<?php echo $user_info['name']; ?><br>注销登录</div>

            <?php }else{ ?>
            <div onmouseout="user_state_details()" onclick="Jump_land()" id="user_state_details" class="user_state_details">未登录，点击登录</div>
            <?php }?>

            <div class="Shopping_Cart fl">
                <img src="./img/9.png" alt="">
            </div>
        </div>
    </div>
</div>




@yield('content')




<div class="footer">                               <!--底部-->
    <div class="footer_main">
        <div class="footer_l fl">
            <div class="footer_left_t">
                <div class="footer_left_top fl">顺丰包邮</div>
                <div class="footer_left_top fl">100+城市次日送达</div>
                <div class="footer_left_top fl">7天无理由退货</div>
                <div class="footer_left_top fl">15天换货保障</div>
            </div>
            <div class="footer_left_b">
                <div class="footer_left_bottom fl">1年免费保修</div>
                <div class="footer_left_bottom fl">2300+线下体验店</div>
                <div class="footer_left_bottom fl">远程支持服务</div>
                <div class="footer_left_bottom fl">上门快修</div>
            </div>
        </div>
        <div class="footer_r fr">
            <div class="footer_r_1 "><div class="fr">24小时全国服务热线</div></div>
            <div class="footer_r_2 "><div class="fr">400-788-3333</div></div>
            <div class="footer_r_3"><div class="fr"><img src="./img/yw/yw2.png"></div></div>
        </div>
    </div>

    <div class="footer_footer">
        <div class="footer_footer_t">
            <div class="footer_footer_top fl">了解魅族</div>
            <div class="footer_footer_top fl">加入我们</div>
            <div class="footer_footer_top fl">联系我们</div>
            <div class="footer_footer_top fl">Flyme</div>
            <div class="footer_footer_top fl">魅族社区</div>
            <div class="footer_footer_top fl">天猫旗舰店</div>
            <div class="footer_footer_top fl">问题反馈</div>
            <div class="footer_footer_top fl">线上销售授权公示名单</div>
        </div>
        <div class="footer_footer_b">
            <div class="footer_footer_bottom_l fl">
                <p class="fl">
                    ©2017 Meizu Telecom Equipment Co., Ltd. All rights reserved. 粤ICP备13003602号-2 合字B2-20170010 营业执照 法律声明 粤公网安备 44049102496009 号 </p>
                <img class="footer_img fl" src="./img/ywx/ywx1.png">
                <img class="footer_img fl" src="./img/ywx/ywx2.png">
            </div>
            <div class="footer_footer_bottom_r fr">
                <img src="./img/ywx/ywx4.png" >
                <img src="./img/ywx/ywx5.png" >
                <img src="./img/ywx/ywx6.png" >

            </div>
        </div>
    </div>

</div>                         <!--底部-->

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>






</body>
</html>