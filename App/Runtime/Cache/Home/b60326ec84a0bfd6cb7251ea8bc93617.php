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
<link href="/xh/Public/Static/css/base.css"  rel="stylesheet">
<link href="/xh/Public/Static/css/home.css"  rel="stylesheet">
<link href="/xh/Public/Static/css/animate.css"  rel="stylesheet">
<!--<link href="/xh/Public/Static/css/font/css/font-awesome.css"  rel="stylesheet">-->
<link href="/xh/Public/Static/font-awesome-4.7.0/css/font-awesome.css"  rel="stylesheet">
<script src="/xh/Public/Static/js/html5.js" ></script>
<script src="/xh/Public/Static/js/jquery.js" ></script>
<script src="/xh/Public/Static/js/shopnc.js" ></script>
<script src="/xh/Public/Static/js/slider.js" ></script>
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
    	window.location.href='http://www.youbaninfo.com/wap.php';
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
            <!--<span class="mr30"><a href="<?php echo U('login');?>"  style="color:#ddddde" title="会员登录" target="_blank">会员登录</a> | <a href="<?php echo U('login-register');?>"  style="color:#ddddde" title="注册" target="_blank">注册</a></span>-->
            <span class="mr30"><a href="http://yanshi.youbaninfo.com/web/login"  style="color:#ddddde" title="我要试用" target="_blank">我要试用</a></span>
          </div>
  </div>
</div>
<div class="topnav" id="topnav"> 
  <!--<div class="clear"></div>-->
  <div class="top-wrap">
    <div class="top-logo"><a href="<?php echo U('index');?>"  title="ShopNC" ><img src="<?php echo get_image_path($config['logo']);?>"  width="auto" height="100%" alt="<?php echo ($config["company_name"]); ?>"/></a></div>
    <ul class="top-nav primary">
      <li class="nav-list"><a href="<?php echo U('index');?>"  class="nav-list-link" title="首页">首页</a></li>
      <li class="nav-list nav-l" style="position:relative;"><a href="javascript:void(0);" class="nav-list-link nav-arrow" title="产品模块">产品模块<i></i></a>
        <div class="clear"></div>
        <div class="sub">
          <div class="little-up"></div>
          <div class="cont">
            <dl style="border-bottom: dotted 1px #CCC;" >
              <dt><a href="<?php echo U('crm');?>"  title="CRM">CRM</a></dt>
              <dd> <a href="<?php echo U('crm');?>"  title="CRM">PHP语言开发，功能强大，易用性强，电商创业最佳选择。 </a></dd>
            </dl>
			<dl style="border-bottom: dotted 1px #CCC;" >
              <dt><a href="<?php echo U('sales');?>"  title="销售模块">销售模块</a></dt>
			  <dd><a href="<?php echo U('sales');?>"  title="销售模块">三级分销引爆流量。</a></dd>
            </dl><dl style="border-bottom: dotted 1px #CCC;" >
              <dt>仓库模块</dt>
			  <dd>三级分销引爆流量。</dd>
            </dl><dl style="border-bottom: dotted 1px #CCC;" >
              <dt>采购模块</dt>
			  <dd>三级分销引爆流量。</dd>
            </dl><dl style="border-bottom: dotted 1px #CCC;" >
              <dt>财务模块</dt>
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
      <li class="nav-list"><a href="<?php echo U('solution-list');?>"  class="nav-list-link" title="行业案例">行业案例</a>
        <div class="clear"></div>
      </li>
      <!--<li class="nav-list"><a href="<?php echo U('case');?>"  class="nav-list-link" title="成功案例">成功案例</a></li>-->
      <!--<li class="nav-list"><a href="<?php echo U('cooperation');?>"  class="nav-list-link" title="合作代理">合作伙伴</a></li>-->
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
<div id="banner" class="flexslider clear">
  <ul class="slides">
  <?php if(is_array($banner)): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li style="background:url(<?php echo get_image_path($vo['picture']);?>) bottom no-repeat; position:relative;">
      <a href="<?php echo ($vo["url"]); ?>" style="display: block; width: 100%;height:100%;"></a>
    </li><?php endforeach; endif; else: echo "" ;endif; ?>  
  </ul>
