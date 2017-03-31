<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="robots" content="all" />
<meta name="author" content="" />
<meta name="copyright" content="" />
<meta name="keywords" content="<?php echo C('SITE_KEYWORD');?>" />
<meta name="description" content="<?php echo C('SITE_DESCRIPTION');?>" />
<link rel="shortcut icon" href="images/logo-ico.png">
<title><?php echo C('SITE_TITLE');?></title>
<link href="/pc/Public/Static/css/base.css"  rel="stylesheet">
<link href="/pc/Public/Static/css/home.css"  rel="stylesheet">
<link href="/pc/Public/Static/css/animate.css"  rel="stylesheet">
<link href="/pc/Public/Static/css/font/css/font-awesome.css"  rel="stylesheet">
<script src="/pc/Public/Static/js/html5.js" ></script>
<script src="/pc/Public/Static/js/jquery.js" ></script>
<script src="/pc/Public/Static/js/shopnc.js" ></script>
<script src="/pc/Public/Static/js/slider.js" ></script>
</head>
<body>
<div class="index-top">
  <div class="top-box">
    <div class="left">售前电话：<b><?php echo ($config["pre_phone"]); ?></b></div>
    <div class="right">
            <span class="mr30"><a href="<?php echo U('login');?>"  style="color:#ddddde" title="会员登录" target="_blank">会员登录</a> | <a href="<?php echo U('login-register');?>"  style="color:#ddddde" title="注册" target="_blank">注册</a></span>
          </div>
  </div>
</div>
<div class="topnav" id="topnav"> 
  <!--<div class="clear"></div>-->
  <div class="top-wrap">
    <div class="top-logo"><a href="<?php echo U('index');?>"  title="ShopNC" ><img src="<?php echo get_image_path($config['logo']);?>"  width="auto" height="100%" alt="<?php echo ($config["company_name"]); ?>"/></a></div>
    <ul class="top-nav primary">
      <li class="nav-list"><a href="<?php echo U('index');?>"  class="nav-list-link" title="首页">首页</a></li>
      <li class="nav-list nav-l" style="position:relative;"><a href="javascript:void(0);" class="nav-list-link nav-arrow" title="产品">产品<i></i></a>
        <div class="clear"></div>
        <div class="sub">
          <div class="little-up"></div>
          <div class="cont"> <a href="<?php echo U('b2b2c');?>"  title="B2B2C多用户商城系统">
            <dl style="border-bottom: dotted 1px #CCC;" >
              <dt>B2B2C多用户商城系统</dt>
              <dd>PHP语言开发，功能强大，易用性强，电商创业最佳选择。</dd>
            </dl>
            </a>
            <!-- <a href="mall-java.html"  title="Java多用户商城系统">
              <dl>
                <dt>Java多用户商城系统</dt>
                <dd>Java技术，安全、稳定、结构合理、高并发性、强扩展性、集群部署。</dd>
              </dl>
            </a>  -->
          </div>
        </div>
      </li>
      <li class="nav-list"><a href="<?php echo U('solution-list');?>"  class="nav-list-link" title="解决方案">解决方案</a>
        <div class="clear"></div>
      </li>
      <li class="nav-list"><a href="<?php echo U('case');?>"  class="nav-list-link" title="成功案例">成功案例</a></li>
      <li class="nav-list"><a href="<?php echo U('cooperation');?>"  class="nav-list-link" title="合作代理">合作伙伴</a></li>
      <li class="nav-list"><a href="<?php echo U('aboutus');?>"  class="nav-list-link" title="关于我们">关于我们</a></li>
    </ul>
  </div>
</div>
<div class="clear"></div>



