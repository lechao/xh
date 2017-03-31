<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="robots" content="all" />
<meta name="author" content="" />
<meta name="copyright" content="" />
<meta name="keywords" content="<?php echo C('SITE_KEYWORD');?>" />
<meta name="description" content="<?php echo C('SITE_DESCRIPTION');?>" />
<link rel="shortcut icon" href="images/logo-ico.png">
<title><?php echo C('SITE_TITLE');?></title>
<link href="/pc/Public/Static/css/base.css"  rel="stylesheet">
<link href="/pc/Public/Static/css/home.css"  rel="stylesheet">
<link href="/pc/Public/Static/css/animate.css"  rel="stylesheet">
<link href="/pc/Public/Static/css/font/css/font-awesome.css"  rel="stylesheet">
<script src="/pc/Public/Static/js/html5.js" ></script>
<script src="/pc/Public/Static/js/jquery.js" ></script>
<script src="/pc/Public/Static/js/shopnc.js" ></script>
<script src="/pc/Public/Static/js/slider.js" ></script>
<script type="text/javascript">
  function browserRedirect() {
    var sUserAgent = navigator.userAgent.toLowerCase();
    var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
    var bIsAndroid = sUserAgent.match(/android/i) == "android";
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
    if (!(bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) ){
        //window.location.href='http://www.7yunshop.com/pc/wap.php';
    }else{
    	window.location.href='http://www.7yunshop.com/pc/wap.php';
    }
}
browserRedirect();
</script>
</head>
<body>
<div class="index-top">
  <div class="top-box">
    <div class="left">售前电话：<b><?php echo ($config["pre_phone"]); ?></b></div>
    <div class="right">
            <span class="mr30"><a href="<?php echo U('login');?>"  style="color:#ddddde" title="会员登录" target="_blank">会员登录</a> | <a href="<?php echo U('login-register');?>"  style="color:#ddddde" title="注册" target="_blank">注册</a></span>
          </div>
  </div>
</div>
<div class="topnav" id="topnav"> 
  <!--<div class="clear"></div>-->
  <div class="top-wrap">
    <div class="top-logo"><a href="<?php echo U('index');?>"  title="ShopNC" ><img src="<?php echo get_image_path($config['logo']);?>"  width="auto" height="100%" alt="<?php echo ($config["company_name"]); ?>"/></a></div>
    <ul class="top-nav primary">
      <li class="nav-list"><a href="<?php echo U('index');?>"  class="nav-list-link" title="首页">首页</a></li>
      <li class="nav-list nav-l" style="position:relative;"><a href="javascript:void(0);" class="nav-list-link nav-arrow" title="产品">产品<i></i></a>
        <div class="clear"></div>
        <div class="sub">
          <div class="little-up"></div>
          <div class="cont"> <a href="<?php echo U('b2b2c');?>"  title="B2B2C多用户商城系统">
            <dl style="border-bottom: dotted 1px #CCC;" >
              <dt>B2B2C多用户商城系统</dt>
              <dd>PHP语言开发，功能强大，易用性强，电商创业最佳选择。</dd>
            </dl>
			<dl style="border-bottom: dotted 1px #CCC;" >
              <dt>微商城三级分销系统</dt>
			  <dd>三级分销引爆流量。</dd>
            </dl>
            </a>
            <!-- <a href="mall-java.html"  title="Java多用户商城系统">
              <dl>
                <dt>Java多用户商城系统</dt>
                <dd>Java技术，安全、稳定、结构合理、高并发性、强扩展性、集群部署。</dd>
              </dl>
            </a>  -->
          </div>
        </div>
      </li>
      <li class="nav-list"><a href="<?php echo U('solution-list');?>"  class="nav-list-link" title="解决方案">解决方案</a>
        <div class="clear"></div>
      </li>
      <li class="nav-list"><a href="<?php echo U('case');?>"  class="nav-list-link" title="成功案例">成功案例</a></li>
      <li class="nav-list"><a href="<?php echo U('cooperation');?>"  class="nav-list-link" title="合作代理">合作伙伴</a></li>
      <li class="nav-list"><a href="<?php echo U('aboutus');?>"  class="nav-list-link" title="关于我们">关于我们</a></li>
    </ul>
  </div>
</div>
<div class="clear"></div>