</div>
<div class="clear"></div>
<link href="/xh/Public/Static/css/index.css"  rel="stylesheet">
<script src="/xh/Public/Static/js/jquery.thumb.min.js" ></script>
<script>
$(function(){	
	$('.pic-article-img img').jqthumb({
		width: 215,
		height: 120,
		after: function(imgObj){
			imgObj.css('opacity', 0).attr('title',$(this).attr('alt')).animate({opacity: 1}, 2000);
		}
	});
	
});
</script>
<div class="index-main">
  <div class="product-container" style="margin-bottom:40px;">
    <h2>做最好的产品</h2>
    <h3>最专业、最权威的技术团队一心做事，为客户提供最适用的电商平台配套系统及服务</h3>

    <div class="product-module">
        <ul>
          <li class="p1"> <a class="box" href="" >
                <div class="pic"></div>
                <span>PHP电商系统</span> </a>
                <dl>
                  <dt></dt>
                  <dd>
                    <p>PHP电商系统是目前国内最领先的电商产品。包括商城、CMS、圈子、微商城、聊天等多套系统满足各类型企业电商化发展需求。</p>
                    <a href="<?php echo U('b2b2c');?>" >查看详情<i class="fa fa-caret-right"></i></a></dd>
                </dl>
              </li>

              <li class="p2"> <a class="box" href="" >
                <div class="pic"></div>
                <span>B2B2C多商户</span> </a>
                <dl>
                  <dt></dt>
                  <dd>
                    <p>采用PHP技术进行分层开发，选用目前主流的MVC开发方式，配套微信商城、APP商城移动前端，丰富的互动营销功能，精细化的用户运营，充分挖掘巨大移动电商市场潜力。</p>
                    <a href="<?php echo U('b2b2c');?>" >查看详情<i class="fa fa-caret-right"></i></a></dd>
                </dl>
              </li>

              <li class="p3"> <a class="box" href="<?php echo U('mobile-ios');?>" >
                <div class="pic"></div>
                <span>移动应用</span> </a>
                <dl>
                  <dt></dt>
                  <dd>
                    <p>iOS/Android/WAP移动应用与商城平台的紧密结合始终是我们开发的重点，移动应用也将是未来O2O电商发展的未来。</p>
                    <a href="<?php echo U('mobile-ios');?>" >查看详情<i class="fa fa-caret-right"></i></a></dd>
                </dl>
              </li>

              <li class="p4"> <a class="box" href="<?php echo U('solution-list');?>" >
                <div class="pic"></div>
                <span>解决方案</span> </a>
                <dl>
                  <dt></dt>
                  <dd>
                    <p>我们总结多年网上商城配套服务程序开发的实际经验与案例，为不同经营类型、不同行业特点的企业客户提供最佳的电商解决方案。</p>
                    <a href="<?php echo U('solution-list');?>" >查看详情<i class="fa fa-caret-right"></i></a></dd>
                </dl>
              </li>
          </ul>
    </div>
  </div>
</div>
<div class="clear"></div>
<div class="business-model-box">
  <div class="business-model">
    <h2>21世纪最具创新的电商团队</h2>
    <h3>随着时代的发展，电商领域被细分为多种商业模式，宣汉网络根据不同的电商模式专注于B2B2C多端数据互通系统开发领域</h3>
  </div>
  <div class="index-model-box">
    <div class="index-model">
        <ul>
        <li class="p1"> <a class="box" href="" >
              <div class="pic pic01"></div>
              <span style="left:75px;">B2B2C模式</span> </a>
              <dl>
                <dt>融合B2B、B2C模式，助力打通上下游渠道产业链</dt>
                <dd> <a class="lf-a fl" href="<?php echo U('b2b2c');?>" >查看详情<i class="fa fa-caret-right"></i></a> <a class="lf-b fr" href="../v1-6/" >查看测试网址<i class="fa fa-caret-right"></i></a> </dd>
              </dl>
            </li>

            <li class="p1"> <a class="box" href="" >
              <div class="pic pic02"></div>
              <span>B2C模式</span> </a>
              <dl>
                <dt>以垂直行业，大宗交易为基础模型的B2B商业模式</dt>
                <dd> <a class="lf-a fl" href="" >查看详情<i class="fa fa-caret-right"></i></a> <a class="lf-b fr" href="../b2c/" >查看测试网址<i class="fa fa-caret-right"></i></a> </dd>
              </dl>
            </li>

            <li class="p1"> <a class="box" href="" >
              <div class="pic pic03"></div>
              <span>O2O模式</span> </a>
              <dl>
                <dt>将线下商务与互联网技术有效结合，让互联网成为线下交易的前台</dt>
                <dd> <a class="lf-a fl" href="mall-o2o.html" >查看详情<i class="fa fa-caret-right"></i></a> <a class="lf-b fr" href="javascript:" >查看测试网址<i class="fa fa-caret-right"></i></a> </dd>
              </dl>
            </li>

            <li class="p1"> <a class="box" href="" >
              <div class="pic pic04"></div>
              <span>  微分销</span> </a>
              <dl>
                <dt>以个人间的交易为核心的多店商城系统</dt>
                <dd> <a class="lf-a fl" href="" >查看详情<i class="fa fa-caret-right"></i></a> <a class="lf-b fr" href="javascript:" >查看测试网址<i class="fa fa-caret-right"></i></a> </dd>
              </dl>
            </li>
        </ul>

    </div>
  </div>
