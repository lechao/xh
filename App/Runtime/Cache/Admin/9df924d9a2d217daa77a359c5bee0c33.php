<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <title><?php echo C('SITE_TITLE');?> - 后台管理系统</title>
    <base href="/pc/admin.php/Admin" />
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="/pc/Public/Min/?f=/pc/Public/stylesheets/admin/base.css|/pc/Public/stylesheets/admin/layout.css|/pc/Public/javascripts/admin/asyncbox/skins/default.css" />

    <!-- js -->
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

</head>

<body>
    <div class="wrap">
        <!-- header -->
        <div id="Top">
    <div class="logo">
        <a href="<?php echo U('Index/index');?>"><img src="/pc/Public/images/admin/logo.png" />
        </a>
    </div>

<!--     <div class="help">
        <a href="#">使用帮助</a><span><a href="#">关于</a></span>
    </div> -->

    <!-- menu -->
    <div class="menu">
    <ul>
        <?php if(is_array($main_menu)): $i = 0; $__LIST__ = $main_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu_item): $mod = ($i % 2 );++$i; if($i == 1): ?><li class="fisrt <?php echo activedLink($key, null, 'fisrt_current');?>">
                	<span><a href="<?php echo U($menu_item['target']);?>"><?php echo ($menu_item['name']); ?></a></span>
                </li>
            <?php elseif($i == count($main_menu)): ?>
                <li class="end <?php echo activedLink($key, null, 'end_current');?>">
                	<span><a href="<?php echo U($menu_item['target']);?>"><?php echo ($menu_item['name']); ?></a></span>
                </li>
            <?php else: ?>
                <li class="<?php echo activedLink($key, null, 'current');?>">
                	<span><a href="<?php echo U($menu_item['target']);?>"><?php echo ($menu_item['name']); ?></a></span>
                </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>

</div>

<!-- tab -->
<div id="Tags">
    <div class="userPhoto"><img src="<?php echo getGravatar($_SESSION[current_account][email]);?>" /> </div>
    <div class="navArea">
        <div class="userInfo">
            <div>
                <a href="<?php echo U('Public/logout');?>" class="loginOut"><span>&nbsp;</span>退出系统</a>
            </div>
            欢迎您，<?php echo ($_SESSION['current_account']['email']); ?>
        </div>
        <div class="nav">
            <font id="today"><?php echo date("Y-m-d H:i:s");?></font>
            您的位置：<?php echo ($breadcrumbs); ?>
        </div>
    </div>
</div>


<div class="clear"></div>


        <!-- main -->
        <div class="mainBody">
            <!-- left -->
            <div id="Left">
    <div id="control" class=""></div>
    <div class="subMenuList">
        <div class="itemTitle">
            常用操作
        </div>
        <ul>
            <?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu_item): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U($key);?>"><?php echo ($menu_item); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div>
</div>


            <!-- right -->
            <div id="Right">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab">
    <tr>
        <td width="120" align="right">操作系统：</td>
        <td><?php echo ($info['system']); ?></td>
        <td width="120" align="right">主机名IP端口：</td>
        <td><?php echo ($info['hostport']); ?></td>
    </tr>
    <tr>
        <td width="120" align="right">服务器：</td>
        <td><?php echo ($info['server']); ?></td>
        <td width="120" align="right">PHP运行方式：</td>
        <td><?php echo ($info['php_env']); ?></td>
    </tr>
    <tr>
        <td width="120" align="right">程序目录：</td>
        <td><?php echo ($info['app_dir']); ?></td>
        <td width="120" align="right">MYSQL版本：</td>
        <td><?php echo ($info['mysql']); ?></td>
    </tr>
    <tr>
        <td width="120" align="right">GD库版本：</td>
        <td><?php echo ($info['gd']); ?></td>
        <td width="120" align="right">上传附件限制：</td>
        <td><?php echo ($info['upload_size']); ?></td>
    </tr>
    <tr>
        <td width="120" align="right">执行时间限制：</td>
        <td><?php echo ($info['exec_time']); ?></td>
        <td width="120" align="right">剩余空间：</td>
        <td><?php echo ($info['disk_free']); ?></td>
    </tr>
    <tr>
        <td width="120" align="right">服务器时间：</td>
        <td><?php echo ($info['server_time']); ?></td>
        <td width="120" align="right">北京时间：</td>
        <td><?php echo ($info['beijing_time']); ?></td>
    </tr>
    <tr>
        <td width="120" align="right">allow_url_fopen</td>
        <td><?php echo ($info['fopen']); ?></td>
        <td width="120" align="right">register_globals：</td>
        <td><?php echo ($info['reg_gbl']); ?></td>
    </tr>
    <tr>
        <td width="120" align="right">magic_quotes_gpc：</td>
        <td><?php echo ($info['quotes_gpc']); ?></td>
        <td width="120" align="right">magic_quotes_runtime：</td>
        <td><?php echo ($info['quotes_runtime']); ?></td>
    </tr>
</table>

            </div>
        </div>
        <div class="clear"></div>

        <!-- footer -->
        <div id="Bottom">
    © 2014 Easy-Admin，Github项目地址：<a target="_blank" href="https://github.com/happen-zhang/easy-admin" target="_blank" >happen-zhang</a> Easy-Admin后台管理系统 All rights reserved
</div>

    </div>
</body>
</html>