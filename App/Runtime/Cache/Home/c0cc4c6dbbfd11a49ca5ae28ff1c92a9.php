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



<link href="/pc/Public/Static/css/style.css"  rel="stylesheet">
<style>
.main-im .im_main .im-tel .solution { display: none !important;}
/*.main-im .im_main .im-tel .b2b { display: none !important;}*/
#top{background:url("/pc/Public/Static/images/top_bg2.png") center;}
.banner-layout{ margin-top:0px; height:360px;}
</style>
<div class="banner-layout banner-o2o">
  <div class="banner">
    <h2>社区O2O</h2>
    <h3>电商解决方案</h3>
    <p>移动互联网、物联网等新一代信息通信技术的出现和普及应用让O2O电商这一新兴的商业模式迅速落地并在近几年快速发展。社区O2O电商，对移动互联网、物联网、大数据处理以及云服务等核心技术也在助推众多传统企业（本地社区服务企业、物业公司）和互联网企业加速融合线上渠道和线下服务。</p>
  </div>
</div>
<div class="main-layout" id="sq_o2o">
  <section class="block01 even">
    <div class="wrap">
      <div class="title">
        <h2>2011-2018年中国O2O电商市场规模及渗透率</h2>
      </div>
      <div class="content"><img src="/pc/Public/Static/images/solution/o2o1.gif"  alt="O2O电商市场规模及渗透率"/> </div>
    </div>
  </section>
  <section class="block02">
    <div class="wrap">
      <div class="title">
        <h2>O2O电商平台-多屏互动 功能齐全</h2>
      </div>
      <div class="content">
<img src="/pc/Public/Static/images/solution/o2o2.gif"  alt="O2O电商平台-多屏互动 功能齐全"/>
      </div>
    </div>
  </section>
  <section class="block03" style="background: #2264be;">
    <div class="wrap">
      <div class="title">
        <h2 style="color: #fff;">轻松打造一体化的社区O2O电商平台</h2>
        <p>基于LBS定位，涵盖商城、上门服务、外卖订餐、团购、积分商城、优惠券、红包等功能助您打造一站式本地化O2O综合生活服务平台的应用软件系统</p>
      </div>
<div class="content"><img src="/pc/Public/Static/images/solution/o2o3.png"  alt="轻松打造一体化的社区O2O电商平台"/></div>
      </div>
   
   <div class="pic"></div>
  </section>
    <section class="block04">
     <div class="wrap01">
     		<div class="content"><img src="/pc/Public/Static/images/solution/o2o5.jpg"  alt="O2O电商平台解决方案"/></div>
     </div>
    </section>
    
      <section class="block05 even">
		    <div class="wrap">
			    	<div class="title">
			        <h2>O2O电商平台核心功能</h2>
			        <p>线上线下完美结合，聚集消费群体，直观的营销效果及追踪评估，带来更多的商家</p>
			      </div>
			     <!--<div class="content">
			    <img src="http://www.shopnc.net//pc/Public/Static/images/solution/kj_2.jpg" />
			       <img src="http://www.shopnc.net//pc/Public/Static/images/solution/kj_3.jpg" />
			          <img src="http://www.shopnc.net//pc/Public/Static/images/solution/kj_4.jpg" />
			             <img src="http://www.shopnc.net//pc/Public/Static/images/solution/kj_5.jpg" />
			                <img src="http://www.shopnc.net//pc/Public/Static/images/solution/kj_6.jpg" />
			      </div>-->
			      	<div class="s5_1">
			
			<div class="s5box s5box2" style="border-left: none">
				<div class="s5boximg "><!--<img src="http://o2o.fanwe.com/app/Tpl/fanwe//pc/Public/Static/images/ts2.png">-->
					
					<img src="/pc/Public/Static/images/solution/yq/ts2.png"  alt="O2O电商平台-售卖区域">
				</div>
				<h1>售卖区域</h1>
				<h2>平台灵活掌握多级地区管理，店铺设置售卖区域及区域内运费模板，与商品关联。</h2>
			</div>
			<div class="s5box s5box3">
				<div class="s5boximg "><img src="/pc/Public/Static/images/solution/yq/ts3.png"  alt="O2O电商平台-消保服务"></div>
				<h1>消保服务</h1>
				<h2>商城设定消保服务规则及保证金额，店铺参加获得消费者包装标识，并应严格履行服务内容。</h2>
			</div>
			<div class="s5box s5box4">
				<div class="s5boximg "><img src="/pc/Public/Static/images/solution/yq/ts4.png"  alt="O2O电商平台-微信登录、支付"></div>
				<h1>微信登录、支付</h1>
				<h2>平台可开启使用微信账号绑定登录，更可申请开通微信支付功能，手机微信扫码轻松完成支付。</h2>
			</div>
			<div class="s5box s5box5">
				<div class="s5boximg "><img src="/pc/Public/Static/images/solution/yq/ts5.png"  alt="O2O电商平台-平台红包"></div>
				<h1>平台红包</h1>
				<h2>平台红包、店铺代金券可多种方式供会员领取，并可设定与消费金额、会员等级、积分等相关信息关联。</h2>
			</div>
