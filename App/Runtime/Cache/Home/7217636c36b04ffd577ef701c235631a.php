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


<link href="/pc/Public/Static/css/mobile-fx.css"  rel="stylesheet">
<link href="/pc/Public/Static/css/animate-fx.css"  rel="stylesheet">
<script src="/pc/Public/Static/js/jquery-1.8.0.min.js"  type="text/javascript"></script>
<div class="B2B2C-top-banner"></div>
<input type="hidden" id="display_ban" value="1">
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<!--头部、底部特效-->
<script type="text/javascript" src="js/common.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="http://www.7yunshop.com/pc/Public/Static/js/wow.min.js"></script>
<script>
	new WOW().init();
</script>
<script>
function browserRedirect() {
    var sUserAgent = navigator.userAgent.toLowerCase();
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
    var bIsAndroid = sUserAgent.match(/android/i) == "android";
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
    if ((bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) ){
        window.location.href="http://h5.eqxiu.com/s/uZcAYjm3";
    }
}
browserRedirect();
</script>

<section class="min_width">

<!---banner-->
<div class="sales_banner main"></div>   
<!---main--> 
<!--content1-->
<div class="new mainmid">
	<h1 class="about-grid wow fadeInUp" data-wow-delay="0.2s">营销新方案--微分销，轻松打造店中店</h1>
    <h2 class="about-grid wow fadeInUp" data-wow-delay="0.4s"><em>微分销是一款由商之翼完全自主研发，以总部布控，不仅发动公司的职员发展下线而且每个会员轻松开店实现店中店，帮助</em><em>企业打造"微商城+微分销"多层级一体化微信分销成交平台，基于朋友圈的传播，轻松带领成千上万的微信用户一起为您销售</em><em>商品。商城中的每一个会员都是推广员，轻松实现为您主动的推广商城，从而获得相应的分销提成。</em></h2>
    <span class="about-grid wow fadeInUp" data-wow-delay="0.6s"></span>
    
</div>
<!--content2-->
<div class="process main">
	<h2 class="about-grid wow fadeInUp" data-wow-delay="0.2s">精简清晰的分销流程</h2>
    <ul>
    	<li>
        	<span class="about-grid wow fadeInUp" data-wow-delay="0.4s">
        		<img src="http://www.7yunshop.com/pc/Public/Static/images/process1.png" alt="商城会员"/>
            	<i>商城会员，成为分销商</i>
            </span>
            <em class="font_pro about-grid wow fadeInUp" data-wow-delay="0.5s"><img src="http://www.7yunshop.com/pc/Public/Static/images/process_icon.png" alt="icon"/></em>
        </li>
        <li>
        	<span class="about-grid wow fadeInUp" data-wow-delay="0.6s">
        		<img src="http://www.7yunshop.com/pc/Public/Static/images/process2.png" alt="专属二维码"/>
                <i><em>通过扫描分销专属推广二</em><em>维码或者分享二维码页面</em><em>的链接到朋友圈中，发展下级会员</em></i>
            	
            </span>
            <em class="font_pro about-grid wow fadeInUp" data-wow-delay="0.7s"><img src="http://www.7yunshop.com/pc/Public/Static/images/process_icon.png" alt="icon"/></em>
        </li>
        <li>
        	<span class="about-grid wow fadeInUp" data-wow-delay="0.8s">
        		<img src="http://www.7yunshop.com/pc/Public/Static/images/process3.png" alt="进入商城"/>
                <i><em>朋友根据链接或者二维</em><em>码进入商城，自动成为</em><em>下级会员</em></i>
            	
            </span>
            <em class="font_pro about-grid wow fadeInUp" data-wow-delay="0.9s"><img src="http://www.7yunshop.com/pc/Public/Static/images/process_icon.png" alt="icon"/></em>
        </li>
        <li>
        	<span class="about-grid wow fadeInUp" data-wow-delay="1.0s">
        		<img src="http://www.7yunshop.com/pc/Public/Static/images/process4.png" alt="购买分销商品"/>
                <i><em>会员在商城购买分销</em><em>商品</em></i>
            	
            </span>
            <em class="font_pro about-grid wow fadeInUp" data-wow-delay="1.1s"><img src="http://www.7yunshop.com/pc/Public/Static/images/process_icon.png" alt="icon"/></em>
        </li>
        <li>
        	<span class="about-grid wow fadeInUp" data-wow-delay="1.2s">
        		<img src="http://www.7yunshop.com/pc/Public/Static/images/process5.png" alt="获得相应分成"/>
                <i>分销商获得相应的分成</i>
            </span>
           
        </li>
    </ul>
