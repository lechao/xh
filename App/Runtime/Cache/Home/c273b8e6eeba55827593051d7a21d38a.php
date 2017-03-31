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



<link href="/pc/Public/Static/css/product.css"  rel="stylesheet">
<script src="/pc/Public/Static/js/jquery-1.8.0.min.js"  type="text/javascript"></script>
<script type="text/javascript">
$(function (){
  $(".f11nav li").click(function (){
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
<a href="javascript:if(confirm('http://b2b2c.shopnctest.com/dema/shop/index.php  nn??ļ????? Teleport Ultra ??, ?Ϊ ??һ???????????????Ϊ?????????ĵ????  nn????????????'))window.location='http://b2b2c.shopnctest.com/dema/shop/index.php'" >
<div class="B2B2C-top-banner"></div>
</a>
<input type="hidden" id="display_ban" value="1">
<!--<div class="products-step">
  <div class="products-box">
    <ul class="page">
      <li class="one"> <a href="javascript:;">产品简述</a> </li>
      <li class="two"> <a href="javascript:;">产品功能</a> </li>
      <li class="three"> <a href="javascript:;">营销功能</a> </li>
      <li class="four "> <a href="javascript:;">成功案例</a> </li>
      <li class="five last"> <a href="javascript:;">功能迭代</a> </li>
    </ul>
    <div class="page-down"> <a href="http://www.shopnc.net/special-java.html" target="_blank" >
      <h3><i class="fa fa-thumbs-o-up"></i>&nbsp;技术特性</h3>
  
      </a> <a href="http://www.shopnc.net/special-javanew.html" target="_blank" style="background:#ff7f00;">
      <h3><i class="fa fa-rocket"></i>&nbsp;功能特点</h3>

      </a> <a href="http://java.bizpower.com/web/" target="_blank" style="background:#3B9DE6; margin-right:0;">
      <h3><i class="fa fa-search"></i>&nbsp;测试网址</h3>

      </a> </div>
  </div>
</div>-->
<div class="floor6">
  <div class="w1152"> <em class="f6-e">迄今为止<strong>功能最强大</strong>的商城系统</em><span class="f6-s">一款支持分销、视频直播、产品库等前沿功能的B2B2C电商系统</span>
    <p class="f6-p">ShopNC B2B2C电商系统，全面支持PC、WAP、微信、APP等终端设备，支持屏购机、智能电视等多媒体设备。</br>
      实现多屏购物、分销等，全新的视频直播、点播、资讯给消费者带来全新的购物体验。</p>
    <div class="f6btn1"><a href="special-b2b2c.html"  title="B2B2C多用户商城系统" target="_blank"><i class="fa fa-rocket"></i>功能特点</a> </div>
    <div class="f6btn2"><a href="javascript:if(confirm('http://b2b2c.shopnctest.com/dema/shop/index.php  nn??ļ????? Teleport Ultra ??, ?Ϊ ??һ???????????????Ϊ?????????ĵ????  nn????????????'))window.location='http://b2b2c.shopnctest.com/dema/shop/index.php'"  title="B2B2C多用户商城系统" target="_blank"><i class="fa fa-search"></i>测试地址</a> </div>
  </div>
</div>
<div class="floor_11"> <em>多种运营模式，让平台运营灵活多变</em>
  <p>自营模式、联营模式、招商模式、混合运营模式，满足平台各个阶段的商业模式</p>
  <ul class="f11nav tabbar">
    <li class="current">自营模式</li>
    <li class="">联营模式</li>
    <li class="">招商模式</li>
    <li class="">混合模式</li>
  </ul>
  <div class="fl11-list child-tab-show">
    <div class="text fl" style="margin-top:50px;">
      <h2>自营商业运营模式</h2>
      <span class="fl">平台企业通过建立自营线上商城，整合自身多渠道业务。通过会员、商品、订单、财务和仓储等管理系统，对线下线上多渠道业务进行统一管理。</span> </div>
     <img class="fr" src="/pc/Public/Static/images/product/fl_11_1.jpg"  alt="自营模式">
     </div>
     
  <div class="fl11-list child-tab-show hide"> <img class="fl" src="/pc/Public/Static/images/product/fl_11_2.jpg"  alt="联营模式">
    <div class="text fr" style="margin-top:20px;">
      <h2>联营商业运营模式</h2><span class="fl">整合多方渠道供应商，以商品入库、统一仓储、统一物流的方式进行入库联营。平台企业通过代销或者直销的方式，将伙伴供应商资源纳入平台自营体系，建立多个自营店铺，多样化商品和服务品类，整合行业资源。平台与伙伴供应商以不同的方式定期进行财务结算。</span>
      </div>
  </div>
  
  <div class="fl11-list child-tab-show hide"  style="width:900px;">
    <div class="text fl" style="width:520px; padding-top:0px;" >
      <h2>招商模式</h2><span class="fl" style="width:570px;">平台企业通过建立线上商城，签约多方渠道供应商，通过会员、交易、平台和财务等管理系统，对平台进行运营管理。多方渠道供应商，以加盟签约形式，入驻B2B2C平台。入驻商家可自行管理商品、订单、仓储、物流、售后服务、营销推广等业务，定期与平台进行财务结算，入驻商家通过大平台流量、资源、营销服务等业务优势，强化自身品牌知名度，提高交易转化率。平台则可以多样化商品和服务品类，整合行业资源，收取商家营销推广费用、类目使用费用和平台佣金等收入。</span> </div>
    <img class="fr" src="/pc/Public/Static/images/product/fl_11_3.jpg"  alt="招商模式">
    </div>
    
    
  <div class="fl11-list child-tab-show hide" style="width:900px;">
  <img class="fl" style=" margin-top:10px;" src="/pc/Public/Static/images/product/fl_11_4.jpg"  alt="混合模式">
   <div class="text fr" style="width:570px; padding-top:0px;" >
    <h2>混合模式</h2><span class="fl" style="width:570px;">一般为自营+招商、自营+联营+招商等模式，平台企业通过建立自营线上商城，整合自身多渠道业务，通过会员、商品、订单、财务和仓储等管理系统，对线下线上多渠道业务进行统一管理。同时整合多方渠道供应商，以加盟签约形式，入驻B2B2C平台。入驻商家可自行管理商品、订单、仓储、物流、售后服务、营销推广等业务，定期与平台进行财务结算，入驻商家通过大平台流量、资源、营销服务等业务优势，强化自身品牌知名度，提高交易转化率。平台则可以多样化商品和服务品类，整合行业资源，收取商家营销推广费用、类目使用费用和平台佣金等收入。</span>  </div>
    </div>
</div>
</div>
</div>
<div class="floor8">
  <div class="title_1">
   <em>统一数据独立展现，全渠道覆盖消费者</em>
    <p>ShopNC B2B2C商城全面覆盖微信商城、手机触屏版商城、苹果APP商城、安卓APP商城及PC端，统一的数据，让您一次开店，全通路覆盖</p>
  </div>
  <div class="w750">
    <div class="no_2">
      <ul>
        <li><img src="/pc/Public/Static/images/product/q1.png" ><span>PC独立商城</span></li>
        <li><img src="/pc/Public/Static/images/product/q2.png" ><span>微信商城<span></li>
        <li><img src="/pc/Public/Static/images/product/q3.png" ><span>手机触屏商城<span></li>
        <li><img src="/pc/Public/Static/images/product/q4.png" ><span>APP商城iOS<span></li>
        <li style="padding-right:0px;"><img src="/pc/Public/Static/images/product/q5.png" ><span>APP商城Android<span></li>
      </ul>
    </div>
  </div>
</div>
<div class="floor_4">
  <div class="title">强大的商城前后台功能，满足平台日常运营的需求</div>
  <h2>ShopNC B2B2C电商系统，目前国内最领先，最完善的电商管理平台标准化产品。</h2>
  <div class="scroll" id="floor4">
    <ul>
      <li>
        <div class="block-wap weichat01">
          <div class="pic"><img src="/pc/Public/Static/images/product/weichat_pic01.jpg"  alt="会员体系"></div>
          <div class="texts">
            <h3><strong>会员体系</strong></h3>
            <h4>会员是商城的最基本构成元素之一。建立良好的会员信息，积分奖励制度以及贴心安全的购物环境是增加用户与网站粘性的好方法。 </h4>
          </div>
        </div>
      </li>
      <li>
        <div class="block-wap weichat02">
          <div class="pic"><img src="/pc/Public/Static/images/product/weichat_pic02.jpg"  alt="商家体系"></div>
          <div class="texts">
            <h3><strong>商家体系</strong></h3>
            <h4>平台可以开设自营店铺进行商品销售，并可通过规范的入驻流程审核添加供应商（三方店铺），通过交易佣金、店铺等级服务费、运营促销费、广告...等途径获得利润。</h4>
          </div>
        </div>
      </li>
      <li>
        <div class="block-wap weichat01">
          <div class="pic"><img src="/pc/Public/Static/images/product/weichat_pic03.jpg"  alt="商品交易"></div>
          <div class="texts">
            <h3><strong>商品交易</strong></h3>
            <h4>商品是商城销售的基本元素，合理的商品规格、属性设置，以及品牌、介绍等规则的设定都将直接影响购买情况。更有虚拟产品的加入为O2O销售模式奠定好基础。</h4>
          </div>
        </div>
      </li>
      <li>
        <div class="block-wap weichat02">
          <div class="pic"><img src="/pc/Public/Static/images/product/weichat_pic04.jpg"  alt="运营统计"></div>
          <div class="texts">
            <h3><strong>商家体系</strong></h3>
            <h4>合理的运营模式体现了一套电子商务平台的核心价值，从结算、统计、物流、地区等各方面反应了ShopNC系统标准化与成熟度。</h4>
          </div>
        </div>
      </li>
      <li>
        <div class="block-wap weichat01">
          <div class="pic"><img src="/pc/Public/Static/images/product/weichat_pic05.jpg"  alt="扩展支持"></div>
          <div class="texts">
            <h3><strong>扩展支持</strong></h3>
            <h4>ShopNC B2B2C系统内置多种预设接口，可满足支付、物流、信息推送等日常功能，并可和微信、ERP、CRM、OMS三方软件进行无缝对接。</h4>
          </div>
        </div>
      </li>
    </ul>
    <a href="javascript:;" class="prev"><img src="/pc/Public/Static/images/product/arrow-prev.png"  border="0"></a> <a href="javascript:;" class="next"><img src="/pc/Public/Static/images/product/arrow-next.png"  border="0"></a> </div>
</div>
<div class="floor_3">
  <div class="title">一件商品的N+1种促销方式</div>
  <h2>从单品级、订单级、店铺级、平台级的促销方式，到PC端与移动端、互动式与裂变式的营销模式。</h2>
  <div class="w1200"> 
    <script language="javascript">
							function xuank_click(cursel,n,t){
					    	for(i=1;i<=n;i++){
					    	 var menu=document.getElementById("xuank_clcik"+i);
					    	 var con=document.getElementById("xuank_conn"+i);
					    	 menu.className=i==cursel?"xuank_clcik":"xuank_nclcik";
					     	con.style.display=i==cursel?"block":"none";
					    	 }
					   	 	}
						</script>
    <div class="xuank_ul">
      <ul>
        <li class="xuank_clcik" id="xuank_clcik1" onmousemove="xuank_click(1,6);"> <img src="/pc/Public/Static/images/product/icon_01.png" > <em>单品级</em> <span>单品致胜是店铺<br>
          飞跃的不二法宝 </span> </li>
        <li class="xuank_clcik" id="xuank_clcik2" onmousemove="xuank_click(2,6);"> <img src="/pc/Public/Static/images/product/icon_02.png" > <em>订单级</em> <span>提高客单量<br>
          销量翻一翻 </span> </li>
        <li class="xuank_clcik" id="xuank_clcik3" onmousemove="xuank_click(3,6);"> <img src="/pc/Public/Static/images/product/icon_03.png" > <em>店铺级</em> <span>多种促销方式<br>
          帮你“黏住”客户 </span> </li>
        <li class="xuank_clcik" id="xuank_clcik4" onmousemove="xuank_click(4,6);"> <img src="/pc/Public/Static/images/product/icon_04.png" > <em>平台级</em> <span>整站大促<br>
          让平台每天都是双11 </span> </li>
        <li class="xuank_clcik" id="xuank_clcik5" onmousemove="xuank_click(5,6);"> <img src="/pc/Public/Static/images/product/icon_05.png" > <em>组合促销</em> <span>组合式促销，让商品更加优惠</span> </li>
        <li class="xuank_clcik" id="xuank_clcik6" onmousemove="xuank_click(6,6);"><img src="/pc/Public/Static/images/product/icon_06.png" > <em>移动端</em> <span>手机专享、拼团等为移动端<br>
          量身打造的促销方式</span> </li>
      </ul>
    </div>
    <div class="show1">
      <div id="xuank_conn1" style="display: none;"> <em>单品级</em> <strong>单品致胜是店铺飞跃的不二法宝</strong> <span>ShopNC B2B2C电商系统支持团购、赠品、限时折扣、预约、预订、预售、F码等多种单品级促销方式，让店铺轻松打造爆款。</span> </div>
      <div id="xuank_conn2" style="display: none;"> <em>订单级</em> <strong>提高客单量，销量翻一翻</strong> <span>ShopNC B2B2C电商系统中的优惠套装、满减、满送、满优惠、加价购等订单促销方式，让您的客单量一涨再涨！</span> </div>
      <div id="xuank_conn3" style="display: none;"> <em>店铺级</em> <strong>多种促销方式，帮你“粘住”客户</strong> <span>ShopNC B2B2C电商系统中的推荐组合、店铺代金券等促销方式，帮您把新会员变成老会员，老会员变成忠实会员。</span> </div>
      <div id="xuank_conn4" style="display: none;"> <em>平台级</em> <strong>整站大促，让平台每天都是双11</strong> <span>会员数量是一个平台的基础，而活跃会员更是基础中的基础。ShopNC B2B2C电商系统中的平台红包、专题活动、活动管理、推荐展位等多种促销活动，吸引会员每天登录，平台获取更高的流程，商品获得更高的销售机会。</span> </div>
      <div id="xuank_conn5" style="display: block;"> <em>组合促销</em> <strong>组合式促销，让商品更加优惠</strong> <span>ShopNC B2B2C电商系统中单品级、订单级、店铺级、平台级促销均可进行自由组合，使得平台销售方式更加的灵活多变，满足所有商家的营销方式。</span> </div>
      <div id="xuank_conn6" style="display: none;"> <em>移动端</em> <strong>手机专享、拼团等为移动端量身打造的促销方式</strong> <span>ShopNC B2B2C电商系统基于移动端的特有形式而开发的拼团、移动专享等促销方式充分利用移动端的特性，借助移动端强大的社交属性进行传播，达到裂变营销的目的。</span> </div>
    </div>
  </div>
</div>
<div class="floor_6">
  <div class="w1200">
    <div class="title_t">
      <p>建立一支分销强军，让销量飞起来</p>
      <span>ShopNC B2B2C电商系统中的分销模块集PC端与移动端于一体，融合移动互联网特色的全平台网络分销模块,<br>
      帮助企业快速实现微信分销、朋友圈代销、淘宝代销、线下批发、连锁加盟等多渠道布局。</span> </div>
    <div class="left_t text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;移动端与PC端数据双向传递同步管理，使用户可直接在手机分销商城购物、支付、互动。依照商家需求打造专属的分销团队。</div>
    <div class="right_t text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;快速建立的独立分销平台，采用全新可视化编辑，使用成本更低。助商家快速部署实现，可以快速满足商家个性化的产品需求。</div>
  </div>
</div>
<div class="floor10">
  <div class="w1220">
    <div class="title">ShopNC B2B2C分销模块，四大核心功能</div>
    <ul>
      <li>
        <div class="img_1"><img src="/pc/Public/Static/images/product/f10_1.png" ></div>
        <div class="t_text">
          <p>分销市场</p>
          <span>独立的分销市场，分销员可快速分销商品获取推广链接及二维码。</span> </div>
      </li>
      <li>
        <div class="img_2"><img src="/pc/Public/Static/images/product/f10_2.png" ></div>
        <div class="t_text">
          <p>佣金体系</p>
          <span>商家设置商品的推广佣金，分销员推广成交后获得相应佣金。</span> </div>
      </li>
      <li>
        <div class="img_3"><img src="/pc/Public/Static/images/product/f10_3.png" ></div>
        <div class="t_text">
          <p>推广体系</p>
          <span>分销员可把商品推广至微信、微博等三方社交软件中，也可以使用商城的直播模块进行推广。</span> </div>
      </li>
      <li>
        <div class="img_4"><img src="/pc/Public/Static/images/product/f10_4.png" ></div>
        <div class="t_text">
          <p>结算体系</p>
          <span>完善的结算体系，可对任何状态下的分销订单进行单独处理。</span> </div>
      </li>
    </ul>
  </div>
</div>
<div class="floor_1">
  <div class="title">移动视频模块</div>
  <div class="w1200">
    <h2>在移动互联网时代，人们已经习惯了用手机来解决问题和消磨时间。而之前PC端的购物方式显然已经不能满足人们购物之外的消遣需求了。因此，ShopNC B2B2C除了丰富手机端商城的内容之外，还加入了移动电商的一大潮流——直播。直播的真实性、互动性和实时性极强，能够给消费者带来更多的娱乐化及信息化场景，符合移动互联网场景化、碎片化、个性化、中心化的特点和趋势。网络直播具有基本的互动行为和直接连接场景的能力。因此对于电商平台来说，直播技术的加入改变了平台与消费者现有的交流模式，提供了一个真实的、实时的交流渠道，为电商平台创造更多互动玩法及变现方式提供了可能。</h2>
    <div class="pd_1">
      <ul>
        <li> <strong>视频直播模块</strong> <em>网红经济的到来，玩转视频销售</em> <span>ShopNC B2B2C移动端APP直播模块让全民做主播成为现实。相较于电脑直播来说，APP的直播模块使用更加便利。以前人们若想在电脑端主播，需得调视频调麦克风，手续比较繁琐。但是直播APP开发只需打开手机便可直播，简单方便。主播还可以推荐商城分销的商品，成交获取佣金。</span> </li>
        <li> <strong>视频点播模块</strong> <em>看视频，买商品，更多好货全球购</em> <span>ShopNC B2B2C移动端APP点播模块可以对商品进行全方位的视频展示。会员可通过APP进行视频点播，坐在家中即可观看和购买来自巴黎、纽约、东京等海外的街头好货。买全球，购全球！</span> </li>
        <li> <strong>视频资讯模块</strong> <em>全球时尚资讯，引领消费高潮</em> <span>ShopNC B2B2C移动端APP资讯模块，全方位引领时尚生活！ 汇集全时尚资讯，播放时尚热点，时事、美容、服饰、健康、生活、母婴、体育、宠物、家居等丰富内容，并可根据相关资讯推荐相关产品，满足会员的消费体验。</span> </li>
      </ul>
    </div>
  </div>
</div>
<div class="floor_9 w1200">
  <div class="title">让购物——随时随地
    <p>视频直播和主播一起全球购</p>
  </div>
  <img src="/pc/Public/Static/images/product/f9_1.jpg"  alt=""> </div>
<div class="floor_5">
  <div class="title"><em>完善的行业解决方案</em> 
    <!--    <p>ShopNC为您提供专业的服务，高效的方案</p>--> 
  </div>
  <div class="w1200">
    <div class="floor_con">
      <div class="no_1"> <span>ShopNC为您提供专业的服务，高效的方案</span>
        <p>作为专业的企业级电商系统提供商，我们沉淀了9年的行业及业态项目经验，为工业、农业、商超、跨境、汽车、母婴、银行、电视购物等60多个垂直行业提供适合的针对性的解决方案，帮助企业适应市场发展浪潮、相应业务变化拓展。</p>
      </div>
      <div class="no_3"> <a href="solution-list.html" >申请体验</a> </div>
    </div>
  </div>
</div>
<div class="floor7">
  <div class="title"> <span>配套的商城组件满足多业务场景</span>
    <p>商城、咨询、圈子、微商城、即时通讯、移动端等强大的商城配套组件，满足你的业务需求。</p>
  </div>
  <div class="w1160">
    <div class="no_1">
      <ul>
        <li class="mr_20"> <img src="/pc/Public/Static/images/product/f_01.jpg"  alt="O2O商城系统"> <span>商城系统（MALL）</span>
          <p>强大商城模块，包含会员、商家、后台管理、营销、商品、订单等基础功能外，更拥有门店、虚拟商品等模块。</p>
        </li>
        <li class="mr_20"> <img src="/pc/Public/Static/images/product/f_02.jpg"  alt="O2O商城功能"> <span>移动端（WAP/H5/APP）</span>
          <p>PC商城与微信商城、触屏商城、原生开发的安卓及iOS手机应用数据全面打通。移动端与电商平台同步开发，功能完善统一、更具特色。</p>
        </li>
        <li> <img src="/pc/Public/Static/images/product/f_03.jpg"  alt="网上商城ERP"> <span>资讯模块（CMS）</span>
          <p>商城不再是单一的销售商品，更是在资讯、社交等领域全面布局，逐渐成为以购物为中心的综合性门户网站。</p>
        </li>
        <li class="mr_20"> <img src="/pc/Public/Static/images/product/f_04.jpg"  alt="渠道"> <span>圈子模块（BBS）</span>
          <p>会员可以在圈子中分享喜欢的商品，展示自己购买过的商品，探讨大家感兴趣的话题，还可以发布一个投票调查。</p>
        </li>
        <li class="mr_20"> <img src="/pc/Public/Static/images/product/f_05.jpg"  alt="拓展"> <span>微商城</span>
          <p>通过流行的瀑布流展示方式，在一个垂直的领域内，通过关注、喜欢、分享、评论让有相同兴趣爱好的人聚集在一个社区。</p>
        </li>
        <li> <img src="/pc/Public/Static/images/product/f_06.jpg"  alt="全网营销"> <span>即时通讯（IM）</span>
          <p>纯JavaScript+PHP实现消息即时互通，可多联系人选显卡切换，离线消息自动保存，上线后推送提示，可显示聊天者在线状态，跨浏览器兼容等</p>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="floor_2">
  <div class="title"><em>立即体验ShopNC功能</em></div>
  <div class="w1200">
    <div class="f2con"> <img src="/pc/Public/Static/images/product/pd_04.png"  alt="" onclick="">
      <ul class="right_ul">
        <li><img src="/pc/Public/Static/images/product/ShopNC_PHP_wap.png"  alt="">
          <p>B2B2C微信商城</p>
        </li>
        <li><img src="/pc/Public/Static/images/product/ShopNC_PHP_iOS.png"  alt="">
          <p>B2B2C电商系统APP商城<br>
            （iOS）</p>
        </li>
        <li><img src="/pc/Public/Static/images/product/ShopNC_PHP_android.png"  alt="">
          <p>B2B2C电商系统APP商城<br>
            （Android）</p>
        </li>
      </ul>
    </div>
  </div>
</div>
<script src="/pc/Public/Static/js/b2b2c-main.js"  type="text/javascript"></script>

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