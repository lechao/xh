/**
 * Created by ADKi on 2016/9/19 0019.
 */
$(function () {
    /*站点地址PC*/
    var url = 'http://192.168.1.33/Website-ShopNC-2015/public/' +
        'index.php?pc=1';

    /*顶部导航*/
    var html_head = '';
    html_head = '' +
       '<ul class="navhead">' +
           '<li class="menuicon">' +
               '<label for="menustate">' +
               '<p class="menuanchor-open"><img src="image/menu.png" alt=""></p>' +
               '<p href="#" class="menuanchor-close">X</p>' +
               '</label>' +
            '</li>' +
           '<li class="logo"><img src="image/logo.png" alt="ShopNC-logo"></li>' +
           '<li class="tel"><img onclick="location=\'tel:4008801509\'" src="image/tel.png" alt="tel"></li>' +
       '</ul>' +
       '<ul class="list">' +
           '<li class="item_menu"><a class="item_link" href="./B2B2C.html">B2B2C多用户商城系统</a></li>' +
           '<li class="item_menu"><a class="item_link" href="./Bizpower.html">Java多用户商城系统</a></li>' +
           '<li class="item_menu"><a class="item_link" href="./APP.html">移动应用</a></li>' +
           '<li class="item_menu"><a class="item_link" href="./solutions.html">电商解决方案</a></li>' +
           '<li class="item_menu"><a class="item_link" href="./about.html">关于我们</a></li>' +
       '</ul>';

    $('#ncnav').append(html_head);

    /*底部*/
    var html_footer = '';
    html_footer = '' +
        '<div class="line"></div>' +
        '<div class="tit">ShopNC</div>' +
        '<ul>' +
            '<li><a href="./shopnc_ qrcode.html"><img src="image/weixin.png" alt=""></a></li>' +
            '<li><a href="http://t.qq.com/iamshopnc"><img src="image/txwb.png" alt=""></a></li>' +
            '<li><a href="http://weibo.com/iamshopnc?is_hot=1"><img src="image/xlwb.png" alt=""></a></li>' +
        '</ul>' +
        '<div class="text clear">' +
            '<p>售前咨询热线:400-880-1509</p>' +
            '<p style="padding-top:0px; margin-bottom:0;">售后服务电话:022-58306929</p>' +
            '<span style="margin-bottom:20px;">工作时间：周一至周五(08:30~18:00)</span>' +
            '<span>高新技术企业：天津市网城天创科技有限责任公司  </span>' +
            '<span>证书编号：GR20151200027</span>' +
            '<span>备案许可证号：津ICP备10001600号-2</span>' +
            '<span>版权所有 2007-2016 © 天津市网城天创科技有限责任公司</span>' +
        '</div>' +
        ' <div class="qrcode-btn"><a href="./shopnc_ qrcode.html">点击关注官方公众号</a></div>' +
        '</div>' +
        '<div class="btn" id="pc_btn">' +
            '<a href="'+ url +'" class="pc_btn"></a>' +
            '<a href="./index.html" class="wap_btn"></a>' +
        '</div>';
    $('#footer').append(html_footer);

    /*底部菜单*/
    var html_footer_menu = '';
    html_footer_menu = '' +
        '<a class="home" href="./index.html">返回首页</a>' +
        '<a class="dial" href="tel:4008801509">一键拨号</a>' +
        '<a class="online" href="./apply.html">在线咨询</a></span></a>' +
        '<a class="back_top" id="returnTop" href="javascript:$(document.body).animate({\'scrollTop\':0},1000);">返回顶部</a>';

    $('#footer_menu').append(html_footer_menu);

});

