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
<link href="/xh/Public/Static/css/font/css/font-awesome.css"  rel="stylesheet">
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



<link href="/xh/Public/Static/css/style.css"  rel="stylesheet">
<style>
html,body{ height:auto;}
#top{background:none;}
.banner2{ height:700px}
</style>
<div id="top_banner" class="banner2">
  <div class="mid register">
    <div class="step"> 
        <span class="check"><a href="javascript:void(0);">手机注册</a></span> 
        <!-- <span><a href="login-register_mail.html" >邮箱注册</a></span>  -->
    </div>
  <form id="register_form1" class="nc-register-form">
    <div class="clear"></div>
    <div style="margin:30px 0 0 200px;">
      <dl>
        <dt>手机号：</dt>
        <dd>
          <input type="text" class="text" maxlength="11" placeholder="请输入手机号码" autocomplete="off" value="" id="mobile" name="mobile"  >
        </dd>
      </dl>
      <div class="clear"></div>
  
        <dl>
          <dt>验证码：</dt>
          <dd> <span class="right block" style="margin-left:20px"><a class="makecode" href="javascript:freshVerify();"><img src="<?php echo U('verify');?>"  title="看不清楚，换一张" alt="看不清楚，换一张" name="codeimage" id="codeimage" style="height:36px;"/> </a></span>
            <input type="text" name="captcha" maxlength="4" autocomplete="off" class="block right" placeholder="输入验证码" id="captcha" size="10"  style="width:225px" />
          </dd>
        </dl>
        <div class="clear"></div>

   
        <dl>
         <dt>短信码：</dt>
          <dd>
            <input class="block left" type="text" maxlength="6" placeholder="请输入短信动态码" autocomplete="off" id="d_captcha" name="d_captcha" size="10" tipMsg="" style="width:144px;margin-right:10px" />
            <a href="javascript:void(0);" onclick="get_sms_captcha('1')" class="block right mobile-phone" id="sms_captcha1">发送短信验证</a> <a href="javascript:void(0);" class="block right mobile-phone" id="sms_captcha2" style="display:none;">等待<em>59</em>秒后重新获取验证码</a>
            <div class="clear"></div>
          </dd>
        </dl>
        <div class="clear"></div>
        <div class="tiptext" id="sms_text"></div>
   
    </div>
    <a href="javascript:void(0)" id="register_a1" class="next-step block">请进行手机验证，下一步</a> <a href="<?php echo U('login');?>"  class="denglu" title="我已是云产品用户，返回登录">我已是会员用户，返回登录</a>
  </form>
  <form id="register_form2" method="post" style="display:none"  action="http://www.shopnc.net/index.php?act=login&op=save_member" class="nc-register-form">
    <input type="hidden" name="mobile" value="" />
    <input type="hidden" name="d_captcha" value="" />
    <div class="clear"></div>
    <div style="margin:30px 0 0 200px;">
      <dl>
        <dt>用户名：</dt>
        <dd>
          <input type="text" id="user_name" name="user_name" class="text" autocomplete="off" placeholder="用户名：请使用3-20个中、英文、数字及“-”符号"/>
        </dd>
      </dl>
      <dl>
        <dt>密  码：</dt>
        <dd>
          <input type="password" id="password" name="password" class="text" autocomplete="off" placeholder="您的登录密码"/>
        </dd>
      </dl>
      <dl>
        <dt style="font-size:12px;line-hight:31px">确认密码：</dt>
        <dd>
          <input type="password" id="password_confirm" name="password_confirm" class="text" autocomplete="off" placeholder="再次输入密码"/>
        </dd>
      </dl>
      <dl>
        <dt>邮  箱：</dt>
        <dd>
          <input type="text" id="email" name="email" class="text" autocomplete="off" placeholder="输入常用邮箱作为验证及找回密码使用"/>
        </dd>
      </dl>
      <dl class="clause-div">
        <dd>
          <input name="agree" type="checkbox" class="checkbox" id="clause" value="1" checked="checked" style="width:16px; height:14px" />
          阅读并同意<a href="index.php-act=document.htm"  target="_blank" class="agreement" title="">《服务协议》</a></dd>
      </dl>
    </div>
    <a href="javascript:void(0)" id="register_a2" class="next-step block">请填写登录信息，下一步</a>
  </form>
  <form  id="register_form3" style="display:none" class="nc-register-form">
    <div class="clear"></div>
    <div style="width:442px; margin:30px auto 0px;">
      <h4 class="success">注册成功！请到及时到用户中心完善个人信息。</h4>
      <span style="text-align:center;display:block;margin-top:10px;"><a href="index.php-act=login.htm"  style="color:#fff;">5秒后跳转到用户中心</a></span> </div>
    </div>
  </form>