<style>
.nav-tab {
	height: 31px;
}
.nav-tab ul {
	height: 31px;
}
.nav-tab ul li {
	float: left;
}
.nav-tab ul li a {
	font-size: 12px;
	font-weight: bolder;
	color: #fff;
	background: #000000;
	float: left;
	padding: 6px 8px;
	margin: 1px 0px 0 0;
	text-decoration: none;
}
.nav-tab ul li.current a {
	color: #000;
	padding: 6px 8px;
	background-color: #ffffff;
	background-image: none;
	height: 22px;
}
.hide {
	display: none !important;
}
</style>
<link href="/pc/Public/Static/css/style.css"  rel="stylesheet">
<!-- 代码开始 -->
<div id="ios" class="mobile-slideshow">
  <div class="app-info">
    <h4>宣汉7yun电商系统移动应用</h4>
    <h3>iPhone手机客户端</h3>
    <p>需要iOS7.0或更高版本。与iPhone、iPad、iPod touch兼容。此APP已针对iPhone5、iPhone6和iPhone6 Plus优化。</p>
    <!--    <a href="https://itunes.apple.com/us/app/宣汉7yun-b2b2c/id879996267?l=zh&ls=1&mt=8" class="download" target="_blank" style="padding:6px 50px 6px 40px"> <i class="fa fa-apple"></i>
    <dl>
      <dt>App Store</dt>
      <dd>下载iOS体验版</dd>
    </dl>
    </a>-->
    
    <div class="nav-tab tabbar">
      <ul>
        <li class="current"><a href="javascript:void(0)">PHP版iOS客户端</a></li>
      </ul>
    </div>
    <span class="qcode child-tab-show" style="background:none; width:226px; height:226px;border:3px solid #fff;"><img src="/pc/Public/Static/images/app/宣汉7yun_PHP_iOS.png"  width="100%" height="auto" alt="宣汉7yun电商系统移动应用,iPhone手机客户端,扫描二维码,下载iOS移动端体验版"/></span> <span class="qcode child-tab-show hide" style="background:none; width:226px; height:226px;border:3px solid #fff;"><img src="/pc/Public/Static/images/app/宣汉7yun_Java_iOS.png"  width="100%" height="auto" alt="宣汉7yun电商系统移动应用,安卓手机客户端,扫描二维码,下载JaVa版Android移动端体验版" /></span> </div>
  <div class="mobile-model"></div>
  <div class="mobile-app-thumb">
    <div id="allinone_bannerRotator_classic" style="display:none;"> 
      <!-- 图片 -->
      <ul class="allinone_bannerRotator_list">
        <li data-bottom-thumb="http://www.宣汉7yun.net//pc/Public/Static/images/previews/mobile_ios_01_s.jpg" data-text-id="#mobileBannerText1"> <img src="/pc/Public/Static/images/previews/mobile_ios_01_b.jpg"  alt="iOS移动应用,首页内容可视化编辑 即时可见更新" /> </li>
        <li data-bottom-thumb="http://www.宣汉7yun.net//pc/Public/Static/images/previews/mobile_ios_02_s.jpg" data-text-id="#mobileBannerText2"> <img src="/pc/Public/Static/images/previews/mobile_ios_02_b.jpg"  alt="iOS移动应用,分类商品列表,无需翻页屏幕下滑动态载入" /> </li>
        <li data-bottom-thumb="http://www.宣汉7yun.net//pc/Public/Static/images/previews/mobile_ios_03_s.jpg" data-text-id="#mobileBannerText3"> <img src="/pc/Public/Static/images/previews/mobile_ios_03_b.jpg"  alt="iOS移动应用,商品详情页面,合理布局页面信息" /> </li>
        <li data-bottom-thumb="http://www.宣汉7yun.net//pc/Public/Static/images/previews/mobile_ios_04_s.jpg" data-text-id="#mobileBannerText4"> <img src="/pc/Public/Static/images/previews/mobile_ios_04_b.jpg"  alt="iOS移动应用,购物车页面,多店铺订单数量可修改" /> </li>
        <li data-bottom-thumb="http://www.宣汉7yun.net//pc/Public/Static/images/previews/mobile_ios_05_s.jpg" data-text-id="#mobileBannerText5"> <img src="/pc/Public/Static/images/previews/mobile_ios_05_b.jpg"  alt="iOS移动应用,我的订单,各项金额明细清晰可查看物流" /> </li>
        <li data-bottom-thumb="http://www.宣汉7yun.net//pc/Public/Static/images/previews/mobile_ios_06_s.jpg" data-text-id="#mobileBannerText6"> <img src="/pc/Public/Static/images/previews/mobile_ios_06_b.jpg"  alt="iOS移动应用,个人中心,账户余额、订单、收藏、代金券俱全" /> </li>
        <li data-bottom-thumb="http://www.宣汉7yun.net//pc/Public/Static/images/previews/mobile_ios_07_s.jpg" data-text-id="#mobileBannerText7"> <img src="/pc/Public/Static/images/previews/mobile_ios_07_b.jpg"  alt="iOS移动应用,收藏商品,与商城同步收藏商品及店铺" /> </li>
        <li data-bottom-thumb="http://www.宣汉7yun.net//pc/Public/Static/images/previews/mobile_ios_08_s.jpg" data-text-id="#mobileBannerText8"> <img src="/pc/Public/Static/images/previews/mobile_ios_08_b.jpg"  alt="iOS移动应用,商品搜索,记录搜索历史记录方便索引" /> </li>
      </ul>
      
      <!-- 文字 -->
      <div id="mobileBannerText1" class="mobile-banner-texts">
        <div class="allinone_bannerRotator_text_line textElement11_classic" data-initial-left="-350" data-initial-top="40" data-final-left="-350" data-final-top="100" data-duration="0.3" data-fade-start="0" data-delay="0">苹果手机商城应用</div>
        <div class="allinone_bannerRotator_text_line textElement12_classic" data-initial-left="-350" data-initial-top="80" data-final-left="-350" data-final-top="160" data-duration="0.6" data-fade-start="0.5" data-delay="0.3">首页内容可视化编辑 即时可见更新</div>
      </div>
      <div id="mobileBannerText2" class="mobile-banner-texts">
        <div class="allinone_bannerRotator_text_line textElement11_classic" data-initial-left="-350" data-initial-top="40" data-final-left="-350" data-final-top="100" data-duration="0.3" data-fade-start="0" data-delay="0">分类商品列表</div>
        <div class="allinone_bannerRotator_text_line textElement12_classic" data-initial-left="-350" data-initial-top="80" data-final-left="-350" data-final-top="160" data-duration="0.6" data-fade-start="0.5" data-delay="0.3">无需翻页屏幕下滑动态载入</div>
      </div>
      <div id="mobileBannerText3" class="mobile-banner-texts">
        <div class="allinone_bannerRotator_text_line textElement11_classic" data-initial-left="-350" data-initial-top="40" data-final-left="-350" data-final-top="100" data-duration="0.3" data-fade-start="0" data-delay="0">商品详情页面</div>
        <div class="allinone_bannerRotator_text_line textElement12_classic" data-initial-left="-350" data-initial-top="80" data-final-left="-350" data-final-top="160" data-duration="0.6" data-fade-start="0.5" data-delay="0.3">合理布局页面信息</div>
      </div>
      <div id="mobileBannerText4" class="mobile-banner-texts">
        <div class="allinone_bannerRotator_text_line textElement11_classic" data-initial-left="-350" data-initial-top="40" data-final-left="-350" data-final-top="100" data-duration="0.3" data-fade-start="0" data-delay="0">购物车页面</div>
        <div class="allinone_bannerRotator_text_line textElement12_classic" data-initial-left="-350" data-initial-top="80" data-final-left="-350" data-final-top="160" data-duration="0.6" data-fade-start="0.5" data-delay="0.3">多店铺订单数量可修改</div>
      </div>
      <div id="mobileBannerText5" class="mobile-banner-texts">
        <div class="allinone_bannerRotator_text_line textElement11_classic" data-initial-left="-350" data-initial-top="40" data-final-left="-350" data-final-top="100" data-duration="0.3" data-fade-start="0" data-delay="0">我的订单</div>
        <div class="allinone_bannerRotator_text_line  textElement12_classic" data-initial-left="-350" data-initial-top="80" data-final-left="-350" data-final-top="160" data-duration="0.6" data-fade-start="0.5" data-delay="0.3">各项金额明细清晰可查看物流</div>
      </div>
      <div id="mobileBannerText6" class="mobile-banner-texts">
        <div class="allinone_bannerRotator_text_line textElement11_classic" data-initial-left="-350" data-initial-top="40" data-final-left="-350" data-final-top="100" data-duration="0.3" data-fade-start="0" data-delay="0">个人中心</div>
        <div class="allinone_bannerRotator_text_line textElement12_classic" data-initial-left="-350" data-initial-top="80" data-final-left="-350" data-final-top="160" data-duration="0.6" data-fade-start="0.5" data-delay="0.3">账户余额、订单、收藏、代金券俱全</div>
      </div>
      <div id="mobileBannerText7" class="mobile-banner-texts">
        <div class="allinone_bannerRotator_text_line textElement11_classic" data-initial-left="-350" data-initial-top="40" data-final-left="-350" data-final-top="100" data-duration="0.3" data-fade-start="0" data-delay="0">收藏商品</div>
        <div class="allinone_bannerRotator_text_line textElement12_classic" data-initial-left="-350" data-initial-top="80" data-final-left="-350" data-final-top="160" data-duration="0.6" data-fade-start="0.5" data-delay="0.3">与商城同步收藏商品及店铺</div>
      </div>
      <div id="mobileBannerText8" class="mobile-banner-texts">
        <div class="allinone_bannerRotator_text_line textElement11_classic" data-initial-left="-350" data-initial-top="40" data-final-left="-350" data-final-top="100" data-duration="0.3" data-fade-start="0" data-delay="0">商品搜索</div>
        <div class="allinone_bannerRotator_text_line textElement12_classic" data-initial-left="-350" data-initial-top="80" data-final-left="-350" data-final-top="160" data-duration="0.6" data-fade-start="0.5" data-delay="0.3">记录搜索历史记录方便索引</div>
      </div>
    </div>
  </div>
