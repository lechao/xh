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


 <!-- Bootstrap  -->
<link rel="stylesheet" href="/xh/Public/Wap/css/bootstrap.min.css"/>
<div class="apply">
    <div class="banner">
        <img alt="" src="/xh/Public/Wap/image/banner_apply.jpg" >
         
    </div>
    <div class="heading">
        <h2>亲爱的用户，欢迎您光临宣汉7yun</h2>
        <span>请您填写以下信息，我们会及时给您提供详细资料和解答。</span>
    </div>


    <div class="container apply-nav-box">

        <form id="form-apply" class="form-horizontal" role="form">
            <input type="hidden" name="sign" id="sign" value="web_wap">
            <div class="form-group">
                <label for="username" class="control-label"><span class="red">*</span>联系人</label>
                <div>
                    <input type="text" class="form-control" id="username" placeholder="请输入联系人姓名" name="username">
                </div>
            </div>

            <div class="form-group">
                <label for="qq" class="control-label"><span class="red">*</span>联系QQ</label>
                <div>
                    <input type="text" class="form-control" id="qq" placeholder="请输入QQ" name="qq">
                </div>
            </div>


            <div class="form-group">
                <label for="email" class="control-label"><span class="red">*</span>联系邮箱</label>
                <div>
                    <input type="text" class="form-control" id="email" placeholder="请输入邮箱" name="email">
                </div>
            </div>

            <div class="form-group" style="margin-bottom:5px !important;">
                <label for="phone" class="control-label"><span class="red">*</span>手机号码</label>
            </div>
             <div class="form-group">
                <div class="col-xs-8" style="padding-left:0px !important;">
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="请输入手机号码">
                </div>
                 <a href="javascript:void(0);" class="btn btn-primary col-xs-2" style="margin-left:0px; width:33%; padding:8px 12px; background:#fb3f00; border:none" id="sms_captcha1">获取验证码</a>
                <a href="javascript:void(0);" class="btn btn-primary col-xs-2" style="margin-left:0px; width:33%;font-size:18px !important; line-height:22px !important; padding:8px 12px; background:#fb3f00; border:none;display:none;" id="sms_captcha2">等待<em>59</em>秒后重新<br>获取验证码</a>
            </div>

            <div class="form-group">
                <label for="identifying_code" class="control-label"><span class="red">*</span>验证码</label>
                <div>
                    <input type="text" class="form-control" id="identifying_code" name="identifying_code" placeholder="请输入手机短信验证码">
                </div>
            </div>
            <div class="form-group">
                <label for="content" class="control-label"><span class="red">*</span>内容</label>
                <div>
                    <textarea class="form-control" id="content" rows="3" name="content"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div>
                    <input class="btn btn-default btn-primary col-xs-12" type="submit" value="提交">
                </div>
            </div>
        </form>

    </div>
</div>



<!-- Bootstrap -->
<script src="/xh/Public/Wap/js/bootstrap.min.js" ></script>
<script src="/xh/Public/Wap/js/jquery.validation.min.js" ></script>
<script>
    $().ready(function () {
        //获取站点URL
        var m = /^(https?://.+)/wap/i.exec(location.href);
        if (m && m.length > 1) {
            var SiteUrl = m[1] + '/';
        }
        $('#form-apply').submit(function(){

        });
// 在键盘按下并释放及提交后验证提交表单
        $("#form-apply").validate({
            onkeyup: false,
            rules: {
                username: {
                    required: true,
                    minlength: 2
                },
                qq: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    rangelength: [11,11],
                    number : true,

                },
                identifying_code: {
                    required : true,
                    remote :{
                        url :SiteUrl + 'index.php?act=experience&op=check_captcha&column=ok',
                        type:'get',
                        data:{
                            sms_captcha: function(){
                                return $('#identifying_code').val();
                            },
                            phone:function(){
                                return $('#phone').val();
                            }
                        }
                    }

                },
                content: "required"
            },
            messages: {
                username: {
                    required: "请输入用户名",
                    minlength: "用户名必需大于两个字母"
                },
                qq: {
                    required: "请输入QQ",
                    minlength: '请输入最少五位'
                },
                email: {
                    required: "请输入邮箱地址",
                    email: "请输入正确的邮箱地址"
                },
                identifying_code: {
                    required: "请输入验证码",
                    remote:"验证码错误"

                },
                phone: {
                    required: "请输入手机号",
                    rangelength: '请输入11位手机号',
                    number: "请输入数字",
                },
                content: "请输入咨询内容",
            },
            submitHandler: function(form) {  //通过之后回调
                var username = $('#username').val();
                var qq = $('#qq').val();
                var phone = $('#phone').val();
                var sign = $('#sign').val();
                var content = $('#content').val();
                var identifying_code = $('#identifying_code').val();
                var email = $('#email').val();
                $.ajax({
                    type:'POST',
                    url:SiteUrl + 'index.php?act=wap_api&op=save_consult',
                    data:{
                        username:username,
                        qq:qq,
                        phone:phone,
                        sign:sign,
                        content:content,
                        identifying_code: identifying_code,
                        email:email
                    },
                    dataType:'json',
                    success:function(data){
                        if(data.done){
                            alert('提交成功!');
                            window.location.href="index.html"/*tpa=http://www.宣汉7yun.net/wap/index.html*/;
                        }else{
                            alert(data.msg);
                        }
                    },
                })
            }
        });
        $('#sms_captcha1').click(function(){
            if($('#phone').val().length != 11){
                $('#form-apply').submit();
                return false;
            }else{
                ajaxurl = SiteUrl + 'index.php?act=experience&op=get_captcha';
                ajaxurl += '&phone='+$('#phone').val();
                $.ajax({
                    type: "GET",
                    url: ajaxurl,
                    async: false,
                    dataType:'json',
                    success: function(rs){
                        if(rs.state) {
                            $('#sms_captcha1').hide();
                            $('#sms_captcha2').show().find('em').html(rs.msg);
                            var times_Countdown = setInterval(function(){
                                var em = $('#sms_captcha2').find('em');
                                var t = parseInt(em.html() - 1);
                                if (t == 0) {
                                    $('#sms_captcha1').show();
                                    $('#sms_captcha2').hide();
                                    clearInterval(times_Countdown);
                                } else {
                                    em.html(t);
                                }
                            },1000);
                        } else {
                            $.ncDialog({msg:rs});
                        }
                    }
                });
            }
        })

    });
</script>


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