<link href="/pc/Public/Static/css/case.css"  rel="stylesheet">
<script type="text/javascript" src="/pc/Public/Static/js/jquery-1.9.1.js" ></script>
<script type="text/javascript">
$(function (){
  $(".case-nav a").click(function (){
      var tabLiArr = $(this).parent().find("a");
      var tabShowArr = $(this).parents(".tabbar").nextAll(".child-tab-show");
      var index = $.inArray(this,tabLiArr);
      if($(tabShowArr).eq(index)){
        $(tabLiArr).removeClass("current").eq(index).addClass("current");
        $(tabShowArr).addClass("hide").eq(index).removeClass("hide");
      }
  })
  
})
</script>
<style>
.hide {
	display: none !important;
}
</style>
<div class="case-top-banner"></div>

<div class="lf-wrap">
  <div class="lf-content">
    <div class="lf-title">
      <h3>优秀客户案例</h3>
    </div>
    <div class="case-nav tabbar"> <b>按分类查看：</b> |<a class="current" href="javascript:void(0)">综合百货</a> |<a href="javascript:void(0)">跨境零售</a> |<a href="javascript:void(0)">电视传媒</a> |<a href="javascript:void(0)">社区O2O</a> |<a href="javascript:void(0)">农业电商</a> |<a href="javascript:void(0)">工业制造业</a> |<a href="javascript:void(0)">汽车行业</a> |<a href="javascript:void(0)">母婴</a> |<a href="javascript:void(0)">医药</a> |<a href="javascript:void(0)">家具建材</a> |<a href="javascript:void(0)">其他</a> </div>
    <div class="lf-more-case child-tab-show">
      <ul class="lf-more-case-con">
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/zhbh_01.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>卡当商城</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/zhbh_02.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>多汇网</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/zhbh_03.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>盼达网</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/zhbh_04.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>杭州意法商城</h3>
          </div>
          </a> </li>
       <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/zhbh_05.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>飞虎乐购</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/zhbh_06.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>天城网</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/zhbh_07.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>德州百货商城</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/zhbh_08.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>中铁快运商城</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/zhbh_09.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3> 美菱电器购实惠</h3>
          </div>
          </a> </li>
      </ul>
    </div>
    <div class="lf-more-case child-tab-show hide">
      <ul class="lf-more-case-con">
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/kjls_01.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>优递爱</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/kjls_02.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>跨境网</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/kjls_03.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>万国优品</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/kjls_04.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>万国万购</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/kjls_05.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>航投臻品</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/kjls_06.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>国际泛</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/kjls_07.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>圣地全球购</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/kjls_08.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>青岛万贸城</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/kjls_09.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>象米国际</h3>
          </div>
          </a> </li>