</div>
<!-- 代码结束 -->
<div class="main-layout">
  <div class="classify-nav pinned"> 
    <!--<ul class="nav-menu">
      <li><a href="http://www.宣汉7yun.net/mobile-iOS.html" class="current" title="iOS手机商城">iOS手机商城</a></li>
      <li><a href="http://www.宣汉7yun.net/mobile-android.html" title="Android手机商城">Android手机商城</a></li>
      <li><a href="http://www.宣汉7yun.net/mobile-wap.html" title="WAP版手机商城">WAP版手机商城</a></li>
      <li><a href="http://www.宣汉7yun.net/mobile-wx.html" title="微信平台管理">微信平台管理</a></li>
    </ul>
    <div class="quick-url"><a href="javascript:;" class="bounceInDown demo1 dialog">获取产品报价</a> <i></i> <a href="#guestBook">我想留言</a></div>--> 
  </div>
  <section>
    <div class="wrap2">
      <div class="title">
        <h2>iOS移动应用-移动电子商务</h2>
        <h4>移动通信与互联网之间的贯通是电子商务发展的潮流趋势</h4>
      </div>
      <div class="content">
        <div class="font16">
          <p>近年来，移动应用和互联网成为当今世界发展最快、市场潜力最大、前景最诱人的两大业务。移动互联网，就是将移动通信和互联网二者结合起来成为一体，是一个发展迅速、充满活力的领域，具有广阔的应用前景。移动互联网正在逐渐改变人们在信息时代的生活方式，移动终端用户对于移动互联网应用需求也越来越大。</p>
          <p>移动电子商务是移动互联网的主要应用之一，其主要的功能就是利用手机、平板电脑等无线终端进行的B2B、B2C或C2C的电子商务。它将因特网、移动通信技术及其它信息处理技术完美的结合，使人们可以在任何时间、任何地点进行各种商贸活动，实现随时随地、线上线下的购物与交易、在线电子支付以及各种交易活动、商务活动、金融活动和相关的综合服务活动等。</p>
          <ul class="mobile-internet">
            <li>
              <div class="icon phone"></div>
              <dl>
                <dt>上网方式</dt>
                <dd>移动改变了人们使用互联网的方式：键盘+鼠标变成了智能手机+3G/4G+触屏...</dd>
              </dl>
            </li>
            <li>
              <div class="icon search"></div>
              <dl>
                <dt>时间变多</dt>
                <dd>移动使人们更好的利用琐碎的时间：坐车、闲暇的时候都可以到商城搜索看看、买点什么...</dd>
              </dl>
            </li>
            <li>
              <div class="icon chat"></div>
              <dl>
                <dt>沟通分享</dt>
                <dd>移动使信息胡同、分享变得更便捷：随时随地能咨询商品订单等问题，还能分享给朋友们...</dd>
              </dl>
            </li>
            <li>
              <div class="icon map"></div>
              <dl>
                <dt>线下商圈</dt>
                <dd>移动能利用GPS定位完成O2O模式：本地化电商在手机上能更好体现，找到身边的商品及服务...</dd>
              </dl>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="wrap2">
      <div class="title">
        <h2>iOS移动端</h2>
        <h4>移动端与电商平台同步开发，功能完善统一、更具特色</h4>
      </div>
      <div class="content">
        <div class="font16">
          <p>iOS商城系统为iPhone平台的原生开发应用，采用苹果最新的swift语言及我们认为最合理的iOS平台MVC架构来进行开发，使得整个应用相较老旧技术开发的iOS软件在运行性能上有了很大的进步，从开发角度来说程序的结构更加合理，代码更易维护，开发更加高效。</p>
          <p>iOS商城系统在UI设计上简洁大气，采用了当前iOS平台流行的扁平化设计风格。支持iOS7.0以上的iPhone设备使用。</p>
        </div>
        <div class="function-app-list">
          <ul>
            <li><sub></sub>
              <div class="block-ico homepage"></div>
              <dl>
                <dt>首页编辑</dt>
                <dd>手机端首页、专题页面中的内容模块可以通过Web端商城管理平台进行设计编辑，可以自定义添加广告、图片、商品等多种类型，即见即所得，随时更新内容。</dd>
              </dl>
            </li>
            <li><sub></sub>
              <div class="block-ico goods"></div>
              <dl>
                <dt>分类商品</dt>
                <dd>接口读取商城分类，并可自行添加分类图标。商品列表下拉载入内容，适合移动客户操作习惯。商品详情载入手机端专用优化内容编辑，提高载入效率节省用户流量。</dd>
              </dl>
            </li>
            <li><sub></sub>
              <div class="block-ico scode"></div>
              <dl>
                <dt>扫码搜索</dt>
                <dd>根据平台商品发布时添加的商品条形码编号，可利用手机拍照功能扫描身边任意物体商品条形码，自动搜索比对商城所有符合该条码信息的商品进行购买，智能、方便、实用。</dd>
              </dl>
            </li>
            <li><sub></sub>
              <div class="block-ico store"></div>
              <dl>
                <dt>手机店铺</dt>
                <dd>店铺可设置手机端特定样式头部及切换banner广告，手机端可从商品介绍等位置点击进入所属店铺，了解更多店铺信息及店内推荐商品，并可进行店内商品搜索等。</dd>
              </dl>
            </li>
            <li><sub></sub>
              <div class="block-ico order"></div>
              <dl>
                <dt>数据同步</dt>
                <dd>登录手机端，可直接下单购买商品，同步至Web网站，同时收藏的商品店铺也将通过接口进行数据同步调用，实现电商平台访问终端不同，但数据内容相同的合理状态。</dd>
              </dl>
            </li>
            <li><sub></sub>
              <div class="block-ico logistics"></div>
              <dl>
                <dt>物流跟踪</dt>
                <dd>商家已发货的订单可通过物流跟踪信息，随时查看运输情况，第一时间获知已购商品何时送达自己手中，提高购物体验度，让购物者买的省心，等的放心。</dd>
              </dl>
            </li>
            <li><sub></sub>
              <div class="block-ico pay"></div>
              <dl>
                <dt>移动支付</dt>
                <dd>利用手机直接支付订单简单又方便，当用户需要支付移动商城购物车中的商品时，只需简单操作即可完成。平台可设置添加支付宝、微信支付等目前国内最流行的移动支付接口。</dd>
              </dl>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section id="guestBook">
    <div class="wrap">
      <div class="title">
        <h2>我想在线咨询提问题?</h2>
        <h4>让我们为您诠释该套系统的历史、发展及未来</h4>
      </div>
      <div class="content">
  <div class="guestbook-layout">
    <form class="guestbook-form" id="consult_form" name="consult_form">
      <input type="hidden" name="sign" value="mobile-ios">
      <input name="nchash" type="hidden" value="7a98f2b7" />
      <label> <strong>姓&nbsp;&nbsp;名</strong>
        <input type="text" value="" class="input-txt" name="name" id="name">
      </label>
      <label> <strong>手&nbsp;&nbsp;机</strong>
        <input type="text" value="" class="input-txt" name="phone" id="phone">
      </label>
      <label> <strong>Q&nbsp;&nbsp;Q</strong>
        <input type="text" value="" class="input-txt" name="qq" id="qq">
      </label>
      <label> <strong>验证码</strong>
        <input type="text" class="input-txt w60" name="code" id="code">
        <img src="index.php-act=seccode&op=makecode&nchash=7a98f2b7"  name="codeimage1" border="0"/><a href="JavaScript:void(0);" onclick="$('img[name='codeimage1']').attr('src', 'index.php?act=seccode&op=makecode&nchash=7a98f2b7&t=' + Math.random());" title="点击更换" class="btn">换一张</a> </label>
      <label class="w"><strong>内&nbsp;&nbsp;容</strong>
        <textarea class="input-textarea" name="content" id="content"></textarea>
      </label>
      <label class="w"><a href="javascript:;" class="button-submit" id="consult_submit">发布留言</a></label>
    </form>
    <div class="guestbook-list"> </div>
  </div>
