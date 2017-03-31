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
                <form>
    <!-- 基本属性 -->
    <div class="Item hr">
        <div class="current"><?php echo ($model['name']); ?>（<?php echo ($model['tbl_name']); ?>）- 字段基本属性</div>
    </div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
        <tr>
            <th width="100">字段名称：</th>
            <td><input id="field_name" type="text" class="input" size="20" name="field[name]" /> <a href="javascript:void(0)" id="check_field_name">检测是否可用</a>（用在数据表中作为字段名，只能由"_"、a~z、A-Z组成）</td>
        </tr>
        <tr>
            <th width="100">字段标签：</th>
            <td><input id="field_label" type="text" class="input" size="20" name="field[comment]" /> <a href="javascript:void(0)" id="check_field_label">检测是否可用</a>（用在添加数据时，显示在表单前的标签信息）</td>
        </tr>
        <tr>
            <th width="100">字段备注：</th>
            <td><input type="text" class="input" size="29" name="input[remark]" />（用于描述字段域的意义或填写规则）</td>
        </tr>
        <tr>
            <th width="100">字段类型：</th>
            <td>
                <select id="field_type" name="field[type]">
                    <option value="VARCHAR" selected>字符型0-255字节(VARCHAR)</option>
                    <option value="CHAR">定长字符型0-255字节(CHAR)</option>
                    <option value="TINYINT">小数值型(TINYINT)</option>
                    <option value="SMALLINT">中数值型(SMALLINT)</option>
                    <option value="INT">大数值型(INT)</option>
                    <option value="BIGINT">超大数值型(BIGINT)</option>
                    <option value="FLOAT">数值浮点型(FLOAT)</option>
                    <option value="DOUBLE">数值双精度型(DOUBLE)</option>
                    <option value="TEXT">小型字符型(TEXT)</option>
                    <option value="MEDIUMTEXT">中型字符型(MEDIUMTEXT)</option>
                    <option value="LONGTEXT">大型字符型(LONGTEXT)</option>
                </select>
            </td>
        </tr>
        <tr id="field_length">
            <th width="100">字段长度：</th>
            <td>
                <input type="text" class="input" size="20" name="field[length][intchar]" />（字段长度为整数，CHAR、VARCHAR长度不能为空）
            </td>
        </tr>
        <tr id="field_precision">
            <th width="100">字段精度：</th>
            <td>
                <label for="pre_length">长度：</label><input type="text" class="input" size="20" name="field[length][real]" id="pre_length" />&nbsp;&nbsp;&nbsp;<label for="precision">保留位数：</label><input type="text" class="input" size="20" name="field[precision]" id="precision" />（字段长度、保留位数均为整数）
            </td>
        </tr>
        <tr id="field_value">
            <th width="100">字段默认值：</th>
            <td>
                <input type="text" class="input" size="20" name="field[value]" />
            </td>
        </tr>
     </table>

    <!-- 特殊属性 -->
    <div class="Item hr">
        <div class="current"><?php echo ($model['name']); ?>（<?php echo ($model['tbl_name']); ?>）- 字段特殊属性</div>
    </div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1">
        <tr class="untext_index">
            <th width="100">添加索引：</th>
            <td>
                <label><input type="radio" name="field[is_index]" value="0" checked="checked" /> 否</label> &nbsp; <label><input type="radio" name="field[is_index]" value="1" /> 是</label>
            </td>
        </tr>
        <tr class="untext_index">
            <th width="100">是否唯一：</th>
            <td>
                <label><input type="radio" name="field[is_unique]" value="0" checked="checked" /> 否</label> &nbsp; <label><input type="radio" name="field[is_unique]" value="1" /> 是</label>
            </td>
        </tr>
        <tr>
            <th width="100">是否必填：</th>
            <td>
                <label><input type="radio" name="field[is_require]" value="0" checked="checked"/> 否</label> &nbsp; <label><input type="radio" name="field[is_require]" value="1" /> 是</label>
            </td>
        </tr>
        <tr>
            <th width="100">列表中显示：</th>
            <td>
                <label><input type="radio" name="field[is_list_show]" value="0"/> 否</label> &nbsp; <label><input type="radio" name="field[is_list_show]" value="1" checked="checked" /> 是</label> （设置成"是"，则将会在模型数据管理列表中显示出该字段的数据）
            </td>
        </tr>
        <tr>
            <th width="100">自动过滤函数：</th>
            <td>
                <select name="field[auto_filter]" width="180">
                    <option value="" selected>选择自动过滤函数</option>
                    <?php if(is_array($filters)): $i = 0; $__LIST__ = $filters;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$filter): $mod = ($i % 2 );++$i;?><option value="<?php echo ($filter); ?>"><?php echo ($filter); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>（可自定义过滤函数）
            </td>
        </tr>
        <tr>
            <th width="100">自动填充函数：</th>
            <td>
                <select name="field[auto_fill]"  width="180">
                    <option value="" selected>选择自动填充函数</option>
                    <?php if(is_array($fills)): $i = 0; $__LIST__ = $fills;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$fill): $mod = ($i % 2 );++$i;?><option value="<?php echo ($fill); ?>"><?php echo ($fill); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
                <select name="field[fill_time]">
                    <option value="both">插入或更新数据时</option>
                    <option value="insert">插入数据时</option>
                    <option value="update">更新数据时</option>
                </select>
                （可自定义填充函数）
            </td>
        </tr>
    </table>

    <!-- 表单显示 -->
    <div class="Item hr">
        <div class="current"><?php echo ($model['name']); ?>（<?php echo ($model['tbl_name']); ?>）- 表单显示属性</div>
    </div>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table1" id="form_opts_tbl">
        <tr id="td_is_show">
            <th width="100">显示表单域：</th>
            <td>
               <label><input type="radio" name="input[is_show]" value="0" class="input_is_show" /> 否</label> &nbsp; <label><input type="radio" name="input[is_show]" value="1" checked="checked" class="input_is_show" /> 是</label>
            </td>
        </tr>
        <tr>
            <th width="100">表单域类型：</th>
            <td>
                <select name="input[type]" id="input_type">
                  <option value="text" selected>单行文本框(text)</option>
                  <option value="password">密码框(password)</option>
                  <option value="select">下拉框(select)</option>
                  <option value="radio">单选框(radio)</option>
                  <option value="checkbox">复选框(checkbox)</option>
                  <option value="textarea">多行文本框(textarea)</option>
                  <option value="editor">编辑器(editor)</option>
                  <option value="file">文件(file)</option>
                  <option value="date">日期(date)</option>
                  <option value="relation_select">下拉外表关联字段(relation_select)</option>
                </select>
            </td>
        </tr>

        <!-- 单行文本框(text)的内容 -->
        <tr class="input_text input_password">
            <th width="100">表单域长度：</th>
            <td>
                <input type="text" class="input" size="20" name="input[width][text_pwd]" placeholder="默认size为20" />
            </td>
        </tr>
        <!-- 单行文本框(text)的内容 -->
        <tr class="input_text">
            <th width="100">表单域默认值：</th>
            <td>
                <input type="text" class="input" size="20" name="input[value]" />
            </td>
        </tr>

        <!-- 选择默认值 -->
        <tr class="input_select input_radio input_checkbox">
            <th width="100">可选择的默认值：</th>
            <td><textarea id="content" class="jq_watermark" rows = "5" cols="68" name="input[opt_value]" placeholder="表单域值:显示文本:default（每行一个选项）<br/>1:apple<br/>2:banana:default<br/>3:orange<br/>"></textarea></td>
        </tr>

        <!-- 多行文本框 -->
        <tr class="input_textarea">
            <th width="100">表单域规格：</th>
            <td>
                <label for="textarea_width">宽度：</label><input type="text" class="input" size="20" name="input[width][textarea]" id="textarea_width" placeholder="cols" />&nbsp;&nbsp;&nbsp;<label for="textarea_height">高度：</label><input type="text" class="input" size="20" name="input[height][textarea]" id="textarea_height" placeholder="rows" />
            </td>
        </tr>

        <!-- 编辑器 -->
        <tr class="input_editor">
            <th width="100">编辑器规格：</th>
            <td>
                <label for="editor_width">宽度：</label><input type="text" class="input" size="20" name="input[width][editor]" id="editor_width" placeholder="默认cols为68" />&nbsp;&nbsp;&nbsp;<label for="editor_height">高度：</label><input type="text" class="input" size="20" name="input[height][editor]"  id="editor_height" placeholder="默认rows为20" />
            </td>
        </tr>
        <tr class="input_editor">
            <th width="100">编辑器类型：</th>
            <td>
               <label><input type="radio" name="input[editor]" value="all" checked="checked" /> 全功能型</label> &nbsp; <label><input type="radio" name="input[editor]" value="simple" /> 简洁型</label>
            </td>
        </tr>

        <!-- 图片、文件类型 -->
        <tr class="input_file">
            <th width="100">上传大小：</th>
            <td>
                <input type="text" class="input" size="20" name="input[width][upload]" />（可以限制上传文件的大小，单位Mb）
            </td>
        </tr>

        <!-- 外联下拉 -->
        <tr class="input_relation_select">
            <th width="100">关联的模型：</th>
            <td>
                <select id="relation_model" name="field[relation_model]">
                    <option value="" selected>请选择关联模型</option>
                    <?php if(is_array($models)): $i = 0; $__LIST__ = $models;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><option value="<?php echo ($item['id']); ?>"><?php echo ($item['name']); ?>（<?php echo ($item['tbl_name']); ?>）</option><?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
            </td>
        </tr>
        <tr class="sub_relation_select">
            <th width="100">关联的字段：</th>
            <td>
                <select id="relation_field" name="field[relation_field]">
                    <option value=""></option>
                </select>
            </td>
        </tr>
        <tr class="sub_relation_select">
            <th width="100">显示的字段：</th>
            <td>
                <select id="relation_value" name="field[relation_value]">
                    <option value=""></option>
                </select>
            </td>
        </tr>
        <!-- 表单域替换 -->
        <tr>
            <th width="100">表单域HTML：</th>
            <td><textarea id="content" rows="4" cols="68" name="input[html]" placeholder="请输入正确的表单域HTML代码，留空则系统自动成"></textarea></td>
            </td>
        </tr>

        <!-- 表单域显示顺序 -->
        <tr>
            <th width="100">显示顺序：</th>
            <td>
                <input type="text" class="input" size="20" name="input[show_order]" value="1"/>（越小表单域位置显示越前，必需大于0）
            </td>
        </tr>
    </table>
    <input type="hidden" name="field[model_id]" value="<?php echo ($model['id']); ?>" />
