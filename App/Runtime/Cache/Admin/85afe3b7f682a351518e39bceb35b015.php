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
    <span class="fr">系统数据库备份目录下共有<b><?php echo ($files_count); ?></b>个SQL备份文件，共计<b><?php echo ($total_size); ?></b></span>
    <div class="current">备份SQL文件列表</div>
</div>
<form>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="tab">
        <thead>
            <tr>
                <td width="90"><label><input name="" class="chooseAll" type="checkbox"/> 全选</label> <label><input name="" class="unsetAll" type="checkbox"/> 反选</label></td>
                <td>SQL文件名</td>
                <td>备份时间</td>
                <td>文件大小</td>
                <td>文件备注</td>
                <td>导入</td>
            </tr>
        </thead>
        <tbody>
            <?php if(is_array($info_list)): $i = 0; $__LIST__ = $info_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$info): $mod = ($i % 2 );++$i;?><tr align="center">
                <td><input pre="<?php echo ($info['prefix']); ?>" type="checkbox" name="sql_files[]" value="<?php echo ($info['name']); ?>"/></td>
                <td align="left"><a href="<?php echo U('Data/downloadFile', array('file_name' => $info['name'], 'file_type' => 'sql'));?>" target="_blank"><?php echo ($info['name']); ?></a></td>
                <td><?php echo ($info['time']); ?></td>
                <td><?php echo ($info['size']); ?></td>
                <td class="description" title="<?php echo ($info['description']); ?>">查看备注信息</td>
                <td><button class="btn restore" sqlPre="<?php echo ($info['prefix']); ?>">导入</button></td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
        <tfoot align="center">
            <tr>
                <td width="90"><label><input name="" class="chooseAll" type="checkbox"/> 全选</label> <label><input name="" class="unsetAll" type="checkbox"/> 反选</label></td>
                <td>SQL文件名</td>
                <td>备份时间</td>
                <td>总计：<?php echo ($total_size); ?></td>
                <td>文件备注</td>
                <td>导入</td>
            </tr
        </tfoot>
    </table>
</form>
<div class="commonBtnArea" >
    <span class="fr" id="opStatus" style="width:450px; display: none; margin: -8px; line-height: 16px;"></span>
    <button class="btn delSqlFiles">删除所选</button>
    <button class="btn zip">压缩SQL为ZIP</button>
</div>

<link rel="stylesheet" type="text/css" href="/pc/Public/Min/?f=/pc/Public/javascripts/poshytip/tip-yellow/tip-yellow.css|/pc/Public/javascripts/admin/poshytip/tip-yellowsimple/tip-yellowsimple.css" />
<script type="text/javascript" src="/pc/Public/Min/?f=/pc/Public/javascripts/admin/poshytip/jquery.poshytip.min.js"></script>

<script type="text/javascript">
$(function(){
    //刷新操作
    var repeat=function(url,type){
        $.post(url, function(json){
            if(json.status==1){
                if(json.url){
                    $("#opStatus").html(json.info);
                    repeat(json.url,type);
                }else{
                    popup.success(json.info,'oh yeah',function(action){
                        if(action == 'ok'){
                            $("#opStatus").hide('solw');
                            $("."+type).html("导入");
                        }
                    });
                    $(".btn").removeAttr("disabledSubmit");
                }
            }else{
                popup.error(json.info);
            }
        });
    }

    //显示SQL文件说明信息
    $('.description').poshytip({className: 'tip-yellowsimple', showTimeout: 0.5,alignX: 'center',offsetY: 0,allowTipHover: true});
    clickCheckbox();//全新反选

    //同一备份版本任意一个卷选中则选中该卷所有文件
    $("tbody input[type='checkbox']").click(function(){$("tbody input[type='checkbox'][pre='"+$(this).attr("pre")+"']").prop("checked",$(this).prop('checked'));});

    //提交数据导入操作
    $(".restore").click(function(){
        // 已有导入数据提交
        if($(this).attr("disabledSubmit")){
            popup.alert("已提交，系统在处理中...");
            return false;
        }
        var sqlPre=$(this).attr("sqlPre");
        // 修改按钮状态
        $(".restore[sqlPre='"+sqlPre+"']").attr("disabledSubmit",true).html("导入中...");
        // 禁用其他操作
        $(".btn").attr("disabledSubmit",true);
        $.post("<?php echo U('Data/doRestore');?>", {file_prefix: sqlPre}, function(json){
            if(json.status==1){
                if(json.url){
                    $("#opStatus").show().html(json.info);
                    repeat(json.url, "restore");
                }else{
                    $(".restore").html("导入");
                    $(".btn").removeAttr("disabledSubmit");
                    popup.success(json.info);
                }
                popup.close("asyncbox_alert");
            }else{
                popup.error(json.info);
            }
        });
        popup.alert("系统处理中，如果导入文件较大可能需要较长时间，勿刷新，请稍候....");
        return false;
    });

    //删除备份文件
    $(".delSqlFiles").click(function(){
        if($(this).attr("disabledSubmit")){
            popup.alert("已提交，系统在处理中...");
            return false;
        }
        if($("tbody input[type='checkbox']:checked").size()==0){
            popup.alert("请先选择你要删除的数据库表吧");
            return false;
        }
        popup.confirm('你确定要删除备份文件吗？','温馨提示',function(action){
            if(action == 'ok'){
                $(".btn").attr("disabledSubmit",true);
                $(this).html("提交处理中...");
                commonAjaxSubmit("<?php echo U('Data/deleteSqlFiles');?>");
            }
        });
        return false;
    });

    // 压缩备份文件
    $(".zip").click(function(){
        if($(this).attr("disabledSubmit")){
            popup.alert("已提交，系统在处理中...");
            return false;
        }
        if($("tbody input[type='checkbox']:checked").size()==0){
            popup.alert("请先选择你要压缩的数据库表吧");
            return false;
        }
        commonAjaxSubmit("<?php echo U('Data/zipSqlFiles');?>");
        $(".btn").attr("disabledSubmit",true);
        $(this).html("压缩中...");
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