<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登录 - <?php echo C('SITE_TITLE');?></title>
    <link rel="stylesheet" type="text/css" href="/pc/Public/Min/?f=/pc/Public/stylesheets/admin/base.css|/pc/Public/javascripts/admin/asyncbox/skins/default.css" />
</head>

<body class="loginWeb">
    <div class="loginBox">
        <div class="innerBox">
            <div class="logo"> <img src="/pc/Public/images/admin/logo.png" /></div>
            <form>
                <div class="loginInfo">
                    <ul>
                        <li class="row1">登录邮箱：</li>
                        <li class="row2"><input class="input" name="admin[email]" id="email" size="30" type="text" /></li>
                    </ul>
                    <ul>
                        <li class="row1">登录密码：</li>
                        <li class="row2"><input class="input" name="admin[password]" id="pwd" size="30" type="password" /></li>
                    </ul>
                    <ul>
                        <li class="row1">验证码：</li>
                        <li class="row2"><input class="input" id="verify_code" name="verify_code" type="text" style="width:100px;" /> <img src="<?php echo U('Public/verifyCode');?>"  title="看不清？单击此处刷新" onclick="this.src+='?rand='+Math.random();"  style="cursor: pointer; vertical-align: middle;"/></li>
                    </ul>
                </div>
            </form>
            <div class="clear"></div>
            <div class="operation"><button class="btn submit">登录</button>   <button class="btn findPwd">找回密码</button></div>
        </div>
    </div>

    <script type="text/javascript" src="/pc/Public/Min/?f=/pc/Public/javascripts/admin/jquery-1.7.2.min.js|/pc/Public/javascripts/admin/jquery.lazyload.js|/pc/Public/javascripts/admin/functions.js|/pc/Public/javascripts/admin/base.js|/pc/Public/javascripts/admin/jquery.form.js|/pc/Public/javascripts/admin/asyncbox/asyncbox.js|/pc/Public/javascripts/admin/jquery.watermark.js|/pc/Public/javascripts/admin/datepicker/datetimepicker_css.js">
</script>

<script type="text/javascript">
    $(window).resize(autoSize);
    $(function(){
        autoSize();
        $(".loginOut").click(function(){
            var url=$(this).attr("href");
            popup.confirm('你确定要退出吗？','你确定要退出吗',function(action){
                if(action == 'ok'){ window.location=url; }
            });
            return false;
        });

        var time=self.setInterval(function(){$("#today").html(date("Y-m-d H:i:s"));},1000);
    });
</script>

    <script type="text/javascript">
        $(function(){
            // 登录
            $(".submit").click(function(){
                if($("#email").val() == ''
                   || $("#pwd").val() == ''
                   || $("#verify_code").val() == ''){
                    popup.alert("请填写完整的表单后进行登录！");
                    return false;
                }
                commonAjaxSubmit("<?php echo U('Public/login');?>");
            });

            // 找回密码
            $(".findPwd").click(function() {
                if($("#email").val() == ''){
                    popup.alert("请填需要找回密码的登录邮箱！");
                    return false;
                }
                commonAjaxSubmit("<?php echo U('Public/sendFindPwdMail');?>");
            });
        });
    </script>
</body>
</html>