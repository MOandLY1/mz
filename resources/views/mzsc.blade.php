<?php
session_start();
?>
        <!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
    <title>魅族商城</title>
    <link rel="stylesheet" type="text/css" href="./css/mzsc.css">
    <script type="text/javascript"  src="./js/mzsc.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">

</head>
<body>

<div class="ystplj" href=>
    <div class="jzk">
        <img src="./img/6.png">
    </div>
</div>

<div class="ys">
    <div class="ysjzk">
        <form action="">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        </form>
        <div class="yszb  fl">

            <div class="meizu  fl">
                <img src="./img/1.png">
            </div>
            <div class="meizu1 fl">
                <div class="meizu1-1-5 fl">
                    <div class="meizu1-1-6">魅族商城</div>
                </div>
                <div class="meizu1-1-5 fl">
                    <div class="meizu1-1-6">魅族手机</div>
                </div>
                <div class="meizu1-1-5 fl">
                    <div class="meizu1-1-6">魅蓝手机</div>
                </div>
                <div class="meizu1-1-5 fl">
                    <div class="meizu1-1-6">魅族声学</div>
                </div>
                <div class="meizu1-1-5 fl">
                    <div class="meizu1-1-6">智能配件</div>
                </div>
                <div class="meizu6 fl">
                    <div class="meizu1-1-6">服务</div>
                </div>
                <div class="meizu7 fl">
                    <div class="meizu1-1-6">专卖店</div>
                </div>
                <div class="meizu8 fl">
                    <div class="meizu1-1-6">Flyme</div>
                </div>
                <div onclick="aaa()" class="meizu9 fl">
                    <div class="meizu1-1-6">社区</div>
                </div>
            </div>
        </div>

        <div class="ysyb fl">
            <div class="ssk fl ">
                <div class="ssk5">
                    <form action="http://www.baidu.com/s">
                        <div class="ssk3 fl">
                            <input class="ssk2" type="text" name="">
                        </div>
                        <div class="ssk4 fl">
                            <input type="image" src="./img/30.png">
                        </div>
                    </form>
                </div>
            </div>
            <div class="grzx fl">

                <div onmouseover="d()" id="grzx1" class="grzx1">
                    <?php if(isset($_SESSION['user'])){ ?>
                        <?php echo $_SESSION['user']['name'] ?>
                    <?php }else{ ?>
                        <a href="{{url('/land')}}"><img src="./img/8.png"></a>
                    <?php } ?>

                </div>
                <script>
                    function d() {

                    }
                </script>

            </div>
            <div class="gwc fl">
                <div class="grzx1">
                    <img src="./img/9.png">
                </div>
            </div>
            <div class="kbk fl"></div>
        </div>

    </div>
</div>


<div class="mztj bg">
</div>


<div class="jjq">
    <div class="jjq0">
        <ul class="jjq1">
            <li class="jjq1-5 fl">
                <div class="jjq1-1-1">
                    <div class="jjq1-1-1-1 fl bb">
                        <img src="./img/14.png">
                    </div>
                    <div class="jjq1-1-1-1 fl br">
                        <img src="./img/15.png">
                    </div>
                </div>
                <div class="jjq1-1-1">
                    <div class="jjq1-1-1-1 fl by">
                        <img src="./img/16.png">
                    </div>
                    <div class="jjq1-1-1-1 fl bw">
                        <img src="./img/17.png">
                    </div>
                </div>
            </li>
            <li class="jjq1-5 fl">
                <img src="./img/10.png">
            </li>
            <li class="jjq1-5 fl">
                <img src="./img/11.png">
            </li>
            <li class="jjq1-5 fl">
                <img src="./img/12.png">
            </li>
            <li class="jjq1-5 fl">
                <img src="./img/13.png">
            </li>
        </ul>
    </div>
</div>
</div>

<div class="rptj ">
    <div class="rptj1"></div>
    <div class="rptj2">
        <ul class="rptj2-1">
            <li class="rptj2-1-5 fl"></li>
            <li class="rptj2-1-5 fl"></li>
            <li class="rptj2-1-5 fl"></li>
            <li class="rptj2-1-5 fl"></li>
            <li class="rptj2-1-5 fl"></li>
        </ul>
    </div>

</div>


<div class="mls6gg">
    <div class="mls6ggjzk">
        <img src="./img/3.png">
    </div>
</div>


