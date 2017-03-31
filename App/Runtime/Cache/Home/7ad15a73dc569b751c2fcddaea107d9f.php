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


<script type="text/javascript">
$(function (){
  $(".nav-tab li").click(function (){
      var tabLiArr = $(this).parent().find("li");
      var tabShowArr = $(this).parents(".tabbar").nextAll(".child-tab-show");
      var index = $.inArray(this,tabLiArr);
      if($(tabShowArr).eq(index)){
        $(tabLiArr).removeClass("current").eq(index).addClass("current");
        $(tabShowArr).addClass("hide").eq(index).removeClass("hide");
      }
  })
  
})
</script>
<style>
.nav-tab {
  height: 70px;
}
.nav-tab ul { display:block;
}
.nav-tab ul li {
  float: left; width:50%;
}
.nav-tab ul li a {
  color: #000;
  padding: 10px 20px;
  background: #ffffff;
  font-size: 25px;
  font-weight: bolder;
  float: left;
  text-decoration: none;
  height: 50px; line-height:50px;
}
.nav-tab ul li.current a {
  color: #fff;
  padding: 10px 20px;
  background:#3b9de6;
  background-image: none;
  height: 50px; line-height:50px;
}
.hide {
  display: none !important;
}
</style>
<div id="app-download">
  <div class="banner-bg">
    <h2>电商系统移动应用</h2>
    <h4>WAP版手机商城</h4>
  </div>
  <div class="app-con-tit">
    <p class="banner-info">

Wap版手机商城，HTML5开发，无需APP安装，使用手机浏览器直接访问商城系统页面，WAP版手机商城可支持任意移动终端。
</p>
  </div>
  <div class="app-con">
    <div class="nav-tab tabbar">
      <ul>
        <li class="current"><a href="javascript:void(0)">ShopNC B2B2C</a></li>
        <li><a href="javascript:void(0)">Java多用户商城系统</a></li>
      </ul>
    </div>
    
     <span class="qcode child-tab-show"><a href="javascript:if(confirm('http://b2b2c.shopnctest.com/dema/wap/  '))window.location='http://b2b2c.shopnctest.com/dema/wap/'"  > <img src="/pc/Public/Wap/image/ShopNC_PHP_wap.png"   width="100%" height="auto" alt="ShopNC电商系统移动应用,iPhone手机客户端,扫描二维码,下载iOS移动端体验版"/></a></span>
     <span class="qcode child-tab-show hide"><a href="javascript:if(confirm('http://java.bizpower.com/wap/  '))window.location='http://java.bizpower.com/wap/'"  ><img src="/pc/Public/Wap/image/ShopNC_Java_wap.png"   width="100%" height="auto" alt="ShopNC电商系统移动应用,安卓手机客户端,扫描二维码,下载JaVa版Android移动端体验版" /></a></span>
    
    
    
    
    
  </div>
</div>

<!--<div class="nc-qrcode">

    <div class="qrcode-con">
    <div class="QRcode"><a href="#"><img alt="ShopNC方官网微信号码" src="/pc/Public/Wap/image/shopnc_weixin.jpg"></a></div>
    <p>长按上方官网微信二维码<br>
       掌握最新官方系统动态</p>
     </div>
     </div>--> 
<script>
    $(".slider").yxMobileSlider({width: 640, height: 640, during: 3000});
</script>


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