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
    <div class="current">添加模型</div>
</div>
<form>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
        <tr>
            <th width="100">模型名称：</th>
            <td><input id="model_name" type="text" class="input" size="20" name="model[name]" value="<?php echo ($model['name']); ?>" /> <a href="javascript:void(0)" id="check_model_name">检测是否可用</a>（用于在主菜单和子菜单上显示，不能包含特殊字符）</td>
        </tr>
        <tr>
            <th width="100">数据表名：</th>
            <td><input id="tbl_name" type="text" class="input" size="20" name="model[tbl_name]" value="<?php echo ($model['tbl_name']); ?>" /> <a href="javascript:void(0)" id="check_tal_name">检测是否可用</a>（存放该模型的数据表名称，只能由"_"、a~z组成）</td>
        </tr>
        <tr>
            <th width="100">主菜单名：</th>
            <td><input id="menu_name" type="text" class="input" size="20" name="model[menu_name]" value="<?php echo ($model['menu_name']); ?>" /> <a href="javascript:void(0)" id="check_menu_name">检测是否可用</a>（用于在主菜单和子菜单上显示）</td>
        </tr>
        <tr>
            <th>模型描述：</th>
            <td><textarea id="content" class="input" style="height: 80px; width: 50%;" name="model[description]" placeholder="模型的注释，同时也会作为表的注释"><?php echo ($model['description']); ?></textarea></td>
        </tr>
        <input type="hidden" name="model[id]" value="<?php echo ($model['id']); ?>" />
    </table>
</form>
<div class="commonBtnArea" >
    <button class="btn submit">提交</button>
</div>

<script type="text/javascript">
function submitForm(action) {
    $(".submit").click(function(){
        if ("" == $.trim($("#model_name").val())) {
            popup.error("模型名称不能为空");
            return false;
        } else if ("" == $.trim($("#tbl_name").val())) {
            popup.error("数据表名称不能为空");
            return false;
        }

        var url = ('create' == action) ? "<?php echo U('Models/create');?>" : "<?php echo U('Models/update');?>";


        commonAjaxSubmit(url);
        return false;
    });
}

$(function(){
    $("#check_model_name").click(function(){
        $.getJSON("<?php echo U('Models/checkModelName', array('id' => $model['id']));?>", { model_name: $("#model_name").val() }, function(json){
            $("#check_model_name").css("color",json.status==1?"#0f0":"#f00").html(json.info);
        });
    });

    $("#check_tal_name").click(function(){
        $.getJSON("<?php echo U('Models/checkTblName', array('id' => $model['id']));?>", { tbl_name:$("#tbl_name").val()}, function(json){
            $("#check_tal_name").css("color",json.status==1?"#0f0":"#f00").html(json.info);
        });
    });

    $("#check_menu_name").click(function(){
        $.getJSON("<?php echo U('Models/checkMenuName', array('id' => $model['id']));?>", { menu_name:$("#menu_name").val()}, function(json){
            $("#check_menu_name").css("color",json.status==1?"#0f0":"#f00").html(json.info);
        });
    });
});
</script>

<script type="text/javascript">
$(function(){
    submitForm("update");
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