<div class="shouji">
    <div class="shouji1">
        <div class="shouji1-1 fl">
            <div class="shouji1-1-1">手机</div>
        </div>
        <div class="shouji1-2 fl">
            <a href="https://www.baidu.com/index.php?tn=monline_3_dg">
                <div class="shouji1-2-0">
                    <div class="shouji1-2-1">热销机型
                    </div>
                    <div class="shouji1-2-2">
                    </div>

                </div>
            </a>
        </div>
        <div class="shouji1-3 fr">
            <div class="shouji1-3-1">更多></div>
        </div>
    </div>

    <div class="shouji2">
        <div class="shouji2-1">
            <ul class="shouji2-1-0">
                <li class="shouji2-1-1 fl"></li>
                <li class="shouji2-1-5 fl">
                    <img src="./img/sj/sj1.png">
                </li>
                <li class="shouji2-1-5 fl">
                    <img src="./img/sj/sj2.png">
                </li>
                <li class="shouji2-1-5 fl">
                    <img src="./img/sj/sj3.png">
                </li>
                <li class="shouji2-1-5 fl">
                    <img src="./img/sj/sj4.png">
                </li>
                <li class="shouji2-1-5 fl">
                    <img src="./img/sj/sj5.png">
                </li>
            </ul>

        </div>
        <div class="kbk1"></div>
        <div class="shouji2-2">
            <ul class="shouji2-1-0">
                <li class="shouji2-1-1 fl">
                </li>
                <li class="shouji2-1-5 fl">
                    <img src="./img/sj/sj6.png">
                </li>
                <li class="shouji2-1-5 fl">
                    <img src="./img/sj/sj7.png">
                </li>
                <li class="shouji2-1-5 fl">
                    <img src="./img/sj/sj8.png">
                </li>
                <li class="shouji2-1-5 fl">
                    <img src="./img/sj/sj9.png">
                </li>
                <li class="shouji2-1-5 fl">
                    <img src="./img/sj/sj10.png">
                </li>
            </ul></div>


    </div>
</div>


<div class="ejgg ">
    <div class="ejgg1">
        <img src="./img/4.png">
    </div>
</div>

<div class="smpj">
    <div class="smpj1">
        <div class="smpj1-1 fl">数码配件</div>
        <div class="smpj1-2 fl">
            <div class="smpj1-2-1">超值推荐</div>
            <div class="smpj1-2-2"></div>
        </div>
        <div class="smpj1-3 fr">更多></div>

    </div>

    <div class="smpj2">
        <div class="smpj2-1">
            <ul class="smpj2-1-1">
                <li class="smpj2-1-1-0 fl"></li>
                <li class="smpj2-1-1-5 fl">
                    <img src="./img/smpj/smpj1.png">
                </li>
                <li class="smpj2-1-1-5 fl">
                    <img src="./img/smpj/smpj2.png">
                </li>
                <li class="smpj2-1-1-5 fl">
                    <img src="./img/smpj/smpj3.png">
                </li>
                <li class="smpj2-1-1-5 fl">
                    <img src="./img/smpj/smpj4.png">
                </li>
                <li class="smpj2-1-1-5 fl">
                    <img src="./img/smpj/smpj5.png">
                </li>

            </ul>
        </div>

        <div class="smpj2-2">
            <ul class="smpj2-2-1">
                <li class="smpj2-2-1-0 fl"></li>
                <li class="smpj2-2-1-5 fl">
                    <img src="./img/smpj/smpj6.png">
                </li>
                <li class="smpj2-2-1-5 fl">
                    <img src="./img/smpj/smpj7.png">
                </li>
                <li class="smpj2-2-1-5 fl">
                    <img src="./img/smpj/smpj8.png">
                </li>
                <li class="smpj2-2-1-5 fl">
                    <img src="./img/smpj/smpj9.png">
                </li>
                <li class="smpj2-2-1-5 fl">
                    <img src="./img/smpj/smpj10.png">
                </li>

            </ul>
        </div>
    </div>

</div>


</div>

<div class="cdbgg">
    <div class="cdbgg1">
        <img src="./img/5.png">
    </div>
</div>