<!--        <li style="display: list-item;"> <a target="_blank" href="http://www.zhongdamen.com/ ">
          <div class="lf-case-img"> <img src="http://www.shopnc.net//pc/Public/Static/images/case/kjls_10.jpg" alt=""> </div>
          <div class="lf-case-info">
            <h3>中大门</h3>
          </div>
          </a> </li>-->
      </ul>
    </div>
    <div class="lf-more-case child-tab-show hide">
      <ul class="lf-more-case-con">
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/dscm_01.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>央广购物 </h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/dscm_02.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>深圳宜和购物</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/dscm_03.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>河南广电喜买商城</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/dscm_04.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>澳门电讯商城</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/dscm_05.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>新疆大晨报我来购</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"> <a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/dscm_06.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>广电优品</h3>
          </div>
          </a> </li>
      </ul>
    </div>
    <div class="lf-more-case child-tab-show hide">
      <ul class="lf-more-case-con">
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/sq_01.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>七巧汇</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/sq_02.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>多块好省商城</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/sq_03.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>到家乐商城</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/sq_04.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>爱美一族</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/sq_05.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>哈尔滨铁路局火车头商城 </h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/sq_06.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>淘青岛商城</h3>
          </div>
          </a> </li>
      </ul>
    </div>
    <div class="lf-more-case child-tab-show hide">
      <ul class="lf-more-case-con">
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/nyds_01.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>易牧网 </h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/nyds_02.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>乐村淘</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/nyds_03.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>翠鲜缘水果商城</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/nyds_04.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>巴扎网</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/nyds_05.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>锦绣大地农贸市场</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/nyds_06.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>农村商贸综合服务平台</h3>
          </div>
          </a> </li>
      </ul>
    </div>
    <div class="lf-more-case child-tab-show hide">
      <ul class="lf-more-case-con">
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/gyzz_01.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>百利工业品</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/gyzz_02.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>鲁西化工</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/gyzz_03.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>云筑网</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/gyzz_04.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>仪品汇</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/gyzz_05.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3> 安特百货</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/gyzz_06.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>爱锐网</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/gyzz_07.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>沂川工业</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/gyzz_08.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>东方易塑</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/gyzz_09.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>3号线煤炭网</h3>
          </div>
          </a> </li>
      </ul>
    </div>
    <div class="lf-more-case child-tab-show hide">
      <ul class="lf-more-case-con">
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/car_01.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>车家佳</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/car_02.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>庞大汽车 </h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/car_03.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>易汽配商城</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/car_04.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>东风日产车巴巴</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href=" " >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/car_05.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>甲乙丙丁商城</h3>
          </div>
          </a> </li>
      </ul>
    </div>
    <div class="lf-more-case child-tab-show hide">
      <ul class="lf-more-case-con">
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/baby_01.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>贝因美妈妈购</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/baby_02.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>园圈网 </h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/baby_03.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>61儿童商城</h3>
          </div>
          </a> </li>
      </ul>
    </div>
    <div class="lf-more-case child-tab-show hide">
      <ul class="lf-more-case-con">
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/yy_01.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>修正药业</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href=" " >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/yy_02.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>华佗医药网</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/yy_03.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>食安北京</h3>
          </div>
          </a> </li>
      </ul>
    </div>
    <div class="lf-more-case child-tab-show hide">
      <ul class="lf-more-case-con">
<!--        <li style="display: list-item;"><a target="_blank" href="http://www.jcjjw.com">
          <div class="lf-case-img"> <img src="http://www.shopnc.net//pc/Public/Static/images/case/jc_01.jpg" alt=""> </div>
          <div class="lf-case-info">
            <h3>建材竞价网</h3>
          </div>
          </a> </li>-->
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/jc_02.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>安乐窝</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/jc_03.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>狂装网</h3>
          </div>
          </a> </li>
   <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/jc_04.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>良彬建材</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/jc_05.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>数联网</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/jc_06.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>乐聚会</h3>
          </div>
          </a> </li>
      </ul>
    </div>
    <div class="lf-more-case child-tab-show hide">
      <ul class="lf-more-case-con">
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/qt_01.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>OK无忧商城 </h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/qt_02.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>金柚网福利商城</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/qt_03.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>灯饰界</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/qt_04.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>一团网 </h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/qt_05.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>畅游江苏</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/qt_06.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>亲亲网</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/qt_07.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>易来邦商城</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/qt_08.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>分红全球购 </h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/qt_09.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>南电商城</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/qt_10.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>水火土陶瓷商城</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/qt_11.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>山东新华书店</h3>
          </div>
          </a> </li>
        <li style="display: list-item;"><a target="_blank" href="" >
          <div class="lf-case-img"> <img src="/pc/Public/Static/images/case/qt_12.jpg"  alt=""> </div>
          <div class="lf-case-info">
            <h3>金牌商标代理</h3>
          </div>
          </a> </li>
      </ul>
    </div>

  </div>
</div>





