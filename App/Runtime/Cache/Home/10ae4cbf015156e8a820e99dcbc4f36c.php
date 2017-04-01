<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="<?php echo C('SITE_KEYWORD');?>">
<meta name="description" content="<?php echo C('SITE_DESCRIPTION');?>">
<title><?php echo C('SITE_TITLE');?></title>
<meta name="author" content="ShopNC">
<meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no,minimal-ui">
<meta name="viewport" content="width=640,target-densitydpi=320, user-scalable=no">
<meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta content="no-cache" http-equiv="pragma">
<meta content="0" http-equiv="expires">
<meta content="telephone=no, address=no" name="format-detection">
<meta name="HandheldFriendly" content="true">

<!-- uc强制竖屏 -->
<meta name="screen-orientation" content="portrait">
<!-- QQ强制竖屏 -->
<meta name="x5-orientation" content="portrait">
<!-- UC强制全屏 -->
<meta name="full-screen" content="yes">
<!-- QQ强制全屏 -->
<meta name="x5-fullscreen" content="true">
<!-- UC应用模式 -->
<meta name="browsermode" content="application">
<!-- QQ应用模式 -->
<meta name="x5-page-mode" content="app">
<!-- windows phone 点击无高光 -->
<meta name="msapplication-tap-highlight" content="no">
<!-- 适应移动端end -->
<!-- apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
<!-- Mobile Devices -->
<meta name="msapplication-TileColor" content="#00AEEB"/>
<!-- Windows 8 磁贴颜色 -->
<meta name="msapplication-TileImage" content="/xh/Public/Wap/images/logo_ico.png"/>
<!-- Windows 8 磁贴图标 -->
<link rel="shortcut icon" href="/xh/Public/Wap/images/favicon.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="stylesheet" href="/xh/Public/Wap/css/style.css" >
<script type="text/javascript" src="/xh/Public/Wap/js/jquery-1.9.1.js" ></script>
<script type="text/javascript" src="/xh/Public/Wap/js/yxMobileSlider.js" ></script>
</head>
<body>

<input id="menustate" class="menustate" type="checkbox">
<nav id="ncnav">
  <ul class="navhead">
       <li class="menuicon">
           <label for="menustate">
           <p class="menuanchor-open"><img src="/xh/Public/Wap/image/menu.png" alt=""></p>
           <p href="#" class="menuanchor-close">X</p>
           </label>
        </li>
       <li class="logo"><img src="/xh/Public/Wap/image/logo.png" alt="ShopNC-logo"></li>
       <li class="tel"><img src="/xh/Public/Wap/image/tel.png" alt="tel"></li>
   </ul>
   <ul class="list">
       <li class="item_menu"><a class="item_link" href="<?php echo U('B2B2C');?>">B2B2C多用户商城系统</a></li>
  
       <li class="item_menu"><a class="item_link" href="<?php echo U('APP');?>">移动应用</a></li>
       <li class="item_menu"><a class="item_link" href="<?php echo U('solutions');?>">电商解决方案</a></li>
       <li class="item_menu"><a class="item_link" href="<?php echo U('about');?>">关于我们</a></li>
   </ul>
</nav>


