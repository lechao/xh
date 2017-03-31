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

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>ShopNC</title>
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
<meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
<meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta content="no-cache" http-equiv="pragma">
<meta content="0" http-equiv="expires">
<meta content="telephone=no, address=no" name="format-detection">
<meta name="HandheldFriendly" content="true">
<meta http-equiv="X-Frame-Options" content="SAMEORIGIN">
<!-- apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#ff0084">
<meta name="apple-mobile-web-app-title" content="ShopNC">
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
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<!-- Mobile Devices -->
<meta name="msapplication-TileColor" content="#00AEEB"/>
<!-- Windows 8 磁贴颜色 -->
<meta name="msapplication-TileImage" content="/Public/images/logo_ico.png"/>
<!-- Windows 8 磁贴图标 -->
<!-- 启用360浏览器的极速模式(webkit) -->
<meta name="renderer" content="webkit">
<meta name="author" content="shopnc">
<meta name="robots" content="all"/>
<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="images/favicon.png">
<!-- Mobile Devices -->
<link rel="stylesheet" type="text/css" href="css/live.css" tppabs="http://www.shopnc.net/wap/css/live.css"/>
<link rel="stylesheet" type="text/css" href="css/animations.css" tppabs="http://www.shopnc.net/wap/css/animations.css"/>
<link rel="stylesheet" type="text/css" href="css/load_live.css" tppabs="http://www.shopnc.net/wap/css/load_live.css"/>
</head>
<body>
<div id="loading">
	<div class="spinner">
		<div class="double-bounce1">
		</div>
		<div class="double-bounce2">
		</div>
	</div>
