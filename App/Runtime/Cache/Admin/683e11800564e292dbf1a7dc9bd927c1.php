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
    <div class="current">模型基本信息</div>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
    <tr>
        <th width="100">模型名称：</th>
        <td><?php echo ($model['name']); ?></td>
    </tr>
    <tr>
        <th width="100">数据表名：</th>
        <td><?php echo ($model['tbl_name']); ?></td>
    </tr>
    <tr>
        <th width="100">是否为内部表：</th>
        <td><?php if($model['is_inner'] == 1): ?>是<?php else: ?>否<?php endif; ?></td>
    </tr>
    <tr>
        <th width="100">字段数：</th>
        <td><?php echo ($model['fields_count']); ?></td>
    </tr>
    <tr>
        <th width="100">记录行数：</th>
        <td><?php echo ($model['rows']); ?></td>
    </tr>
    <tr>
        <th>模型描述：</th>
        <td><?php echo ($model['description']); ?></td>
    </tr>
</table>

<div class="Item hr">
    <div class="current">模型字段信息</div>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab">
    <thead>
        <tr>
            <td>表单域顺序</td>
            <td>字段名称</td>
            <td>字段标签</td>
            <td>字段类型</td>
            <td>是否必填</td>
            <td>是否唯一</td>
            <td>是否索引</td>
            <td>系统字段</td>
            <td>字段操作</td>
        </tr>
    </thead>
    <tbody>
        <?php if(is_array($model['fields'])): $i = 0; $__LIST__ = $model['fields'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$field): $mod = ($i % 2 );++$i;?><tr align="center">
            <td><?php if(0 == $field['show_order']): ?>---<?php else: echo ($field['show_order']); endif; ?></td>
            <td><?php echo ($field['name']); ?></td>
            <td><?php echo ($field['comment']); ?></td>
            <td><?php echo ($field['type']); ?></td>
            <td><?php if($field['is_require'] == 1): ?>是<?php else: ?>否<?php endif; ?></td>
            <td><?php if($field['is_unique'] == 1): ?>是<?php else: ?>否<?php endif; ?></td>
            <td><?php if($field['is_index'] == 1): ?>是<?php else: ?>否<?php endif; ?></td>
            <td><?php if($field['is_system'] == 1): ?>是<?php else: ?>否<?php endif; ?></td>
            <td><?php if($field['is_system'] == 0): ?>[ <a href="<?php echo U('Fields/edit', array('model_id' => $model['id'], 'field_id' => $field['id']));?>">编辑</a> ] [ <a href="<?php echo U('Fields/delete', array('model_id' => $model['id'], 'field_id' => $field['id']));?>" name="<?php echo ($field['name']); ?>" class="del">删除</a> ]<?php else: ?><a href="javascript:void(0);" class="toggle" value="<?php echo U('Fields/toggleListShow', array('field_id' => $field['id']));?>" status="<?php echo ($field['is_list_show']); ?>" name="<?php echo ($field['name']); ?>"><?php if($field['is_list_show'] == 1): ?>不在数据列表中显示<?php else: ?>数据列表中显示<?php endif; ?></a><?php endif; ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </tbody>
</table>
<div class="commonBtnArea" >
    <button class="btn submit" onclick="window.location.href='<?php echo U('Fields/add', array('model_id' => $model['id']));?>'">添加字段</button>
</div>

<script type="text/javascript">
$(function(){
    $(".del").click(function(){
        var url = $(this).attr("href");
        popup.confirm('你真的打算删除 <b>'+$(this).attr("name")+'</b> 吗?','温馨提示',function(action){
            if(action == 'ok'){
                $.getJSON(url, function(json) {
                    if (json.status) {
                        popup.success(json.info);
                        setTimeout(function(){
                            popup.close("asyncbox_success");
                            top.window.location.reload();
                        }, 2000);
                    } else {
                        popup.error(json.info);
                        setTimeout(function(){
                            popup.close("asyncbox_error");
                        }, 2000);
                    }
                });
            }
        });
        return false;
    });

    $(".toggle").click(function(){
        var url = $(this).attr("value");
        var name = $(this).attr("name");
        var status = $(this).attr("status") || 0;
        status = status == 0 ? '显示' : '不显示';

        popup.confirm('您确定在数据列表中'+ status + " <b>" + name + "</b> 字段吗？", '温馨提示',function(action){
            if(action == 'ok'){
                $.getJSON(url, function(json){
                    if (json.status) {
                        popup.success(json.info);
                        setTimeout(function(){
                            popup.close("asyncbox_success");
                        },2000);
                    } else {
                        popup.error(json.info);
                        setTimeout(function(){
                            popup.close("asyncbox_error");
                        },2000);
                    }

                    setTimeout(function(){
                        top.window.location.reload();
                    },1000);
                });
            }
        });

        return false;
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