<div class="footer">
  <div class="footer-container">
    <div class="left-side">
      <div class="site-name">
        <a href="###"><img src="/pc/Public/Static/images/foot-logo.png"  alt="<?php echo ($config["company_name"]); ?>"/></a>
        <!--<a href="javascript:;"  target="_blank"><img src="/pc/Public/Static/images/sina_logo.png"  alt="新浪微博"/></a>
        <a href="javascript:;"  target="_blank"><img src="/pc/Public/Static/images/tencent_logo.png"  alt="腾讯微博"/></a>-->
      </div>
      <div style="padding-bottom:8px; font-size:13px; font-weight:normal">高新技术企业：<?php echo ($config["company_name"]); ?>&nbsp;&nbsp;&nbsp;<!-- 证书编号：GR201512000273 --></div>
     <div class="site-intro">备案许可证号：<?php echo ($config["beian"]); ?></div>
     <div class="site-intro">版权所有 <?php echo ($config["copyright"]); ?></div>
    </div>
    <div class="right-side">
      <dl>
        <dt>售前咨询热线</dt>
        <dd><i class="fa fa-phone"></i><?php echo ($config["pre_phone"]); ?></dd>
        <dt>售后服务电话</dt>
        <dd><i class="fa fa-phone"></i><?php echo ($config["after_phone"]); ?></dd>
        <dd class="worktime"><?php echo ($config["worktime"]); ?></dd>
      </dl>
      <div class="QRcode"><img src="<?php echo get_image_path($config['qrcode']);?>"  alt=<?php echo ($config["company_name"]); ?>官网微信号码"/>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;加客服微信<br/>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;随时随地咨询</p>
      </div>
    </div>
  </div>
</div>


<div class="main-im">
  <div id="open_im" class="open-im">&nbsp;</div>
  <div class="im_main" id="im_main">
    <div id="close_im" class="close-im">
        <a href="javascript:void(0);" title="点击关闭">&nbsp;</a>
    </div>
    <a href="javascript:;"  target="_blank" class="im-qq qq-a" title="B2B2C销售咨询"> <span>QQ客服咨询</span>
    <div class="qq-container"></div>
    <div class="qq-hover-c"><img class="img-qq" src="/pc/Public/Static/images/im/qq.png" ></div>
    </a>

    <div class="im-tel">
      <div class="b2b">
        <div>销售咨询</div>
        <?php if(is_array($pre_qq)): foreach($pre_qq as $key=>$vo): ?><div class="tel-num">
          <a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($vo); ?>&site=qq&menu=yes" >
                <img border="0" src="/pc/Public/Static/images/im/qq_ico.png"  alt=""/>
          </a>
        </div><?php endforeach; endif; ?>
      </div>
  
     <div class="solution">
        <div class="tel-num" style="margin:16px 0px 6px"><a target="_blank" href="jhttp://wpa.qq.com/msgrd?v=3&uin=2850515883&site=qq&menu=yes" >
          <img border="0" src="/pc/Public/Static/images/im/qq_ico.png"  alt="解决方案"/></a>
        </div>
      </div>

      <div class="b2b">
      <div>售后服务</div>
            <?php if(is_array($aft_qq)): foreach($aft_qq as $key=>$val): ?><div class="tel-num">
                <a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($val); ?>&site=qq&menu=yes" >
                      <img border="0" src="/pc/Public/Static/images/im/qq_ico.png"  alt=""/>
                </a>
              </div><?php endforeach; endif; ?>
      </div>
    </div>
    <div class="im-footer" style="position:relative">
      <div class="weixing-container">
        <div class="weixing-show">
          <div class="weixing-txt">微信扫一扫<br>
            随时随地咨询</div>
          <img class="weixing-ma" src="<?php echo get_image_path($config['qrcode']);?>" >
          <div class="weixing-sanjiao"></div>
          <div class="weixing-sanjiao-big"></div>
        </div>
      </div>
      <div class="go-top"><a href="javascript:;" title="返回顶部"></a> </div>
      <div style="clear:both"></div>
    </div>
  </div>
</div>



