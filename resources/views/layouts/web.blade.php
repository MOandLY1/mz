<?php
use App\Models\Navigation;
$Navigation_mzsc = Navigation::where('Superior_id','0')->get()->toArray(); //查询

foreach ($Navigation_mzsc as $key =>$value){
    $secondary = Navigation::where('Superior_id',$value['id'])->get()->toArray();
    $Navigation_mzsc[$key]['secondary'] = $secondary;
}
//echo "<pre>";
//var_dump($Navigation_mzsc);
//exit;
?>
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


    <div class="nav">                                           <!--导航条-->
        <div class="header_left fl">
            <div class="header_nav fl">
                <img onclick="jump_homepage()" src="./img/1.png" alt="">
            </div>


            <?php $a = 0; ?>
        <?php foreach ($Navigation_mzsc as $key => $value){ ?>
            <?php $a++; ?>
            <div   onmouseover="Secondary_navigation(<?php echo $a; ?>)" onmouseout="Secondary_navigation_()"  class="header_menu fl a"><?php echo $value['name'] ?></div>



            <div onmouseout="leave_secondary_nav()" class="Secondary_navigation <?php echo $a.'bb' ?>"><!--二级导航栏，绝对定位块-->
                <?php foreach ($value['secondary'] as $k=>$v){ ?>
                <div class="secondary_nav fl">  {{$v['name']}}  </div>
                    <?php } ?>
            </div>


        <?php } ?>


{{--            <div class="header_menu fl">魅蓝手机</div>--}}
{{--            <div class="header_menu fl">魅族声学</div>--}}
{{--            <div class="header_menu fl">智能配件</div>--}}
{{--            <div class="header_menu fl">服务</div>--}}
{{--            <div class="header_menu fl">专卖店</div>--}}
{{--            <div class="header_menu fl">Flyme</div>--}}
{{--            <div class="header_menu fl">社区</div>--}}
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
            <div onmouseout="user_state_details()" onclick="Jump_Personal_Center()"  id="user_state_details" class="user_state_details_">用户：<br>个人中心</div>

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