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
<meta name="msapplication-TileImage" content="/pc/Public/Wap/images/logo_ico.png"/>
<!-- Windows 8 磁贴图标 -->
<link rel="shortcut icon" href="/pc/Public/Wap/images/favicon.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<link rel="stylesheet" href="/pc/Public/Wap/css/style.css" >
<script type="text/javascript" src="/pc/Public/Wap/js/jquery-1.9.1.js" ></script>
<script type="text/javascript" src="/pc/Public/Wap/js/yxMobileSlider.js" ></script>
</head>
<body>

<input id="menustate" class="menustate" type="checkbox">
<nav id="ncnav">
  <ul class="navhead">
       <li class="menuicon">
           <label for="menustate">
           <p class="menuanchor-open"><img src="/pc/Public/Wap/image/menu.png" alt=""></p>
           <p href="#" class="menuanchor-close">X</p>
           </label>
        </li>
       <li class="logo"><img src="/pc/Public/Wap/image/logo.png" alt="ShopNC-logo"></li>
       <li class="tel"><img src="/pc/Public/Wap/image/tel.png" alt="tel"></li>
   </ul>
   <ul class="list">
       <li class="item_menu"><a class="item_link" href="<?php echo U('B2B2C');?>">B2B2C多用户商城系统</a></li>
  
       <li class="item_menu"><a class="item_link" href="<?php echo U('APP');?>">移动应用</a></li>
       <li class="item_menu"><a class="item_link" href="<?php echo U('solutions');?>">电商解决方案</a></li>
       <li class="item_menu"><a class="item_link" href="<?php echo U('about');?>">关于我们</a></li>
   </ul>
</nav>


<div class="about">
    <div class="banner-bg">
        <div class="banner-title">关于我们</div>

        <div class="banner-info"> 务实创新、追求卓越</div>
       <div><a href="javascript:$(document.body).animate({'scrollTop':630},1000);" class="down-btn"></a></div>
    </div>
    <div class="about-con">
        <div class="about-con-tit">
            <h2>公司简介</h2>
            <h4>Company Introduction</h4>

            <p class="info justify">天津市网城天创科技有限责任公司，是中国领先的电商软件开发、服务提供商。公司位于天津市和平区，是一家拥有自主知识产权的互联网软件企业。公司长期专注于电商行业发展，并为企业客户提供高质量的软件产品、解决方案的研发和服务。公司拥有互联网软件研发及具备丰富电商运营经验的精英团队，是中国最专业的电商软件企业之一。</p>
        </div>
        <img alt="" src="/pc/Public/Wap/image/about-img.jpg">
        <div class="about-con-tit pb10">
            <h2>核心产品</h2>
            <h4>Core Product</h4>
            <p class="info justify" style="border-bottom:1px solid #e7e7e7; padding-bottom:30px; ">公司核心产品
                “ShopNC”，是国内应用范围最大、覆盖面最广的电商软件产品，基于此，历经9年的时间，而发展成为国内最先进的具备成熟且标准化的电商平台技术解决方案提供商。“ShopNC”
                的每一次新产品发布都引领着中国电商软件研发领域的潮流。同时公司建立了由多名科学家构成的行业及技术研究中心，对电商行业发展趋势、软件产品架构、技术领先性、新技术应用与创新等都做出了卓越贡献。</p>
        </div>


        <div class="about-con-tit">
            <h2>联系方式</h2>
            <h4>Contact Details</h4>

            <p class="ads">天津市和平区创新大厦A座12层</p>
            <span><img alt="" src="/pc/Public/Wap/image/map.jpg"></span>
        </div>


    </div>
</div>


</div>


<div class="footer" id="footer"> 
<div class="line"></div>
    <div class="tit">宣汉7yun</div>
    <ul>
        <li><a href=""><img src="/pc/Public/Wap/image/weixin.png" alt=""></a></li>
        <li><a href=""><img src="/pc/Public/Wap/image/txwb.png" alt=""></a></li>
        <li><a href=""><img src="/pc/Public/Wap/image/xlwb.png" alt=""></a></li>
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