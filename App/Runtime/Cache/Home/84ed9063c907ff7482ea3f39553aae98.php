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



<script type="text/javascript">
    $(function(){
        if ($('#display_ban').val()) {
            $('#banner').hide();
        } else {
            $('#banner').flexslider({animation:"slide",slideshowSpeed:4000});
        }

    });
</script>
<link href="/pc/Public/Static/css/style.css" tppabs="/pc/Public/Static/css/style.css" rel="stylesheet">

<div class="banner-layout banner-circle" style="background:#8AA3CD">
  <div class="banner">
    <h1>&nbsp;</h1>
    <h3>ShopNC O2O电商系统</h3>
  </div>
</div>
<div id="o2o" class="main-layout">
  <div class="classify-nav pinned">
    <ul id="nav" class="page-nav">
      <li><a href="#intro">产品概述</a></li>
      <li><a href="#ui">系统插件</a></li>
      <li><a href="#options">热点功能</a></li>
      <li><a href="#guestBook">客户留言</a></li>
    </ul>
  </div>
  <section>
    <div class="page-location" id="intro">&nbsp;</div>
    <div class="wrap">
      <div class="title" style="padding-bottom:10px">
        <h2>ShopNC O2O电商系统是什么?</h2>
        <h4>让我们为您诠释该套系统的历史、发展及未来</h4>
      </div>
      <div class="wrap" style="padding:0">
<div class="runtime">
        <dl style="width: 500px; padding-right: 50px; border-right: dotted 1px #E7E7E7;">
          <dt style="text-align:justify; padding-left:65px">ShopNC O2O电商系统，以城市为基础，商圈（社区）为单位，以客户的周边生活服务为基础业务，通过互联网、移动互联网等技术手段整合海量互联网商户、海量本地周边生活服务商户，以O2O电商平台为服务支点，为会员提供全方位服务，对传统门店进行升级，使其不仅拥有传统门店的客流，还拥有强大的网络宣传推广能力。</dt>
        </dl>
        <div class="down" style="padding-left:80px;">
        
       <a href=""  target="_blank" style="background:#3B9DE6; margin-top:0">
            <h3><i class="fa fa-search"></i>&nbsp;查看测试网址</h3>
            <h5>即刻体验ShopNC O2O电商系统</h5>
            </a>
      </div>
    </div>
    </div>
    </div>
  </section>
  <section id="ui">
    <div class="page-location" id="intro">&nbsp;</div>
    <div class="wrap">
      <div class="title">
        <h2>系统插件—外卖系统</h2>
      </div>
      <div class="content">
        <div class="font16">ShopNC外卖系统验ShopNC O2O电商系统的一个系统插件，系统通过PC端网站、独立手机APP、微信公共账号来进行服务的网络外卖预订平台。成熟的外卖预订系统，节约您的开发成本、缩短业务上线时间。助您迅速开启O2O行业服务，快速抢占市场份额！ShopNC外卖插件主要提供外卖和预订两大功能，通过外卖送上门和预订到店消费来实现。通过ShopNC外卖预订系统可以方便的基于地址位置搜索到附近的盒饭、水果、饮料、蛋糕等外卖信息。消费者可以随时随地自助下单、付款、留下送货地址、电话、送货时间并添加备注，在家等着商品送上门，完成一次足不出户的完美体验。</div>
            <div class="pic"></div>
            <h4>实物类商品</h4>
            <p>来自互联网的商品，门店自备的实物类商品。</p>
          </li>
          <li class="cf10">
            <div class="pic"></div>
            <h4>虚拟类商品</h4>
        <img class="block middle" src="images/o2o-02.jpg"  alt="验ShopNC O2O电商系统插件—外卖系统" style="width:90%"/>
    </div>
    </div>
  </section>
  <section>
    <div class="page-location" id="options">&nbsp;</div>
    <div class="wrap">
      <div class="title">
        <h2>ShopNC O2O电商系统有哪些功能？</h2>
        <h4>从商城功能模块读解其用途与特征，以及功能亮点。</h4>
      </div>
      <div id="c2c">
      <style>#c2c .function-list ul li{ width:196px;}</style>
      <div class="function-list">
        <ul>
          <li class="cf01">
            <div class="pic"></div>
            <h4>分城市管理</h4>
            <p>按照城市分别设置站点，根据会员登录的IP跳转的相应的城市站点（手机APP根据LBS定位）。</p>
          </li>
          <li class="cf02">
            <div class="pic"></div>
            <h4>商圈管理</h4>
            <p>可以把城市按照不同的城区、商圈、社区来进行划分，方便会员检索。</p>
          </li>
          <li class="cf03">
            <div class="pic"></div>
            <h4>自营体验店</h4>
            <p>自营店铺可设置体验店，进行试吃、试穿、试用、试玩等不同体验活动。</p>
          </li>
          <li class="cf04">
            <div class="pic"></div>
            <h4>社区自提点</h4>
            <p>可在社区设立物流自提点，会员可选择配送货物至自提点，从根本上解决最后一公里。</p>
          </li>
          <li class="cf06">
            <div class="pic"></div>
            <h4>上门配送</h4>
            <p>商家可以根据自己所设置的配送区域，进行上门配送，提高配送效率。</p>
          </li>
          <li class="cf07">
            <div class="pic"></div>
            <h4>门店管理</h4>
            <p>商家可设置多个门店，会员可在各门店选择实物商品自提，服务商品服务。</p>
          </li>
          <li class="cf08">
            <div class="pic"></div>
            <h4>商家入驻</h4>
            <p>方便快捷的商家入驻体系，商家从申请入驻至上线运营仅仅只需3分钟。</p>
          </li>
          <li class="cf09">
            <p>餐饮类、门票、电影票等通过手机兑换码的形式来进行商品的使用。</p>
          </li>
          <li class="cf11">
            <div class="pic"></div>
            <h4>服务类商品</h4>
            <p>洗衣、家政服务、电器维修、租车、旅游等服务性质商品的购买及预订。</p>
          </li>
          <li class="cf12">
            <div class="pic"></div>
            <h4>缴费类商品</h4>
            <p>水电煤气费、宽带、手机充值等系统拥有完善的API接口可与第三方收费系统进行完美对接。</p>
          </li>
          <li class="cf13">
            <div class="pic"></div>
            <h4>周边服务商</h4>
            <p>会员通过定位系统快速查找周边的服务提供商。查找周边的美食、电影、酒店、加油站、超市…</p>
          </li>
        </ul>
      </div>
      </div>
    </div>
  </section>