</form>
<div class="commonBtnArea" >
    <button class="btn submit">提交</button>
</div>

<script type="text/javascript">
function submitForm(action) {
    $(".submit").click(function(){
        commonAjaxSubmit("/pc/admin.php/Admin/Fields/" + action);
        return false;
    });
}

$(function(){
    $("#auto_filter option[value='<?php echo ($field['auto_filter']); ?>']").attr('selected', true);
    $("#auto_fill option[value='<?php echo ($field['auto_fill']); ?>']").attr('selected', true);
    $("#fill_time option[value='<?php echo ($field['fill_time']); ?>']").attr('selected', true);
    $("#field_type option[value='<?php echo ($field['type']); ?>']").attr('selected', true);
    toggle_type_length('<?php echo ($field['type']); ?>' || "VARCHAR");
    $("#field_type").change(function() {
        toggle_type_length($(this).val());

        if (-1 == $(this).val().indexOf('TEXT')) {
            $("#field_value").show();
            $('.untext_index').show();
        } else {
            $("#field_value").hide();
            $('.untext_index').hide();
        }
    });
    $("#field_type").trigger("change");

    $("#check_field_name").click(function(){
        $.getJSON("/pc/admin.php/Admin/Fields/checkFieldName", { field_name: $("#field_name").val(), model_id: "<?php echo ($model['id']); ?>", field_id: "<?php echo ($field['id']); ?>" }, function(json){
            $("#check_field_name").css("color",json.status==1?"#0f0":"#f00").html(json.info);
        });
    });

    $("#check_field_label").click(function(){
        $.getJSON("/pc/admin.php/Admin/Fields/checkFieldLabel", { field_label: $("#field_label").val(), model_id: "<?php echo ($model['id']); ?>", field_id: "<?php echo ($field['id']); ?>" }, function(json){
            $("#check_field_label").css("color",json.status==1?"#0f0":"#f00").html(json.info);
        });
    });

    $(".sub_relation_select").hide();
    $("#relation_model").change(function() {
        // 所有可选择的model
        var models = eval('<?php echo json_encode($models);?>');
        var selected = $(this).val();

        if (!selected) {
            $(".sub_relation_select").hide();
            return ;
        }

        $("#relation_field option").remove();
        $("#relation_value option").remove();
        for (i = 0; i < models.length; i++) {
            if (models[i].id == selected) {
                for (j = 0; j < models[i].fields.length; j++) {
                    $("#relation_field").append('<option value="' + models[i].fields[j].name +'">' + models[i].fields[j].name + '</option>');
                    $("#relation_value").append('<option value="' + models[i].fields[j].name +'">' + models[i].fields[j].name + '</option>');
                }
            }
        }

        $("#relation_field").val('<?php echo ($field['relation_field']); ?>' || '');
        $("#relation_value").val('<?php echo ($field['relation_value']); ?>' || '');
        $(".sub_relation_select").show();
    });
    $("#relation_model").val('<?php echo ($field['relation_model']); ?>' || '');
    $("#relation_model").trigger("change");

    // 表单类型
    var dom = ['.input_text', '.input_password', '.input_select',
               '.input_radio', '.input_checkbox', '.input_textarea',
               '.input_editor', '.input_file', '.input_date',
               '.input_relation_select'];
    var domLength = dom.length;

    var input_type = '<?php echo ($input['type']); ?>' || $("#input_type").val();
    toggle_input_field(input_type);
    $("#input_type option[value='<?php echo ($input['type']); ?>']").attr("selected", true);
    var html = $("#html").val();
    var curType = $("#input_type").val();
    $("#input_type").change(function() {
        if ($(this).val() == curType) {
            $("#html").val(html || '');
        } else {
            $("#html").val('');
        }
        toggle_input_field($(this).val());
    });

    var current = $("#td_is_show").siblings(":visible");
    $(".input_is_show").change(function() {
        if (1 == $(this).val()) {
            current.show();
        } else {
            current = $("#td_is_show").siblings(":visible");
            current.hide();
        }
    });
    $(".input_is_show[value=<?php echo ($input['is_show']); ?>]").attr("checked", true);
    $(".input_is_show[value=<?php echo ($input['is_show']); ?>]").trigger("change");

    function toggle_type_length(type) {
        if ("TEXT" == type
            || "MEDIUMTEXT" == type
            || "LONGTEXT" == type
            || "DATE" == type
            || "DATETIME" == type) {
            $("#field_precision").hide();
            $("#field_length").hide();
        } else if ("FLOAT" == type || "DOUBLE" == type) {
            $("#field_precision").show();
            $("#field_length").hide();
        } else {
            $("#field_precision").hide();
            $("#field_length").show();
        }
    }

    function toggle_input_field(val) {
        var type = ".input_" + val;
        for (var i = 0; i < domLength; i++) {
            if (type == dom[i]) {
                $(dom[i]).show();
            } else {
                $(dom[i]).hide();
            }
        }

        if (type != dom[9]) {
            $(".sub_relation_select").hide();
        }

        if (type == dom[0]) {
            $(dom[1]).show();
        } else if (type == dom[2] || type == dom[3] || type == dom[4]) {
            $(dom[2]).show();
        } else if (type == dom[7]) {
            $(dom[7]).show();
        } else if (type == dom[6]) {
            $(dom[6]).show();
        } else if (type == dom[9]) {
            $("#relation_model").trigger("change");
        }
    }
});
</script>

<script type="text/javascript">
$(function(){
    submitForm("create");
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