</div>
</div>
<div class="clear"></div>
<div id="dialog" title="Basic dialog"> </div>
<script src="/xh/Public/Static/js/common.js" ></script>
<script type="text/javascript" src="/xh/Public/Static/js/jquery.validation.min.js"  charset="utf-8"></script> 
<script type="text/javascript" src="/xh/Public/Static/js/connect_sms.js"  charset="utf-8"></script> 
<script type="text/javascript" src="/xh/Public/Static/js/jquery-ui/jquery.ui.js"  charset="utf-8"></script>
<link href="/xh/Public/Static/js/jquery-ui/themes/smoothness/jquery.ui.css"  rel="stylesheet">


<script>
$(function(){
    jQuery.validator.addMethod("letters_name", function(value, element) {
        return this.optional(element) || (/^[A-Za-z0-9u4e00-u9fa5_-]+$/i.test(value) && !/^d+$/.test(value));
    }, "Letters only please");
    $("#register_form1").validate({
        errorPlacement: function(error, element){
            var error_td = element.parent('dd');
            error_td.append(error);
        },
/*        success: function(label) {
        },*/
        onkeyup: false,
        rules : {
            mobile: {
                required : true,
                mobile : true,
                remote   : {
                    url : 'index.php-act=login&op=check_mobile.htm'/*tpa=http://www.shopnc.net/index.php?act=login&op=check_mobile*/,
                    type: 'get',
                    data:{
                        mobile : function(){
                            return $('#mobile').val();
                        }
                    }
                }
            },
            d_captcha: {
                required : true,
                minlength: 6
            }
        },
        messages : {
            mobile: {
                required : '<i class="icon-exclamation-sign"></i>手机号不能为空不能为空',
                mobile : '<i class="icon-exclamation-sign"></i>请填写正确的手机号',
                remote   : '<i class="icon-exclamation-sign"></i>手机号已经存在'
            },
            d_captcha: {
                required : '<i class="icon-exclamation-sign"></i>',
                minlength: '<i class="icon-exclamation-sign"></i>'
            }
        }
    });
//注册表单验证
    $("#register_form2").validate({
        errorPlacement: function(error, element){
            var error_td = element.parent('dd');
            error_td.append(error);
        },
        success: function(label) {
        },
        onkeyup: false,
        rules : {
            user_name : {
                required : true,
                rangelength : [3,20],
                letters_name : true,
                remote   : {
                    url :'index.php-act=login&op=check_member&column=ok.htm'/*tpa=http://www.shopnc.net/index.php?act=login&op=check_member&column=ok*/,
                    type:'get',
                    data:{
                        user_name : function(){
                            return $('#user_name').val();
                        }
                    }
                }
            },
            password : {
                required : true,
                minlength: 6,
                maxlength: 20
            },
            password_confirm : {
                required : true,
                equalTo  : '#password'
            },
            agree : {
                required : true
            }
        },
        messages : {
            user_name : {
                required : '<i class="icon-exclamation-sign"></i>用户名不能为空',
                rangelength : '<i class="icon-exclamation-sign"></i>用户名必须在3-20个字符之间',
                letters_name: '<i class="icon-exclamation-sign"></i>可包含“_”、“-”，不能是纯数字',
                remote   : '<i class="icon-exclamation-sign"></i>该用户名已经存在'
            },
            password  : {
                required : '<i class="icon-exclamation-sign"></i>密码不能为空',
                minlength: '<i class="icon-exclamation-sign"></i>密码长度应在6-20个字符之间',
                maxlength: '<i class="icon-exclamation-sign"></i>密码长度应在6-20个字符之间'
            },
            password_confirm : {
                required : '<i class="icon-exclamation-sign"></i>您必须再次确认您的密码',
                equalTo  : '<i class="icon-exclamation-sign"></i>两次输入的密码不一致'
            },
            agree : {
                required : '<i class="icon-exclamation-sign"></i>请勾选服务协议'
            }
        }
    });


    $('#register_a1').click(function(){
        check_captcha();
    });
    $('#register_a2').click(function(){
        $.post('index.php-act=login&op=save_member.htm'/*tpa=http://www.shopnc.net/index.php?act=login&op=save_member*/, $("#register_form2").serialize(), function(result){
            if (result.state) {
                $('#register_form2').hide();
                $('#register_form3').show();
                var t=setTimeout("window.location.href='index.php-act=login.htm'/*tpa=http://www.shopnc.net/console.php*/",5000);
            } else {
                $('#email').parent().find('label[class="error"]').remove().end().append('<label class="error">'+result.msg+'</label>');
            }
        },'json');
    });
});

 function freshVerify() {
    $('#codeimage').attr("src", $('#codeimage').attr("src").split("?")[0] + "?" + Math.random());
  }
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