</div>
<script src="/pc/Public/Static/js/jquery.validation.min.js" ></script> 
<script>

$(function(){

    $('#consult_form').validate({
        errorPlacement: function(error, element){
            var error_td = element.parent('label');
            error_td.append(error);
        },
        rules : {
            name : {
                required : true
            },
            phone : {
                required : true
            },
            qq : {
                required : true
            },
            content : {
                required : true
            }
        },
        messages : {
        }
    });

    $("#consult_submit").click(function(){
        if ($("#consult_form"http://www.宣汉7yun.net/).valid()){            $.post('index.php?act=index&op=save_consult', $("#consult_form").serialize(), function(date){
                date = $.parseJSON(date);
                if (date.done) {
                    $.tooltip(date.msg, 2000, true);
                	document.consult_form.reset();
                } else {
                    $.tooltip(date.msg);
                }
                $('.gt_refresh_button').each(function(){
                    $(this)[0].click();
                });
            });
        }
        return false;
    });


//    $('.guestbook-list').load('index.php-act=consult&sign=mobile-ios.htm'/*tpa=http://www.宣汉7yun.net/index.php?act=consult&sign=mobile-ios*/);
});
</script>     </div>
  </section>
</div>
<script src="/pc/Public/Static/js/jquery-ui/jquery.ui.js"  type="text/javascript"></script> 
<script src="/pc/Public/Static/js/allinone_bannerRotator.js"  type="text/javascript"></script>
<link href="/pc/Public/Static/css/allinone_bannerRotator.css"  rel="stylesheet" type="text/css">
<script>
$(function() {
	//滚动固定分类导航条
    $(".pinned").pin({
    containerSelector: ".classify-nav"
    });
	
	$('#allinone_bannerRotator_classic').allinone_bannerRotator({
		skin: 'classic',
		width: 240,
		height: 410,
		thumbsWrapperMarginBottom:8,
		defaultEffect: 'topBottomDroppingReverseStripes'
	});
});
</script>