<div id="im" class="main-layout" style="border-top: solid 1px #E7E7E7;">
<section class="even" style="background:#fff">
    <div class="page-location" id="guestBook">&nbsp;</div>
    <div class="wrap">
      <div class="title">
        <h2>我想在线咨询提问题?</h2>
        <h4>让我们为您诠释该套系统的历史、发展及未来</h4>
      </div>
      <div class="content">
        <div class="guestbook-layout">
          <form class="guestbook-form" id="consult_form" name="consult_form">
            <input type="hidden" name="sign" value="solution-list">
            <input name="nchash" type="hidden" value="36a9b6d6" />
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
              <img src="<?php echo U('verify');?>"  name="codeimage1" border="0" id="codeimage"/><a href="javascript:freshVerify();" title="点击更换" class="btn">换一张</a> </label>
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
        if ($("#consult_form"http://www.shopnc.net/).valid()){            $.post('index.php?act=index&op=save_consult', $("#consult_form").serialize(), function(date){
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


});
</script>     </div>
  </section>
</div>

<script src="js/jquery.carousel.js" ></script> 
<script src="js/lightbox.min.js" ></script> 
<script src="js/jquery.tabslet.js" ></script> 
<script>
$(function(){
	//页内导航条位置
	$('#nav').onePageNav({
		filter: ':not(.exception)'
	});	
	//滚动固定分类导航条
    $(".pinned").pin({
    containerSelector: ".main-layout"
    });
	//模板类型切换
	$('.ui-tabs').tabslet({
		animation: true
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