</div>
<div class="clear"></div>
<div class="function-container">
  <h2>服务优质    功能完善</h2>
  <h3>宣汉网络产品始终以满足客户需求为己任，创造标准化的电商平台系统功能套件</h3>
  <div class="function-content">
<ul>
      <li class="f01"><a><span></span>
        <div class="pic fa fa-5x fa-shopping-cart" ></div>
        <dl>
          <dt>电子商务</dt>
          <dd>Odoo的电子商务软件完全颠覆传统认知。精致的商品分类和完美的商品介绍页面。</dd>
        </dl>
        </a> 
      </li>

      <li class="f05"><a><span></span>
        <div class="pic fa fa-5x fa-line-chart"></div>
        <dl>
          <dt>客户关系管理</dt>
          <dd>在您的销售渠道内工作，获得关于下一步行动、新信息、顶级机遇和预期收益的即使视觉化讯息。</dd>
        </dl>
        </a> </li>

      <li class="f16"><a><span></span>
        <div class="pic fa fa-5x fa-barcode"></div>
        <dl>
          <dt>销售</dt>
          <dd>发送报价明确的定价，让客户能更好地决定接受、拒绝或要求更多的信息。</dd>
        </dl>
        </a> </li>

      <li class="f17"><a><span></span>
        <div class="pic fa fa-5x fa-home"></div>
        <dl>
          <dt>库存</dt>
          <dd>实现自动化交易，降低库存水平和获得完整的可追溯性，这一切都可通过Odoo复式库存系统来实现。</dd>
        </dl>
        </a> </li>
      <li class="f07"><a><span></span>
        <div class="pic fa fa-5x fa-legal"></div>
        <dl>
          <dt>采购</dt>
          <dd>自动采购建议，提出报价要求，跟踪采购订单，管理供应商信息，产品接收和供应商发票。</dd>
        </dl>
        </a> </li>
      <li class="f02"><a><span></span>
        <div class="pic fa fa-5x fa-gears"></div>
        <dl>
          <dt>制造</dt>
          <dd>使用Odoo管理您的所有组件和/或制造业务。计划生产订单和订单的自动。</dd>
        </dl>
        </a> </li>
      <li class="f04"><a><span></span>
        <div class="pic fa fa-5x fa-comments"></div>
        <dl>
          <dt>营销</dt>
          <dd>易发邮件给你带来机遇和客户。跟踪邮件活动的性能以提高转换率。</dd>
        </dl>
        </a> </li>
      <li class="f06"><a><span></span>
        <div class="pic fa fa-5x fa-table"></div>
        <dl>
          <dt>项目</dt>
          <dd>Odoo的协作和项目管理的实时帮助你完成工作。从客户协议到最终开票，Odoo为您追踪全过程。</dd>
        </dl>
        </a> </li>
      <li class="f08"><a><span></span>
        <div class="pic fa fa-5x fa-bullhorn"></div>
        <dl>
          <dt>活动</dt>
          <dd>不论您是组织会议，研讨，培训或者网络研讨会。Odoo为您提供线上线下活动所需的全部功能以及活动的网站。</dd>
        </dl>
        </a> </li>
      <li class="f09"><a><span></span>
        <div class="pic fa fa-5x fa-cny"></div>
        <dl>
          <dt>财务</dt>
          <dd>精致且功能完备，我们的会计软件适用于任何企业。从综合分析会计到预算，从资产管理和多公司合并，它包罗万象。</dd>
        </dl>
        </a> </li>
      <li class="f10"><a><span></span>
        <div class="pic fa fa-5x fa-truck"></div>
        <dl>
          <dt>进销存</dt>
          <dd>根据发送给您的客户的报价创建发票。直接发送专业的外观发票在点击。在线支付和自动跟踪。</dd>
        </dl>
        </a> </li>
      <li class="f11"><a><span></span>
        <div class="pic fa fa-5x fa-group"></div>
        <dl>
          <dt>人力资源</dt>
          <dd>以简便的操作管理所有的人力资源项目：知识共享，招聘，考核，考勤，合同，参与度，工资，等等。</dd>
        </dl>
        </a> </li>
      <li class="f12"><a><span></span>
        <div class="pic fa fa-5x fa-envelope"></div>
        <dl>
          <dt>电邮推广</dt>
          <dd>商城预存款、在线支付、商城充值卡，多种形式的账户付款方式既让会员的账户安全可靠又灵活多样。</dd>
        </dl>
        </a> </li>
      <li class="f14"><a><span></span>
        <div class="pic fa fa-5x fa-firefox"></div>
        <dl>
          <dt>网站生成器</dt>
          <dd>买家可对完成的订单进行评价和晒单，也可在微商城、圈子等多频道进行分享，更可分享至站外微博微信。</dd>
        </dl>
        </a> </li>
      <li class="f15"><a><span></span>
        <div class="pic fa fa-5x fa-user"></div>
        <dl>
          <dt>在线客服</dt>
          <dd>量身定制iOS/Android/Wap版手机应用以及微信管理，微信支付等功能让商城在移动终端市场占据相应份额</dd>
        </dl>
        </a> </li>
    </ul>
    
  </div>