<div class="footer">
  <div class="footer-container">
    <div class="left-side">
      <div class="site-name">
        <a href="###"><img src="/pc/Public/Static/images/foot-logo.png"  alt="<?php echo ($config["company_name"]); ?>"/></a>
        <!--<a href="javascript:;"  target="_blank"><img src="/pc/Public/Static/images/sina_logo.png"  alt="新浪微博"/></a>
        <a href="javascript:;"  target="_blank"><img src="/pc/Public/Static/images/tencent_logo.png"  alt="腾讯微博"/></a>-->
      </div>
      <div style="padding-bottom:8px; font-size:13px; font-weight:normal">高新技术企业：<?php echo ($config["company_name"]); ?>&nbsp;&nbsp;&nbsp;<!-- 证书编号：GR201512000273 --></div>
     <div class="site-intro">备案许可证号：<?php echo ($config["beian"]); ?></div>
     <div class="site-intro">版权所有 <?php echo ($config["copyright"]); ?></div>
    </div>
    <div class="right-side">
      <dl>
        <dt>售前咨询热线</dt>
        <dd><i class="fa fa-phone"></i><?php echo ($config["pre_phone"]); ?></dd>
        <dt>售后服务电话</dt>
        <dd><i class="fa fa-phone"></i><?php echo ($config["after_phone"]); ?></dd>
        <dd class="worktime"><?php echo ($config["worktime"]); ?></dd>
      </dl>
      <div class="QRcode"><img src="<?php echo get_image_path($config['qrcode']);?>"  alt=<?php echo ($config["company_name"]); ?>官网微信号码"/>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加客服微信<br/>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;随时随地咨询</p>
      </div>
    </div>
  </div>