<div class="solution">
    <div class="banner-bg">
        <div class="banner-title">电商解决方案</div>
        <div class="banner-info"> 颠覆您的互联网商业定义</div>
        <div class="banner-btn "><a data-url="" href="javascript:;">改变，迫在眉睫！</a></div>
        <div><a href="javascript:$(document.body).animate({'scrollTop':1050},1000);" class="down-btn"></a></div>
    </div>
    <div class="sol-content">
        <div class="sol-content-tit">
            <h2 id="content">为您提供专业的电商解决方案</h2>
            <p class="info justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公司建立了一整套以 “ShopNC”标准化电商软件为基础的电商建设解决方案。包括基于不同运维模式的B2B2C、B2B、B2C、O2O、C2C、C2B等被企业用户广泛使用的电商软件产品，还包括基于汽车、百货、医疗、母婴、电视、跨境、工业品、社区等行业的具体解决方案。</p>
        </div>
    </div>
    <div class="pro-box" style=" height:540px;">
        <div id="hproducts" class="pro2">
            <div class="swiper-wrapper hproducts">
                <div data-url="#" class="swiper-slide">
                    <div class="intro">
                        <h2>B2B2C 商城系统</h2>
                        <p>流程功能最完善的电商平台系统。</p>
                    </div>
                    <img width="430" height="500" src="/xh/Public/Wap/image/ncproduct1.jpg" ></div>
                <div data-url="#" class="swiper-slide">
                    <div class="intro">
                        <h2>Bizpower商城系统</h2>
                        <p>java技术，安全、稳定、结构合理、高并发性、强扩展性、集群部署</p>
                    </div>
                    <img width="430" height="500" src="/xh/Public/Wap/image/ncproduct2.jpg" ></div>
                <div data-url="#" class="swiper-slide">
                    <div class="intro">
                        <h2>移动应用 APP</h2>
                        <p> 集购物、视频、直播为一体的全生态移动商城。</p>
                    </div>
                    <img width="430" height="500" src="/xh/Public/Wap/image/ncproduct3.jpg" ></div>
                <div data-url="#" class="swiper-slide">
                    <div class="intro">
                        <h2>分销系统</h2>
                        <p>多终端、多平台、全民分销系统。</p>
                    </div>
                    <img width="430" height="500" src="/xh/Public/Wap/image/ncproduct4.jpg" ></div>
                <div data-url="#" class="last swiper-slide swiper-slide-active">
                    <div class="intro">
                        <h2>微信商城</h2>
                        <p>H5开发全面与微信打通，包含多种微信营销功能的商城系统。</p>
                    </div>
                    <img width="430" height="500" src="/xh/Public/Wap/image/ncproduct5.jpg" ></div>
            </div>
            <div class="prev5 hprev"></div>
            <div class="next5 hnext"></div>
        </div>
    </div>
    <div class="sol-content">
        <div class="sol-content-tit">
            <h2>ShopNC为您提供专业的电商解决方案</h2>
            <p class="info justify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;作为专业的企业级电商系统提供商，我们沉淀了9年的行业项目经验，为超过800家知名品牌及零售企业提供适合的针对性解决方案，帮助企业适应市场发展浪潮、响应业务变化拓展。</p>
        </div>
    </div>
    <div class="swiper-slide">
        <ul>
            <li><a class="pic1" href="general.html" >综合百货行业解决方案</a></li>
            <li><a class="pic2" href="medicine.html" >医药行业解决方案</a></li>
            <li><a class="pic3" href="cbes.html" >跨境零售行业<br>
                三种跨境模式</a></li>
            <li><a class="pic4" href="O2O.html" >社区O2O行业<br>
                线上线下完美结合</a></li>
            <li><a class="pic5" href="industrial.html" >工业品行业解决方案</a></li>
            <li><a class="pic6" href="car.html" >汽车行业解决方案</a></li>
        </ul>
    </div>
</div>


<script>
    //hproducts js
    var hpage = $("#hproducts .swiper-slide-active").index(),
            htotal = $("#hproducts .swiper-slide").length;

    $("#hproducts").on("click", ".swiper-slide", function (e) {
        hpage = $(this).index();
        $(this).siblings("div").removeClass("swiper-slide-active").end().addClass("swiper-slide-active");
    })

    $("#hproducts").on("click", ".hprev", function (e) {
        e.preventDefault();
        hpage--;
        if (hpage < 0) {
            hpage = htotal - 1;
        }
        $("#hproducts .swiper-slide").removeClass("swiper-slide-active");
        $("#hproducts .swiper-slide").eq(hpage).addClass("swiper-slide-active");
    })


    $("#hproducts").on("click", ".hnext", function (e) {
        e.preventDefault();
        hpage++;
        if (hpage >= htotal) {
            hpage = 0;
        }
        $("#hproducts .swiper-slide").removeClass("swiper-slide-active");
        $("#hproducts .swiper-slide").eq(hpage).addClass("swiper-slide-active");
    })


    $("#hproducts").on("click", ".swiper-slide-active", function (e) {
        e.preventDefault();
        location.href = $(this).data("url");
    })
</script>


<div class="footer" id="footer"> 
<div class="line"></div>
    <div class="tit">柚伴信息</div>
    <ul>
        <li><a href=""><img src="/xh/Public/Wap/image/weixin.png" alt=""></a></li>
        <li><a href=""><img src="/xh/Public/Wap/image/txwb.png" alt=""></a></li>
        <li><a href=""><img src="/xh/Public/Wap/image/xlwb.png" alt=""></a></li>
    </ul>
    <div class="text clear">
        <p>售前咨询热线:<?php echo ($config["pre_phone"]); ?></p>
        <p style="padding-top:0px; margin-bottom:0;">售后服务电话:<?php echo ($config["aft_phone"]); ?></p>
        <span style="margin-bottom:20px;"><?php echo ($config["worktime"]); ?></span>
        <span>高新技术企业：<?php echo ($config["company_name"]); ?>  </span>
        <span>证书编号：GR20151200027</span>
        <span>备案许可证号：<?php echo ($config["beian"]); ?></span>
        <span><?php echo ($config["copyright"]); ?></span>
    </div>

    </div>
    <div class="btn" id="pc_btn">
        <a href="" class="pc_btn"></a>
        <a href="<?php echo U('index');?>" class="wap_btn"></a>
    </div>
</div>
<div class="bottom_nav" id="footer_menu"> 
<a class="home" href="<?php echo U('index');?>">返回首页</a>
<a class="dial" href="tel:<?php echo ($config["pre_phone"]); ?>">一键拨号</a>
<a class="online" href="<?php echo U('apply');?>">在线咨询</a></span></a>
<a class="back_top" id="returnTop" href="javascript:$(document.body).animate({'scrollTop':0},1000);">返回顶部</a>
</div>
</body>
</html>