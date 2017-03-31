// JavaScript Document
$(function(){
//顶部常用操作单折叠隐藏
	$(".nav-menu-btn > a").on("click", function(){
	    if ($(".nav-menu-btn").hasClass('unfold')) {
	        $(".nav-menu-btn").removeClass("unfold");
	    } else {
            $(".nav-menu-btn").addClass("unfold");
	    }
	});
	$('.nav-menu-mk').on("click", function(){
        $(".nav-menu-btn").removeClass("unfold");
	});
//一级菜单折叠隐藏
	$(".sidebar-fold > a").on("click", function(){
	    if ($(".framework-body").hasClass('framework-sidebar-full')) {
	        setCookie('sidebar', 'false');
	        $(".framework-body").removeClass("framework-sidebar-full");
	    } else {
            setCookie('sidebar', 'true');
            $(".framework-body").addClass("framework-sidebar-full");
	    }
	});
//一级菜单竖向收起
	$(".sidebar-title > a").on("click", function(){
	    var _sidebar = $(this).parents('.sidebar-nav');
	    if (_sidebar.hasClass('fold')) {
	        _sidebar.removeClass("fold");
	    } else {
	        _sidebar.addClass("fold");
	    }
	});
//二级菜单折叠隐藏
	$(".product-fold").on("click", function(){
	    if ($(".framework-product").hasClass('framework-product-full')) {
            setCookie('product', 'false');
	        $(".framework-product").removeClass("framework-product-full");
	    } else {
            setCookie('product', 'true');
            $(".framework-product").addClass("framework-product-full");
	    }
	});
//工单辅助信息折叠隐藏
	$(".ticket-details > .other > dt > a").on("click", function(){
	    var _sidebar = $(this).parents('.ticket-details > .other');
	    if (_sidebar.hasClass('unfold')) {
	        _sidebar.removeClass("unfold");
	    } else {
	        _sidebar.addClass("unfold");
	    }
	});

    //全选
    $(document).on('click', '.checkall', function(){
        var _self = this;
        $('.checkitem').each(function(){
            if (!this.disabled)
            {
                $(this).prop('checked', _self.checked);
            }
        });
        $('.checkall').prop('checked', this.checked);
    });

});
/**
 * 消息提醒
 */
(function($) {
    $.extend($, {
        /**
         * 滚动header固定到顶部
         */
        ncDialog: function(options) {
            var defaults = {
                    msg : '',
                    callback : null
            }
            var options = $.extend({}, defaults, options);
            console.log(options.msg);
            if (options.msg == '') return false;
            var _tip = $('<div class="tip"><div class="content_error"><span class="block"><i class="block right"></i>信息提示</span><div class="clear"></div><h1>' + options.msg + '</h1><div class="close"><i>确定</i></div></div></div>');
            _tip.click(function(){
                if (typeof options.callback == 'function') {
                	options.callback();
                } else {
                	$(this).remove();
                }
            });
            _tip.appendTo('body');
            return true;
        }
    });
})(jQuery);

function setCookie(name,value)
{
    var Days = 30;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days*24*60*60*1000);
    document.cookie = name + "="+ escape (value) + ";expires=" + exp.toGMTString();
} 