</div>


<!-- <div class="index-java middle">
  <div class="index-java-content">
    <h1>Java多用户商城系统</h1>
    <h3>卓越的设计，一流的团队，为您打造国内最领先的Java语言商城</h3>
    <p>基于目前最成熟、最主流的Spring、SpringMVC、HIBERNATE作为程序框架，支持多数据库配合（MySQL、ORACLE、PostgreSQL、SQLServer），精美的界面模板，人性化的操作体验，完备的订单流程，丰富的促销形式，适合搭建稳定、高效的电子商务平台。</p>
    <a href="mall-java.html"  target="_blank" title="">了解更多Java产品信息</a> </div>
</div> -->
<div class="clear"></div>
<!-- 代码 结束 --> 
<script>
$(function(){
	$('.tabs').tabulous({
		effect: 'flip'//动画反转效果 
	});
});
</script>







<div class="footer">
  <div class="footer-container">
    <div class="left-side">
      <div class="site-name">
        <a href="###"><img src="/xh/Public/Static/images/foot-logo.png"  alt="<?php echo ($config["company_name"]); ?>"/></a>
        <!--<a href="javascript:;"  target="_blank"><img src="/xh/Public/Static/images/sina_logo.png"  alt="新浪微博"/></a>
        <a href="javascript:;"  target="_blank"><img src="/xh/Public/Static/images/tencent_logo.png"  alt="腾讯微博"/></a>-->
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
    <div class="qq-hover-c"><img class="img-qq" src="/xh/Public/Static/images/im/qq.png" ></div>
    </a>

    <div class="im-tel">
      <div class="b2b">
        <div>销售咨询</div>
        <?php if(is_array($pre_qq)): foreach($pre_qq as $key=>$vo): ?><div class="tel-num">
          <a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($vo); ?>&site=qq&menu=yes" >
                <img border="0" src="/xh/Public/Static/images/im/qq_ico.png"  alt=""/>
          </a>
        </div><?php endforeach; endif; ?>
      </div>
  
     <div class="solution">
        <div class="tel-num" style="margin:16px 0px 6px"><a target="_blank" href="jhttp://wpa.qq.com/msgrd?v=3&uin=2850515883&site=qq&menu=yes" >
          <img border="0" src="/xh/Public/Static/images/im/qq_ico.png"  alt="解决方案"/></a>
        </div>
      </div>

      <div class="b2b">
      <div>售后服务</div>
            <?php if(is_array($aft_qq)): foreach($aft_qq as $key=>$val): ?><div class="tel-num">
                <a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($val); ?>&site=qq&menu=yes" >
                      <img border="0" src="/xh/Public/Static/images/im/qq_ico.png"  alt=""/>
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
      如需体验商城具体功能，请联系客服人员<a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'"  target="_blank" title="客服咨询1"><img border="0" src="/xh/Public/Static/images/im/qq_ico.png" /></a><a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'"  target="_blank" title="客服咨询2"><img border="0" src="/xh/Public/Static/images/im/qq_ico.png" /></a>提供相关测试地址及账号。</p>
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
    <p>你也可以直接拨打我们的免费热线：<a href="tel:4008801509"><i class="fa fa-phone"></i>400-880-1509</a>客服<a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'"  target="_blank" title="客服咨询1"><img border="0" src="/xh/Public/Static/images/im/qq_ico.png" /></a><a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'"  target="_blank" title="客服咨询2"><img border="0" src="/xh/Public/Static/images/im/qq_ico.png" /></a>。</p>
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
<script src="/xh/Public/Static/js/jquery.hDialog.js" ></script> 
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