<div class="sjzb">
    <div class="sjzb1">
        <div class="sjzb1-1 fl">手机周边</div>
        <div class="sjzb1-2 fl">
            <div class="sjzb1-2-1">超值推荐</div>
            <div class="sjzb1-2-2"></div>
        </div>
        <div class="sjzb1-3 fl">
            <div class="sjzb1-3-1">数据线/电源适配器</div>
        </div>
        <div class="sjzb1-4 fl">
            <div class="sjzb1-4-1">保护套/后盖/贴膜
            </div>
        </div>
        <div class="sjzb1-5 fr">
            <div class="sjzb1-4-1">更多></div>
        </div>

    </div>

    <div class="sjzb2">
        <div class="sjzb2-1">
            <ul class="sjzb2-1-1">
                <li class="sjzb2-1-1-0 fl"></li>
                <li class="sjzb2-1-1-5 fl">
                    <img src="./img/sjzb/sjzb1.png">
                </li>
                <li class="sjzb2-1-1-5 fl">
                    <img src="./img/sjzb/sjzb2.png">
                </li>
                <li class="sjzb2-1-1-5 fl">
                    <img src="./img/sjzb/sjzb3.png">
                </li>
                <li class="sjzb2-1-1-5 fl">
                    <img src="./img/sjzb/sjzb4.png">
                </li>
                <li class="sjzb2-1-1-5 fl">
                    <img src="./img/sjzb/sjzb5.png">
                </li>
            </ul>
        </div>

        <div class="sjzb2-2">
            <ul class="sjzb2-2-1">
                <li class="sjzb2-2-1-0 fl"></li>
                <li class="sjzb2-2-1-5 fl">
                    <img src="./img/sjzb/sjzb6.png">
                </li>
                <li class="sjzb2-2-1-5 fl">
                    <img src="./img/sjzb/sjzb7.png">
                </li>
                <li class="sjzb2-2-1-5 fl">
                    <img src="./img/sjzb/sjzb8.png">
                </li>
                <li class="sjzb2-2-1-5 fl">
                    <img src="./img/sjzb/sjzb9.png">
                </li>
                <li class="sjzb2-2-1-5 fl">
                    <img src="./img/sjzb/sjzb10.png">
                </li>


            </ul>

        </div>

    </div>
</div>

<div class="yw">
    <div class="ywjzk">
        <div class="yws">
            <div class="ywz0 fl"></div>
            <div class="ywz fl">
                <ul class="ywz1">
                    <li class="ywz1-5 fl">
                        顺丰包邮
                    </li>
                    <li class="ywz1-5 fl">100+城市次日送达
                    </li>
                    <li class="ywz1-5 fl">
                        7天无理由退货
                    </li>
                    <li class="ywz1-5 fl">
                        15天换货保障
                    </li>
                </ul>
                <ul class="ywz2">
                    <li class="ywz1-5 fl">
                        1年免费保修
                    </li>
                    <li class="ywz1-5 fl">
                        2300+线下体验店
                    </li>
                    <li class="ywz1-5 fl">
                        远程支持服务
                    </li>
                    <li class="ywz1-5 fl">
                        上门快修
                    </li>
                </ul>
            </div>
            <div class="ywy fr">
                <div class="ywyy fr"></div>
                <div class="ywyz">
                    <div class="ywy1 fr">24小时全国服务热线
                    </div>
                    <div class="ywy2 fr">
                        400-788-3333
                    </div>
                    <div class="ywy3 fr">
                        <img src="./img/yw/yw2.png">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div class="ywzb"></div>
<div class="ywx">
    <div class="ywxs">
        <ul class="ywxs1">
            <li class="ywxs4z fl">了解魅族</li>
            <li class="ywxs4z fl">加入我们</li>
            <li class="ywxs4z fl">联系我们</li>
            <li class="ywxsyw fl">Flyme</li>
            <li class="ywxs4z fl">魅族社区</li>
            <li class="ywxs5z fl">天猫旗舰店</li>
            <li class="ywxs4z fl">问题反馈</li>
            <li class="ywxs10z fl">线上销售授权公示名单</li>
        </ul>
    </div>
    <div class="ywxx">
        <div class="ywxxz fl">
            ©2017 Meizu Telecom Equipment Co., Ltd. All rights reserved.
            <span class="kbk5"></span>粤ICP备13003602号-2
            <span class="kbk6"></span> 合字B2-20170010
            <span class="kbk6"></span>
            营业执照
            <span class="kbk6"></span>
            法律声明
            <span class="kbk6"></span>
            粤公网安备 44049102496009 号
        </div>
        <div class="ywxxzj fl">
                 <span class="ywtb1 fl">
                     <img src="./img/ywx/ywx1.png">
                 </span>
            <span class="ywtb1 fl">
                     <img src="./img/ywx/ywx2.png">
                 </span>
            <span class="ywtb1 fl">
                     <img src="./img/ywx/ywx3.png">
                 </span>
        </div>
        <div class="ywxxy fr">
                    <span class="ywxxy1">
                        <img src="./img/ywx/ywx4.png">
                    </span>
            <span class="ywxxy2">
                        <img src="./img/ywx/ywx5.png">
                    </span>
            <span class="ywxxy1">
                        <img src="./img/ywx/ywx6.png">
                    </span>
        </div>
    </div>
</div>

</body>
</html>