</div>


<div class="main-im">
  <div id="open_im" class="open-im">&nbsp;</div>
  <div class="im_main" id="im_main">
    <div id="close_im" class="close-im">
        <a href="javascript:void(0);" title="点击关闭">&nbsp;</a>
    </div>
    <a href="javascript:;"  target="_blank" class="im-qq qq-a" title="B2B2C销售咨询"> <span>QQ客服咨询</span>
    <div class="qq-container"></div>
    <div class="qq-hover-c"><img class="img-qq" src="/pc/Public/Static/images/im/qq.png" ></div>
    </a>

    <div class="im-tel">
      <div class="b2b">
        <div>销售咨询</div>
        <?php if(is_array($pre_qq)): foreach($pre_qq as $key=>$vo): ?><div class="tel-num">
          <a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($vo); ?>&site=qq&menu=yes" >
                <img border="0" src="/pc/Public/Static/images/im/qq_ico.png"  alt=""/>
          </a>
        </div><?php endforeach; endif; ?>
      </div>
  
     <div class="solution">
        <div class="tel-num" style="margin:16px 0px 6px"><a target="_blank" href="jhttp://wpa.qq.com/msgrd?v=3&uin=2850515883&site=qq&menu=yes" >
          <img border="0" src="/pc/Public/Static/images/im/qq_ico.png"  alt="解决方案"/></a>
        </div>
      </div>

      <div class="b2b">
      <div>售后服务</div>
            <?php if(is_array($aft_qq)): foreach($aft_qq as $key=>$val): ?><div class="tel-num">
                <a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($val); ?>&site=qq&menu=yes" >
                      <img border="0" src="/pc/Public/Static/images/im/qq_ico.png"  alt=""/>
                </a>
              </div><?php endforeach; endif; ?>
      </div>
    </div>
    <div class="im-footer" style="position:relative">
      <div class="weixing-container">
        <div class="weixing-show">
          <div class="weixing-txt">微信扫一扫<br>
            随时随地咨询</div>
          <img class="weixing-ma" src="<?php echo get_image_path($config['qrcode']);?>" >
          <div class="weixing-sanjiao"></div>
          <div class="weixing-sanjiao-big"></div>
        </div>
      </div>
      <div class="go-top"><a href="javascript:;" title="返回顶部"></a> </div>
      <div style="clear:both"></div>
    </div>
  </div>