<div id="DEMOBox" class="dialog dialog0">
  <div class="dialog-faq">
    <p class="welcome">尊敬的用户，欢迎您光临ShopNC官方网站，很高兴您对我们的产品有兴趣。<br/>
      如需体验商城具体功能，请联系客服人员<a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'"  target="_blank" title="客服咨询1"><img border="0" src="/pc/Public/Static/images/im/qq_ico.png" /></a><a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'"  target="_blank" title="客服咨询2"><img border="0" src="/pc/Public/Static/images/im/qq_ico.png" /></a>提供相关测试地址及账号。</p>
    <p>你也可以直接拨打我们的免费热线：<a href="tel:4008801509"><i class="fa fa-phone"></i>400-880-1509</a>立即询问。</p>
  </div>
  <div class="demosite">
    <ul>
      <li class="b2b2c">
        <div class="pic"></div>
        <h3>B2B2C电商系统</h3>
        <a href="javascript:if(confirm('http://b2b2c.shopnctest.com/dema'))window.location='http://b2b2c.shopnctest.com/dema'"  class="btn" target="_blank">演示体验</a>
        <p><a href="javascript:if(confirm('http://doc.shopnc.net/b2b2c'))window.location='http://doc.shopnc.net/b2b2c'"  target="_blank">在线帮助</a></p>
      </li>
      <li class="c2c">
        <div class="pic"></div>
        <h3>B2B2C多用户商城</h3>
        <a href="javascript:if(confirm('http://pan.baidu.com/s/1gd1i1Dx'))window.location='http://pan.baidu.com/s/1gd1i1Dx'"  class="btn" target="_blank">下载试用</a>
        <p><span>在线帮助</span> 
        <a href="javascript:if(confirm('http://doc.shopnc.net/shopnc2013/shop/'))window.location='http://doc.shopnc.net/shopnc2013/shop/'"  target="_blank">商城</a> | 
        <a href="javascript:if(confirm('http://doc.shopnc.net/shopnc2013/circle/'))window.location='http://doc.shopnc.net/shopnc2013/circle/'"  target="_blank">圈子</a> | 
        <a href="javascript:if(confirm('http://doc.shopnc.net/shopnc2013/microshop/'))window.location='http://doc.shopnc.net/shopnc2013/microshop/'"  target="_blank">微商城</a> | 
        <a href="javascript:if(confirm('http://doc.shopnc.net/shopnc2013/cms/'))window.location='http://doc.shopnc.net/shopnc2013/cms/'"  target="_blank">CMS</a></p>
      </li>
    </ul>
  </div>
</div>

<div id="HBox" class="dialog dialog1">
  <div class="dialog-faq">
    <p class="welcome">尊敬的用户，欢迎您光临ShopNC官方网站，很高兴您对我们的产品有兴趣。<br/>
      还请您填写以下信息，我们会及时给您提供详细资料和解答。</p>
    <p>你也可以直接拨打我们的免费热线：<a href="tel:4008801509"><i class="fa fa-phone"></i>400-880-1509</a>客服<a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'"  target="_blank" title="客服咨询1"><img border="0" src="/pc/Public/Static/images/im/qq_ico.png" /></a><a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'"  target="_blank" title="客服咨询2"><img border="0" src="/pc/Public/Static/images/im/qq_ico.png" /></a>。</p>
  </div>
  <form action="" method="post" onsubmit="return false;" id="apply_form">
    <input name="nchash" type="hidden" value="22ba1c70" />
    <div class="dialog-form">
      <dl>
        <dt>联系人<font color="#ff0000">*</font></dt>
        <dd>
          <input type="text" name="name" id="apply_name" value="" class="input-txt name" />
        </dd>
      </dl>
      <dl>
        <dt>联系QQ<font color="#ff0000">*</font></dt>
        <dd>
          <input type="text" name="qq" id="apply_qq" value="" class="input-txt qq" />
        </dd>
      </dl>
      <dl>
        <dt>常用邮箱<font color="#ff0000">*</font></dt>
        <dd>
          <input type="text" name="email" id="apply_email" value="" class="input-txt email" />
        </dd>
      </dl>
      <dl>
        <dt>手机号码<font color="#ff0000">*</font></dt>
        <dd>
          <input type="text" name="phone" id="apply_phone" value="" class="input-txt phone" />
        </dd>
      </dl>
      <dl>
        <dt>验证码<font color="#ff0000">*</font></dt>
        <dd>
          <input type="text" name="code" value="" id="apply_code" class="input-txt code w60" />
          <img src="" name="applyimage" border="0"/> <a href="JavaScript:void(0);" id="for-a" onclick="$('img[name=\'applyimage\']').attr('src', 'index.php?act=seccode&op=makecode&nchash=22ba1c70&t=' + Math.random());">换个</a> </dd>
      </dl>
      <input type="submit" value="确认提交" class="submitBtn" />
    </div>
  </form>
