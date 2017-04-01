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
<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="/xh/Public/Static/font-awesome-4.7.0/css/font-awesome.css"  rel="stylesheet">
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
       <li class="item_menu"><a class="item_link" href="<?php echo U('crm');?>">CRM</a></li>
  
       <li class="item_menu"><a class="item_link" href="<?php echo U('sales');?>">销售模块</a></li>
       <li class="item_menu"><a class="item_link" href="<?php echo U('APP');?>">仓库模块</a></li>
       <li class="item_menu"><a class="item_link" href="<?php echo U('APP');?>">销售模块</a></li>
       <li class="item_menu"><a class="item_link" href="<?php echo U('APP');?>">采购模块</a></li>
       <li class="item_menu"><a class="item_link" href="<?php echo U('APP');?>">财务模块</a></li>
       <li class="item_menu"><a class="item_link" href="<?php echo U('solutions');?>">行业案例</a></li>
       <li class="item_menu"><a class="item_link" href="<?php echo U('about');?>">关于我们</a></li>
   </ul>
</nav>


<div class="banner">
  <div style="width: 640px; height: 640px; position: relative; overflow: hidden; margin: 0px auto;" class="slider">
    <ul style="position: absolute; left: -2560px; width: 3840px;">
      <?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="background:url(/<?php echo get_image_path($vo['picture']);?>) bottom no-repeat; position:relative;"></li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <div style="min-height: 0px; position: absolute; bottom: 0px; width: 640px; height: 64px; z-index: 2;"class="focus">
    <div>
    <span class="" style="display: inline-block; cursor: pointer;"></span>
    <span class="" style="display: inline-block; cursor: pointer;"></span>
    <span class="" style="display: inline-block; cursor: pointer;"></span>
    <span class="" style="display: inline-block; cursor: pointer;"></span>
    <span class="current" style="display: inline-block; cursor: pointer;"></span>
    <span class="" style="display: inline-block; cursor: pointer;"></span>
    </div>
    </div>
  </div>
</div>
<script>
    $(".slider").yxMobileSlider({width: 640, height: 640, during: 5000});
</script>
<div class="product">
  <ul>
    <li class="B2B2C">
      <p>B2B2C多用户商城系统</p>
      流程功能及模块最完善的电商平台系统 <span>商城、资讯、圈子、微商城、即时通讯</span> <a href="B2B2C.html" >进一步了解 &gt;</a> </li>
    <li class="B2B">
      <p>多用户商城系统</p>
      满足于B2B&B2B2C的电商销售系统 <span>构筑生态级多用户商城平台</span> <a href="Bizpower.html" >进一步了解 &gt;</a> </li>
    <li class="O2O">
      <p>移动端商城</p>
      开发Android及iOS APP应用 <span>与PC端完全打通 随时随地 自由购物</span> <a href="APP.html" >进一步了解 &gt;</a> </li>
    <li class="C2C">
      <p>行业解决方案</p>
      让企业拥有互联网力量 <span>帮助企业构筑围绕用户的营销互动能力</span> <a href="solutions.html" >进一步了解 &gt;</a> </li>
  </ul>
</div>





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