</div>



<div id="DEMOBox" class="dialog dialog0">
  <div class="dialog-faq">
    <p class="welcome">尊敬的用户，欢迎您光临ShopNC官方网站，很高兴您对我们的产品有兴趣。<br/>
      如需体验商城具体功能，请联系客服人员<a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'"  target="_blank" title="客服咨询1"><img border="0" src="/pc/Public/Static/images/im/qq_ico.png" /></a><a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'"  target="_blank" title="客服咨询2"><img border="0" src="/pc/Public/Static/images/im/qq_ico.png" /></a>提供相关测试地址及账号。</p>
    <p>你也可以直接拨打我们的免费热线：<a href="tel:4008801509"><i class="fa fa-phone"></i>400-880-1509</a>立即询问。</p>
  </div>
  <div class="demosite">
    <ul>
      <li class="b2b2c">
        <div class="pic"></div>
        <h3>B2B2C电商系统</h3>
        <a href="javascript:if(confirm('http://b2b2c.shopnctest.com/dema'))window.location='http://b2b2c.shopnctest.com/dema'"  class="btn" target="_blank">演示体验</a>
        <p><a href="javascript:if(confirm('http://doc.shopnc.net/b2b2c'))window.location='http://doc.shopnc.net/b2b2c'"  target="_blank">在线帮助</a></p>
      </li>
      <li class="c2c">
        <div class="pic"></div>
        <h3>B2B2C多用户商城</h3>
        <a href="javascript:if(confirm('http://pan.baidu.com/s/1gd1i1Dx'))window.location='http://pan.baidu.com/s/1gd1i1Dx'"  class="btn" target="_blank">下载试用</a>
        <p><span>在线帮助</span> 
        <a href="javascript:if(confirm('http://doc.shopnc.net/shopnc2013/shop/'))window.location='http://doc.shopnc.net/shopnc2013/shop/'"  target="_blank">商城</a> | 
        <a href="javascript:if(confirm('http://doc.shopnc.net/shopnc2013/circle/'))window.location='http://doc.shopnc.net/shopnc2013/circle/'"  target="_blank">圈子</a> | 
        <a href="javascript:if(confirm('http://doc.shopnc.net/shopnc2013/microshop/'))window.location='http://doc.shopnc.net/shopnc2013/microshop/'"  target="_blank">微商城</a> | 
        <a href="javascript:if(confirm('http://doc.shopnc.net/shopnc2013/cms/'))window.location='http://doc.shopnc.net/shopnc2013/cms/'"  target="_blank">CMS</a></p>
      </li>
    </ul>
  </div>
</div>