</div>
<script src="/pc/Public/Static/js/jquery.hDialog.js" ></script> 
<script>
$(function(){
  $('.demo0').hDialog({title: 'ShopNC—产品在线演示地址 ', box:'#DEMOBox', width: 640, height: 500, boxBg: '#FAFAFA', modalBg: 'rgba(255,255,255,0.5)'});
  $('.demo1').hDialog({title: 'ShopNC—产品资料自助申请通道 ', width: 640, height: 500, boxBg: '#FAFAFA', modalBg: 'rgba(255,255,255,0.5)', resetForm:false, beforeShow:function(){
    $('img[name="applyimage"]').attr('src', 'index.php-act=seccode&op=makecode&nchash=22ba1c70.htm');
  }});
    
  //提交并验证表单
  var $el = $('.dialog1');
  $('.submitBtn').click(function() {
    var EmailReg = /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/; //邮件正则
    var PhoneReg = /^(1)[0-9]{10}$/ ; //手机正则
    var $name = $('#apply_name');
    var $qq = $('#apply_qq');
    var $email = $('#apply_email'); 
    var $phone = $('#apply_phone');
    if($name.val() == ''){
      $.tooltip('姓名还没填呢...'); $name.focus();
    }else if($qq.val() == ''){
      $.tooltip('QQ还没填呢...'); $qq.focus();
    }else if($phone.val() == ''){
      $.tooltip('手机还没填呢...'); $phone.focus();
    }else if(!PhoneReg.test($phone.val())){
      $.tooltip('手机格式错咯...'); $phone.focus();
    }else if($email.val() == ''){
      $.tooltip('邮箱还没填呢...'); $email.focus();
    }else if(!EmailReg.test($email.val())){
      $.tooltip('邮箱格式错咯...'); $email.focus();
    }else{

        $.post('', $("#apply_form").serialize(), function(date){
            $('#for-a').click();
            date = $.parseJSON(date);
            if (date.done) {
          $.tooltip('提交成功，2秒后自动关闭',2000,true);
          setTimeout(function(){
                    $('.gt_refresh_button').each(function(){
                        $(this)[0].click();
                    });
            $el.hDialog('close',{box:'#HBox'}); 
          },2000);
            } else {
                document.consult_form.reset();
                $.tooltip(date.msg);
            }
        });
    }
  });
});
</script> 
<script type="text/javascript">
    $(function(){
        var timer=null;
        var oLi = $('.top-wrap').find('li');
        oLi.eq(1).mouseout(function() {
            timer=setTimeout(function(){
                $('.sub').stop(true, true).slideUp(400);
                $('.nav-arrow i').css('transform','rotate(0)');
            },400)
        }).mouseover(function() {
            clearTimeout(timer)
            $('.sub').stop(true, true).slideDown(400);
            $('.nav-arrow i').css('transform','rotate(180deg)');
        });
    }());
</script> 
<script type="text/javascript">
$(document).ready( function() {
    var $topnav = $("#topnav") ; 
    $(window).scroll(function() {
      var scrollTop = $(window).scrollTop() , stickyTop = 200 
      if (scrollTop > stickyTop) { 
            $topnav.addClass('fxd');
          } else {
            $topnav.removeClass('fxd'); 
          }   
    });
    $(window).trigger("scroll");
      
});

</script>
</body>
</html>
</body>
</html>