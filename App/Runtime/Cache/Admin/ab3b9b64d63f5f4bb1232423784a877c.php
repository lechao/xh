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
                <div class="Item hr">
    <div class="current">缓存管理</div>
</div>
<form>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab">
        <thead>
            <tr>
                <td style="text-align: left;" colspan="4"><label><input name="" class="chooseAll" type="checkbox"/> 全选</label>&nbsp;&nbsp;&nbsp;&nbsp; <label><input name="" class="unsetAll" type="checkbox"/> 反选</label></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="30" align="center"><input type="checkbox" name="caches[]" value="<?php echo ($caches['Admincache']); ?>" /></td>
                <td>后台缓存文件<br/> (<?php echo ($caches['Admincache']); ?>)</td>
                <td width="30" align="center"><input type="checkbox" name="caches[]" value="<?php echo ($caches['Admindata']); ?>" /></td>
                <td>后台数据库字段缓存文件<br/> (<?php echo ($caches['Admindata']); ?>)</td>
            </tr>
            <tr>
                <td width="30" align="center"><input type="checkbox" name="caches[]" value="<?php echo ($caches['Adminlogs']); ?>" /></td>
                <td>后台日志缓存文件<br/> (<?php echo ($caches['Adminlogs']); ?>)</td>
                <td width="30" align="center"><input type="checkbox" name="caches[]" value="<?php echo ($caches['Admintemp']); ?>" /></td>
                <td>网站后台临时缓存文件<br/> (<?php echo ($caches['Admintemp']); ?>)</td>
            </tr>
            <tr>
                <td width="30" align="center"><input type="checkbox" name="caches[]" value="<?php echo ($caches['Adminruntime']); ?>" /></td>
                <td>后台runtime.php缓存文件<br/> (<?php echo ($caches['Adminruntime']); ?>)</td>
                <td width="30" align="center"><input type="checkbox" name="caches[]" value="<?php echo ($caches['Homecache']); ?>" /></td>
                <td>前台缓存文件<br/> (<?php echo ($caches['Homecache']); ?>)</td>
            </tr>
            <tr>
                <td width="30" align="center"><input type="checkbox" name="caches[]" value="<?php echo ($caches['Homedata']); ?>" /></td>
                <td>前台数据库字段缓存文件<br/> (<?php echo ($caches['Homedata']); ?>)</td>
                <td width="30" align="center"><input type="checkbox" name="caches[]" value="<?php echo ($caches['Homelogs']); ?>" /></td>
                <td>前台日志缓存文件<br/> (<?php echo ($caches['Homelogs']); ?>)</td>
            </tr>
            <tr>
                <td width="30" align="center"><input type="checkbox" name="caches[]" value="<?php echo ($caches['Hometemp']); ?>" /></td>
                <td>网站前台临时缓存文件<br/> (<?php echo ($caches['Hometemp']); ?>)</td>
                <td width="30" align="center"><input type="checkbox" name="caches[]" value="<?php echo ($caches['Homeruntime']); ?>" /></td>
                <td>前台runtime.php缓存文件<br/> (<?php echo ($caches['Homeruntime']); ?>)</td>
            </tr>
            <tr>
                <td width="30" align="center"><input type="checkbox" name="caches[]" value="<?php echo ($caches['MinFiles']); ?>" /></td>
                <td>JS/CSS压缩缓存文件<br/> (<?php echo ($caches['MinFiles']); ?>)</td>
                <td width="30" align="center"></td>
                <td></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4"><label><input name="" class="chooseAll" type="checkbox"/> 全选</label>&nbsp;&nbsp;&nbsp;&nbsp; <label><input name="" class="unsetAll" type="checkbox"/> 反选</label></td>
            </tr>
        </tfoot>
    </table>
</form>
<div class="commonBtnArea" >
    <button class="btn submit">清除已选缓存</button>
</div>

<script type="text/javascript">
$(function(){
    clickCheckbox();
    $(".submit").click(function(){
        if($("tbody input[type='checkbox']:checked").size()==0){
            popup.alert("请先选择要删除的缓存！");
            return false;
        }

        commonAjaxSubmit("<?php echo U('Cache/delete');?>");
    });
});
</script>

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