</div>
<!--content3-->
<div class="main open_shop">
	<div class="mainmid">
    	<h2 class="about-grid wow fadeInUp" data-wow-delay="0.2s">一分钟轻松开店</h2>
        <ul>
        	<li>
        		<span class="about-grid wow fadeInUp" data-wow-delay="0.4s">
        			<img src="http://www.7yunshop.com/pc/Public/Static/images/icon1.png" alt="成为分销商"/>
                	<i>成为分销商</i>
            	</span>
            	<em class="font_pro about-grid wow fadeInUp" data-wow-delay="0.5s"><img src="http://www.7yunshop.com/pc/Public/Static/images/arrows-fx.png" alt="icon"/></em>
        	</li>
        	<li>
        		<span class="about-grid wow fadeInUp" data-wow-delay="0.6s">
        			<img src="http://www.7yunshop.com/pc/Public/Static/images/icon2.png" alt="设置微店"/>
                	<i>设置微店</i>
            	</span>
            	<em class="font_pro about-grid wow fadeInUp" data-wow-delay="0.7s"><img src="http://www.7yunshop.com/pc/Public/Static/images/arrows-fx.png" alt="icon"/></em>
        	</li>
        	<li>
        		<span class="about-grid wow fadeInUp" data-wow-delay="0.8s">
        			<img src="http://www.7yunshop.com/pc/Public/Static/images/icon3.png" alt="完成开店"/>
                	<i>完成开店</i>
            	</span>
        	</li>
        </ul>
        <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=404188486&amp;site=qq&amp;menu=yes" target="_blank" class="consult about-grid wow fadeInUp" data-wow-delay="0.5s">详情咨询</a>
	</div>
</div>
<!--content4-->
<div class="main core_value">
	<div class="mainmid">
    	<h2 class="about-grid wow fadeInUp" data-wow-delay="0.2s">微分销核心价值体现</h2>
        <ul>
        	<li>
            	<img src="http://www.7yunshop.com/pc/Public/Static/images/go1.png" alt="全员分销" class="about-grid wow fadeInUp" data-wow-delay="0.4s"/>
                <img src="http://www.7yunshop.com/pc/Public/Static/images/go2.png" alt="无限分销" class="about-grid wow fadeInUp" data-wow-delay="0.6s"/>
                <img src="http://www.7yunshop.com/pc/Public/Static/images/go3.png" alt="万客合一" class="about-grid wow fadeInUp" data-wow-delay="0.8s"/>
                <img src="http://www.7yunshop.com/pc/Public/Static/images/go4.png" alt="零投入见效快" class="about-grid wow fadeInUp" data-wow-delay="1.0s"/>
                <i class="core1 about-grid wow fadeInUp" data-wow-delay="0.4s"><em>二级分销模式，每个分销商都可以发</em><em>展；分销商演绎圈子裂变理论，覆盖</em><em>更广人群；每个分销商佣金来自：销</em><em>售产品佣金，发展下线分销商</em></i>
                <i class="core2 about-grid wow fadeInUp" data-wow-delay="0.6s"><em>利用三级分销的独特机制和一键分享</em><em>全网社交平台方式，把客户、好友和</em><em>粉丝快速转化为分销商，引爆社交关</em><em>系链，形成裂变式发展微店分销商，</em>一店变多店，最快速度拥有最广泛的<em>社交分销渠道</em></i>
                <i class="core3 about-grid wow fadeInUp" data-wow-delay="0.8s"><em>基于微信分享在朋友圈等各大社交网</em><em>站，进行便捷分享，以独特的佣金机</em><em>制吸引员工、顾客、朋友等快速分销</em><em>，迅速积累百万粉丝，扩大成交规模</em></i>
                <i class="core4 about-grid wow fadeInUp" data-wow-delay="1.0s"><em>终端品牌店通过微分销系统，可实现</em><em>品牌曝光率，迅速，引爆高销售量，</em><em>人群覆盖率更高，裂变式发展海量分</em><em>销商</em></i>
            </li>
        </ul>
    </div>
</div>
<!--content5-->
<div class="page_effect">
	<div class="page_effect_mid">
    	<h2 class="about-grid wow fadeInUp" data-wow-delay="0.2s">整体精美页面效果</h2>
        <h3 class="about-grid wow fadeInUp" data-wow-delay="0.4s">采用时下最流行的扁平化设计，倾力打造时下最给力的页面效果布局，以达到效果最佳状态！</h3>
        <ul>
        	<li>
            	<img src="http://www.7yunshop.com/pc/Public/Static/images/slide4.png" alt="分销中心" class="page_effect_img1 about-grid wow fadeInUp" data-wow-delay="0.6s"/>
                <img src="http://www.7yunshop.com/pc/Public/Static/images/phone2.png" alt="分销中心" class="page_effect_img2 about-grid wow fadeInUp" data-wow-delay="0.8s"/>
                <img src="http://www.7yunshop.com/pc/Public/Static/images/screen6.png" alt="微店" class="page_effect_img3 about-grid wow fadeInUp" data-wow-delay="1.0s"/>
                <span class="about-grid wow fadeInUp" data-wow-delay="0.8s"></span>
            </li>
        </ul>
    </div>
</div>
<!--content6-->
<div class="support">
	<div class="support_mid">
    	<h2 class="about-grid wow fadeInUp" data-wow-delay="0.2s">强大的后台支持</h2>
        <h3 class="about-grid wow fadeInUp" data-wow-delay="0.4s"><em>强大的后台管理集聚了N多的强大实用功能，倾力打造成熟完善的管理系统，提高用户整体体验，让</em><em>微分销各个环节举重若轻。</em></h3>
        <img src="http://www.7yunshop.com/pc/Public/Static/images//computer.png" class="about-grid wow fadeInUp" data-wow-delay="0.6s"/>
        <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=404188486&amp;site=qq&amp;menu=yes" target="_blank" class="consult about-grid wow fadeInUp" data-wow-delay="0.8s">立即购买</a>
    </div>
</div>
</section>

</block>



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