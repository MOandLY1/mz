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
    <div id="Advertisement" class="Advertisement"><img src="./img/6.png">
        <div id="Advertisement_Close" onclick="Advertisement_Close()" class="Advertisement_Close"><img src="./img/32.png" alt=""></div></div>  <!--页首广告-->

    <div class="nav">                                           <!--导航条-->
        <div class="header_left fl">
            <div class="header_nav fl">
                <img onclick="jump_homepage()" src="./img/1.png" alt="">
            </div>

            <?php foreach ($Navigation_mzsc as $key => $value){ ?>
            <div class="header_menu fl"><?php echo $value['name'] ?></div>
            <?php foreach ($value['secondary'] as $k => $v){ ?>
            <div class="header_menu fl"><?php echo $v['name'] ?></div>
<?php } ?>
<?php } ?>
















            <div class="wrap">
                <div class="Details_page_main">
                    <div class="Details_page_main_left fl">
                        <div class="Details_page_main_left_centent">
                            <img src="./img/spxq_luyou/1_1.jpg" alt="">
                        </div>
                        <div class="Details_page_main_left_centent__Small">
                            <div class="Details_page_main_left_centent_Small_ fl">
                                <img src="./img/spxq_luyou/1.jpg" alt="">
                            </div>
                            <div class="Details_page_main_left_centent_Small_ fl">
                                <img src="./img/spxq_luyou/2.jpg" alt="">
                            </div>
                            <div class="Details_page_main_left_centent_Small_ fl">
                                <img src="./img/spxq_luyou/3.jpg" alt="">
                            </div>
                            <div class="Details_page_main_left_centent_Small_ fl">
                                <img src="./img/spxq_luyou/4.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="Details_page_main_right fr">
                        <div class="Details_page_right_">
                            <div class="Details_page_name" >魅族无线充电器</div>
                            <div class="Details_page_Propaganda" >10W快速充电 无线即放即充</div>
                        </div>
                        <div class="Details_page_right_">
                            <div class="Details_page_Price" >¥ 99.00</div>
                        </div>
                        <div class="Details_page_right_">
                            <div class="">备用块</div>
                        </div>
                        <div class="Details_page_classification">
                            <div class="Details_page_classification" >颜色分类</div>
                            <div>
                                <div>
                                    <div>图片</div>
                                    <div>白色</div>
                                </div>
                            </div>
                        </div>
                        <div class="Details_page_right_">
                            <div class="Details_page_Number">数量</div>
                            <div class="Details_page_Number_">
                                <div class=" fl">-</div>
                                <div class=" fl">1</div>
                                <div class=" fl">+</div>
                            </div>
                        </div>
                        <div class="Details_page_right_">
                            <div class="Details_page_purchase" >立即购买</div>
                            <div class="Details_page_Pack">加入购物车</div>
                        </div>
                    </div>
                </div>
            </div>