<div class="s5box s5box10">
				<div class="s5boximg "><img src="/pc/Public/Static/images/solution/yq/ts15.png"  alt="O2O电商平台-移动端应用"></div>
				<h1>移动端应用</h1>
				<h2>量身定制iOS/Android/WAP版手机应用以及微信管理，微信支付等功能让商城在移动终端市场占据相应份额。</h2>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="s5_2">
			
			<div class="s5box s5box6" style="border-left: none">
				<div class="s5boximg "><img src="/pc/Public/Static/images/solution/yq/ts6.png"  alt="O2O电商平台-商品SKU"></div>
				<h1>商品SKU</h1>
				<h2>灵活多变的商品规格属性设定，商城管理建立类型与商品分类绑定，商家可自行定义商品SKU。</h2>
			</div>
			<div class="s5box s5box7">
				<div class="s5boximg "><img src="/pc/Public/Static/images/solution/yq/ts12.png" alt="O2O电商平台-平台结算"></div>
				<h1>平台结算</h1>
				<h2>平台统一收取货款，按商品分类分佣比列与商户之间进行一定时间段内的货款结算，能更好的监管交易质量。</h2>
			</div>
			<div class="s5box s5box8">
				<div class="s5boximg "><img src="/pc/Public/Static/images/solution/yq/ts8.png"  alt="O2O电商平台-在线客服"></div>
				<h1>在线客服</h1>
				<h2>在线聊天IM系统让买卖双方沟通变得简单，聊天记录可查询，商家可建立多个售前售后客服。</h2>
			</div>
			<div class="s5box s5box9">
				<div class="s5boximg "><img src="/pc/Public/Static/images/solution/yq/ts9.png"  alt="O2O电商平台-虚拟商品"></div>
				<h1>虚拟商品</h1>
				<h2>虚拟商品使商城实现本地化销售（O2O模式）简单易行，线上购买获取兑换码，线下消费完成订单。</h2>
			</div>
			<div class="s5box s5box10">
				<div class="s5boximg "><img src="/pc/Public/Static/images/solution/yq/ts10.png"  alt="O2O电商平台-频道专题"></div>
				<h1>频道专题</h1>
				<h2>频道页面自定义编辑与商城分类进行绑定，让各类商品大类个性展示鲜明，专题页面则是促销集合的体现。</h2>
			</div>
			<div class="clear"></div>
		</div>
		
		<div class="s5_3" style="overflow:hidden">
			<div class="s5box" style="border-left: none">
				<div class="s5boximg "><img src="/pc/Public/Static/images/solution/yq/ts13.png"  alt="O2O电商平台-预存款充值卡"></div>
				<h1>预存款充值卡</h1>
				<h2>商城预存款、在线支付，多种形式的账户付款方式既让会员的账户安全可靠又灵活多样。</h2>
			</div>
			<div class="s5box">
				<div class="s5boximg "><img src="/pc/Public/Static/images/solution/yq/ts14.png"  alt="O2O电商平台-晒单分享"></div>
				<h1>晒单分享</h1>
				<h2>买家可对完成的订单进行评价和晒单，也可在微商城、圈子等多频道进行分享，更可分享至站外微博微信。</h2>
			</div>
			<div class="s5box">
				<div class="gx"></div>
			</div>
			<div class="s5box">
				<div class="gx"></div>
			</div>
			<div class="s5box">
				<div class="gx"></div>
			</div>
			<div class="blank30"></div>
		</div>
		    </div>
    </section>




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