<div id="HBox" class="dialog dialog1">
  <div class="dialog-faq">
    <p class="welcome">尊敬的用户，欢迎您光临ShopNC官方网站，很高兴您对我们的产品有兴趣。<br/>
      还请您填写以下信息，我们会及时给您提供详细资料和解答。</p>
    <p>你也可以直接拨打我们的免费热线：<a href="tel:4008801509"><i class="fa fa-phone"></i>400-880-1509</a>客服<a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'"  target="_blank" title="客服咨询1"><img border="0" src="/pc/Public/Static/images/im/qq_ico.png" /></a><a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'"  target="_blank" title="客服咨询2"><img border="0" src="/pc/Public/Static/images/im/qq_ico.png" /></a>。</p>
  </div>
  <form action="" method="post" onsubmit="return false;" id="apply_form">
    <input name="nchash" type="hidden" value="22ba1c70" />
    <div class="dialog-form">
      <dl>
        <dt>联系人<font color="#ff0000">*</font></dt>
        <dd>
          <input type="text" name="name" id="apply_name" value="" class="input-txt name" />
        </dd>
      </dl>
      <dl>
        <dt>联系QQ<font color="#ff0000">*</font></dt>
        <dd>
          <input type="text" name="qq" id="apply_qq" value="" class="input-txt qq" />
        </dd>
      </dl>
      <dl>
        <dt>常用邮箱<font color="#ff0000">*</font></dt>
        <dd>
          <input type="text" name="email" id="apply_email" value="" class="input-txt email" />
        </dd>
      </dl>
      <dl>
        <dt>手机号码<font color="#ff0000">*</font></dt>
        <dd>
          <input type="text" name="phone" id="apply_phone" value="" class="input-txt phone" />
        </dd>
      </dl>
      <dl>
        <dt>验证码<font color="#ff0000">*</font></dt>
        <dd>
          <input type="text" name="code" value="" id="apply_code" class="input-txt code w60" />
          <img src="" name="applyimage" border="0"/> <a href="JavaScript:void(0);" id="for-a" onclick="$('img[name=\'applyimage\']').attr('src', 'index.php?act=seccode&op=makecode&nchash=22ba1c70&t=' + Math.random());">换个</a> </dd>
      </dl>
      <input type="submit" value="确认提交" class="submitBtn" />
    </div>
  </form>
</div>
<script src="/pc/Public/Static/js/jquery.hDialog.js" ></script> 
<script>
$(function(){
  $('.demo0').hDialog({title: 'ShopNC—产品在线演示地址 ', box:'#DEMOBox', width: 640, height: 500, boxBg: '#FAFAFA', modalBg: 'rgba(255,255,255,0.5)'});
  $('.demo1').hDialog({title: 'ShopNC—产品资料自助申请通道 ', width: 640, height: 500, boxBg: '#FAFAFA', modalBg: 'rgba(255,255,255,0.5)', resetForm:false, beforeShow:function(){
    $('img[name="applyimage"]').attr('src', 'index.php-act=seccode&op=makecode&nchash=22ba1c70.htm');
  }});
    
  //提交并验证表单
  var $el = $('.dialog1');
  $('.submitBtn').click(function() {
    var EmailReg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/; //邮件正则
    var PhoneReg = /^(1)[0-9]{10}$/ ; //手机正则
    var $name = $('#apply_name');
    var $qq = $('#apply_qq');
    var $email = $('#apply_email'); 
    var $phone = $('#apply_phone');
    if($name.val() == ''){
      $.tooltip('姓名还没填呢...'); $name.focus();
    }else if($qq.val() == ''){
      $.tooltip('QQ还没填呢...'); $qq.focus();
    }else if($phone.val() == ''){
      $.tooltip('手机还没填呢...'); $phone.focus();
    }else if(!PhoneReg.test($phone.val())){
      $.tooltip('手机格式错咯...'); $phone.focus();
    }else if($email.val() == ''){
      $.tooltip('邮箱还没填呢...'); $email.focus();
    }else if(!EmailReg.test($email.val())){
      $.tooltip('邮箱格式错咯...'); $email.focus();
    }else{

        $.post('', $("#apply_form").serialize(), function(date){
            $('#for-a').click();
            date = $.parseJSON(date);
            if (date.done) {
          $.tooltip('提交成功，2秒后自动关闭',2000,true);
          setTimeout(function(){
                    $('.gt_refresh_button').each(function(){
                        $(this)[0].click();
                    });
            $el.hDialog('close',{box:'#HBox'}); 
          },2000);
            } else {
                document.consult_form.reset();
                $.tooltip(date.msg);
            }
        });
    }
  });
});
</script> 
<script type="text/javascript">
    $(function(){
        var timer=null;
        var oLi = $('.top-wrap').find('li');
        oLi.eq(1).mouseout(function() {
            timer=setTimeout(function(){
                $('.sub').stop(true, true).slideUp(400);
                $('.nav-arrow i').css('transform','rotate(0)');
            },400)
        }).mouseover(function() {
            clearTimeout(timer)
            $('.sub').stop(true, true).slideDown(400);
            $('.nav-arrow i').css('transform','rotate(180deg)');
        });
    }());
</script> 
<script type="text/javascript">
$(document).ready( function() {
    var $topnav = $("#topnav") ; 
    $(window).scroll(function() {
      var scrollTop = $(window).scrollTop() , stickyTop = 200 
      if (scrollTop > stickyTop) { 
            $topnav.addClass('fxd');
          } else {
            $topnav.removeClass('fxd'); 
          }   
    });
    $(window).trigger("scroll");
      
});

</script>
</body>
</html>
</body>
</html>