</div>
<div id="content" style="display:none">
	<div class="page page-1-1 page-current">
    	<div class="wrap">
        	<img class="img_0 pt-page-moveCircle" src="images/zhibo-box-03.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-03.png"/>
            <div class="text">
            	<h1 class="pt-page-moveFromLeft">商城视频模块</h1>
                <h3 class="pt-page-moveFromRight">平台发布点播视频，会员可观看商品详细购买</h3>
            </div>
			<img class="img_1 pt-page-moveFromLeft" src="images/zhibo-box-03.jpg" tppabs="http://www.shopnc.net/wap/images/zhibo-box-03.jpg"/>
            <img class="img_2 pt-page-moveFromRight" src="images/zhibo-box-04.jpg" tppabs="http://www.shopnc.net/wap/images/zhibo-box-04.jpg"/>
            <img class="img_3 pt-page-moveFromLeft" src="images/zhibo-box-05.jpg" tppabs="http://www.shopnc.net/wap/images/zhibo-box-05.jpg"/>
            <img class="img_4 pt-page-moveFromRight" src="images/zhibo-box-06.jpg" tppabs="http://www.shopnc.net/wap/images/zhibo-box-06.jpg"/>
			<img class="img_6 pt-page-moveIconUp" src="images/icon_up.png" tppabs="http://www.shopnc.net/wap/images/icon_up.png"/>
		</div>
	</div>
	<div class="page page-2-1 hide">
		<div class="wrap">
			<img class="img_1 hide pt-page-moveFromBottom" src="images/zhibo-box-01.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-01.png"/>
			<img class="img_2 hide pt-page-moveCircle" src="images/zhibo-box-02.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-02.png"/>
            <div>
            <img class="link-i hide pt-page-moveFromLeft" src="images/small-icon_03.png" tppabs="http://www.shopnc.net/wap/images/small-icon_03.png"/>
            <img class="link-a hide pt-page-moveFromRight" src="images/small-icon_04.png" tppabs="http://www.shopnc.net/wap/images/small-icon_04.png"/>
            </div>
			<img class="img_3 hide pt-page-moveIconUp" src="images/icon_up.png" tppabs="http://www.shopnc.net/wap/images/icon_up.png"/>
		</div>
	</div>
	<div class="page page-3-1 hide">
		<div class="wrap">
			<img class="img_2 hide pt-page-moveCircle" src="images/zhibo-box-04.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-04.png"/>
            <h1 class="pt-page-moveFromLeft">新品发布·直播购物</h1>
            <div>
            <img class="link-i hide pt-page-moveFromLeft" src="images/small-icon_01.png" tppabs="http://www.shopnc.net/wap/images/small-icon_01.png"/>
            <img class="link-a hide pt-page-moveFromRight" src="images/small-icon_02.png" tppabs="http://www.shopnc.net/wap/images/small-icon_02.png"/>
            </div>
			<img class="img_6 hide pt-page-moveIconUp" src="images/icon_up.png" tppabs="http://www.shopnc.net/wap/images/icon_up.png"/>
		</div>
	</div>
	<div class="page page-4-1 hide">
		<div class="wrap">
        	<img class="img_3 hide pt-page-moveCircle" src="images/zhibo-box-08.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-08.png"/>
        	<img class="img_1 hide pt-page-moveCircle" src="images/zhibo-box-06.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-06.png"/>
            <img class="img_2 hide pt-page-moveFromBottom" src="images/zhibo-box-05.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-05.png"/>
			<img class="img_6 hide pt-page-moveIconUp" src="images/icon_up.png" tppabs="http://www.shopnc.net/wap/images/icon_up.png"/>
		</div>
	</div>
    <div class="page page-5-1 hide">
		<div class="wrap">
        	<img class="img_4 hide pt-page-moveFromRight" src="images/zhibo-box-12.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-12.png"/>
            <img class="img_5 hide pt-page-moveFromLeft" src="images/zhibo-box-13.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-13.png"/>
        	<img class="img_3 hide pt-page-moveCircle" src="images/zhibo-box-09.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-09.png"/>
        	<img class="img_1 hide pt-page-moveCircle" src="images/zhibo-box-11.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-11.png"/>
            <img class="img_2 hide pt-page-moveFromBottom" src="images/zhibo-box-10.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-10.png"/>
			<img class="img_6 hide pt-page-moveIconUp" src="images/icon_up.png" tppabs="http://www.shopnc.net/wap/images/icon_up.png"/>
		</div>
	</div>
    <div class="page page-6-1 hide">
		<div class="wrap">
			<img class="img_2 hide pt-page-moveCircle" src="images/zhibo-box-14.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-14.png"/>
            <h1 class="pt-page-moveFromLeft">视频播放·商品详情</h1>
            <div>
            <img class="link-i hide pt-page-moveFromLeft" src="images/small-icon_05.png" tppabs="http://www.shopnc.net/wap/images/small-icon_05.png"/>
            <img class="link-a hide pt-page-moveFromRight" src="images/small-icon_06.png" tppabs="http://www.shopnc.net/wap/images/small-icon_06.png"/>
            </div>
			<img class="img_6 hide pt-page-moveIconUp" src="images/icon_up.png" tppabs="http://www.shopnc.net/wap/images/icon_up.png"/>
		</div>
	</div>
    <div class="page page-7-1 hide">
		<div class="wrap">
			<div class="text">
            	<h1 class="pt-page-moveFromLeft">商城视频模块</h1>
                <h3 class="pt-page-moveFromRight">平台发布点播视频，会员可观看商品详细购买</h3>
            </div>
            <img class="img_1 hide pt-page-moveFromLeft" src="images/zhibo-box-15.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-15.png"/>
            <img class="img_2 hide pt-page-moveFromRight" src="images/zhibo-box-16.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-16.png"/>
            <img class="img_3 hide pt-page-moveFromLeft" src="images/zhibo-box-17.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-17.png"/>
            <img class="img_4 hide pt-page-moveFromRight" src="images/zhibo-box-18.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-18.png"/>
			<img class="img_6 hide pt-page-moveIconUp" src="images/icon_up.png" tppabs="http://www.shopnc.net/wap/images/icon_up.png"/>
		</div>
	</div>
    <div class="page page-8-1 hide">
		<div class="wrap">
        	<div class="text">
            	<h1 class="pt-page-moveFromLeft">商城视频模块</h1>
                <h3 class="pt-page-moveFromRight">平台发布点播视频，会员可观看商品详细购买</h3>
            </div>
        	<img class="img_1 hide pt-page-moveFromTop" src="images/zhibo-box-19.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-19.png"/>
            <img class="img_2 hide pt-page-moveFromTop" src="images/zhibo-box-20.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-20.png"/>
            <img class="img_3 hide pt-page-moveFromBottom" src="images/zhibo-box-21.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-21.png"/>
            <img class="img_4 hide pt-page-moveFromBottom" src="images/zhibo-box-22.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-22.png"/>
			<img class="img_6 hide pt-page-moveIconUp" src="images/icon_up.png" tppabs="http://www.shopnc.net/wap/images/icon_up.png"/>
		</div>
	</div>
	<div class="page page-9-1 hide">
		<div class="wrap">
			<img class="img_1 hide pt-page-moveCircle" src="images/icon.png" tppabs="http://www.shopnc.net/wap/images/icon.png"/>
            <div>
            <a href="javascript:if(confirm('https://itunes.apple.com/us/app/shopnc-b2b2c/id879996267?l=zh&ls=1&mt=8  \n\n���ļ��޷��� Teleport Ultra ����, ��Ϊ ����һ�����·���ⲿ������Ϊ������ʼ��ַ�ĵ�ַ��  \n\n�����ڷ������ϴ���?'))window.location='https://itunes.apple.com/us/app/shopnc-b2b2c/id879996267?l=zh&ls=1&mt=8'" tppabs="https://itunes.apple.com/us/app/shopnc-b2b2c/id879996267?l=zh&ls=1&mt=8" class="inline-block" target="_blank"><img class="link-i hide pt-page-moveFromLeft" src="images/app-store.png" tppabs="http://www.shopnc.net/wap/images/app-store.png"/></a>
            <a href="javascript:if(confirm('http://www.shopnc.net/download/app/AndroidShopNCMoblie1.apk  \n\n���ļ��޷��� Teleport Ultra ����, ��Ϊ ����һ�����·���ⲿ������Ϊ������ʼ��ַ�ĵ�ַ��  \n\n�����ڷ������ϴ���?'))window.location='http://www.shopnc.net/download/app/AndroidShopNCMoblie1.apk'" tppabs="http://www.shopnc.net/download/app/AndroidShopNCMoblie1.apk" class="inline-block" target="_blank"><img class="link-a hide pt-page-moveFromRight" src="images/google-play.png" tppabs="http://www.shopnc.net/wap/images/google-play.png"/></a>
            </div>
			<img class="img_6 hide pt-page-moveIconUp" src="images/icon_up.png" tppabs="http://www.shopnc.net/wap/images/icon_up.png"/>
		</div>
	</div>
	<div class="page page-10-1 hide">
		<div class="wrap">
			<img class="img_1 hide pt-page-moveCircle" src="images/shopnc_weixin.jpg" tppabs="http://www.shopnc.net/wap/images/shopnc_weixin.jpg"/>
            <h1>关注ShopNC官方微信号</h1>
			<a href="apply.html" tppabs="http://www.shopnc.net/wap/apply.html" target="_blank" class="inline-block"><img class="img_3 hide pt-page-moveFromBottom" src="images/zhibo-box-07.png" tppabs="http://www.shopnc.net/wap/images/zhibo-box-07.png"/></a>
		</div>
	</div>
</div>
<script src="js/zepto.min.js" tppabs="http://www.shopnc.net/wap/js/zepto.min.js"></script>
<script src="js/touch.js" tppabs="http://www.shopnc.net/wap/js/touch.js"></script>
<script src="js/live.js" tppabs="http://www.shopnc.net/wap/js/live.js"></script>
<script type="text/javascript">
		document.onreadystatechange = loading; 
		function loading(){
			if(document.readyState == "complete")
			{ 
				$("#loading").hide();
				$("#content").show();
				playbksound();
			}
		}
</script>
</body>
</html>

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