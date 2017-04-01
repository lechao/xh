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
<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<link href="/xh/Public/Static/css/base.css"  rel="stylesheet">
<link href="/xh/Public/Static/css/home.css"  rel="stylesheet">
<link href="/xh/Public/Static/css/animate.css"  rel="stylesheet">
<!--<link href="/xh/Public/Static/css/font/css/font-awesome.css"  rel="stylesheet">-->
<link href="/xh/Public/Static/font-awesome-4.7.0/css/font-awesome.css"  rel="stylesheet">
<script src="/xh/Public/Static/js/html5.js" ></script>
<script src="/xh/Public/Static/js/jquery.js" ></script>
<script src="/xh/Public/Static/js/shopnc.js" ></script>
<script src="/xh/Public/Static/js/slider.js" ></script>
<script type="text/javascript">
  function browserRedirect() {
    var sUserAgent = navigator.userAgent.toLowerCase();
    var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
    var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
    var bIsMidp = sUserAgent.match(/midp/i) == "midp";
    var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
    var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
    var bIsAndroid = sUserAgent.match(/android/i) == "android";
    var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
    var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
    if (!(bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) ){
        //window.location.href='http://www.7yunshop.com/pc/wap.php';
    }else{
    	window.location.href='http://www.youbaninfo.com/wap.php';
    }
}
browserRedirect();
</script>
</head>
<body>
<div class="index-top">
  <div class="top-box">
    <div class="left">售前电话：<b><?php echo ($config["pre_phone"]); ?></b></div>
    <div class="right">
            <!--<span class="mr30"><a href="<?php echo U('login');?>"  style="color:#ddddde" title="会员登录" target="_blank">会员登录</a> | <a href="<?php echo U('login-register');?>"  style="color:#ddddde" title="注册" target="_blank">注册</a></span>-->
            <span class="mr30"><a href="http://yanshi.youbaninfo.com/web/login"  style="color:#ddddde" title="我要试用" target="_blank">我要试用</a></span>
          </div>
  </div>
</div>
<div class="topnav" id="topnav"> 
  <!--<div class="clear"></div>-->
  <div class="top-wrap">
    <div class="top-logo"><a href="<?php echo U('index');?>"  title="ShopNC" ><img src="/<?php echo get_image_path($config['logo']);?>"  width="auto" height="100%" alt="<?php echo ($config["company_name"]); ?>"/></a></div>
    <ul class="top-nav primary">
      <li class="nav-list"><a href="<?php echo U('index');?>"  class="nav-list-link" title="首页">首页</a></li>
      <li class="nav-list nav-l" style="position:relative;"><a href="javascript:void(0);" class="nav-list-link nav-arrow" title="产品模块">产品模块<i></i></a>
        <div class="clear"></div>
        <div class="sub">
          <div class="little-up"></div>
          <div class="cont">
            <dl style="border-bottom: dotted 1px #CCC;" >
              <dt><a href="<?php echo U('crm');?>"  title="CRM">CRM</a></dt>
              <dd> <a href="<?php echo U('crm');?>"  title="CRM">真实客户为中心的CRM</a></dd>
            </dl>
			<dl style="border-bottom: dotted 1px #CCC;" >
              <dt><a href="<?php echo U('sales');?>"  title="销售模块">销售模块</a></dt>
			  <dd><a href="<?php echo U('sales');?>"  title="销售模块">业务流程一体及促进订单成交 </a></dd>
            </dl><dl style="border-bottom: dotted 1px #CCC;" >
              <dt><a href="<?php echo U('warehouse');?>" title="仓库模块">仓库模块</a></dt>
			  <dd><a href="<?php echo U('warehouse');?>" title="仓库模块">现代化在线仓库，实现效率最大化</a></dd>
            </dl><dl style="border-bottom: dotted 1px #CCC;" >
              <dt><a href="<?php echo U('purchase');?>"  title="采购模块">采购模块</dt>
			  <dd><a href="<?php echo U('purchase');?>"  title="采购模块">改善您的供业链和库存绩效</dd>
            </dl><dl style="border-bottom: dotted 1px #CCC;" >
              <dt><a href="<?php echo U('account');?>"  title="财务模块">财务模块</dt>
			  <dd><a href="<?php echo U('account');?>"  title="财务模块">用更少的时间，做更多的事情</dd>
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
      <li class="nav-list"><a href="<?php echo U('solution-list');?>"  class="nav-list-link" title="行业案例">行业案例</a>
        <div class="clear"></div>
      </li>
      <!--<li class="nav-list"><a href="<?php echo U('case');?>"  class="nav-list-link" title="成功案例">成功案例</a></li>-->
      <!--<li class="nav-list"><a href="<?php echo U('cooperation');?>"  class="nav-list-link" title="合作代理">合作伙伴</a></li>-->
      <li class="nav-list"><a href="<?php echo U('aboutus');?>"  class="nav-list-link" title="关于我们">关于我们</a></li>
    </ul>
  </div>
</div>
<div class="clear"></div>



<link href="/xh/Public/Static/css/style.css"  rel="stylesheet">
<style>
#top{background:url("/xh/Public/Static/images/top_bg2.png") center;}
.banner-layout{ margin-top:99px;}
#mapBox p{ line-height:20px !important; margin:0 !important; text-indent:0 !important}
</style>
<script type="text/javascript" src="../api.map.baidu.com/api-key=&v=1.1&services=true" ></script>

<div class="banner-layout banner-about">
  <div class="banner"></div>
</div>
<div class="main-layout" id="aboutus">
  <div class="classify-nav pinned">
    <ul id="nav" class="page-nav">
      <li><a href="#company" class="company" title="公司简介"></a></li>
      <!--<li><a href="#case" class="case" title="客户案例"></a></li>-->
      <li><a href="#contact" class="contact" title="联系方式"></a></li>
      <li><a href="#job" class="job" title="人才招聘"></a></li>
      <li><a href="#law" class="law" title="法律声明"></a></li>
    </ul>
  </div>
  <!-- company begin-->
  <section>
    <div class="page-location" >&nbsp;</div>
    <div class="container" id="company">
      <div class="title">
        <h3>公司简介</h3>
        <h4>Company Introduction</h4>
      </div>
      <div class="content">
      	<?php echo ($config["aboutus"]); ?>
      </div>
    </div>
  </section>

  <section>
    <div class="page-location">&nbsp;</div>
    <div class="container" id="contact">
      <div class="title">
        <h3>联系方式</h3>
        <h4>Contact Details</h4>
      </div>
      <div class="content">
        <div class="contact-info">
          <!--<h3>天津市网城科技股份有限公司</h3>-->
		  <h3><?php echo ($config["company_name"]); ?></h3>
          <span><?php echo ($config["company_address"]); ?><a href="javascript:;" class="mapshow"><!--<i class="fa fa-map-marker"></i>查看地图</a></span></div>-->
        <!--百度地图容器-->
        <!--<div style="width:100%;height:480px;  margin: 10px auto;display:none;" id="map"></div>-->
        <div class="contact-detail">
          <dl>
            <dt>咨询电话</dt>
            <dd>021-6128 0923</dd>
          </dl>
          <dl>
            <dt>商务洽谈</dt>
            <dd>021-6128 0923</dd>
          </dl>
          <dl>
            <dt>Email</dt>
            <dd>wchangkan@sohu.com</dd>
          </dl>
          
		   </div>
		 <!--
		 <dl>
            <dt>工作时间</dt>
            <dd>
              <h4>周一至周五</h4>
              <h6>8:30～12:00 13:30～18:00</h6>
            </dd>
          </dl>
          <dl>
            <dt>销售咨询</dt>
            <dd><i class="fa fa-qq"></i><a target="_blank" href="javascript:" >2850515881</a></dd>
          </dl>
          <dl>
            <dt>销售咨询</dt>
            <dd><i class="fa fa-qq"></i><a target="_blank" href="javascript:" >2850515886</a></dd>
          </dl>
          <dl>
            <dt>销售咨询</dt>
            <dd><i class="fa fa-qq"></i><a target="_blank" href="javascript:" >2850515866</a></dd>
          </dl>
          <dl>
            <dt>售后服务&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-qq"></i><a target="_blank" href="javascript:"  style="color:#3F63A5">2850515867</a></dt>
            <dd style="font-size: 14px;color: #999;">工单系统&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="login.html"  target="_blank" style="font-size: 14px;color: #999;">登录</a></dd>
          </dl>
        </div> -->


      </div>
    </div>
  </section>
  <!--contact end--> 
  <!-- job begin-->
  <section>
    <div class="page-location">&nbsp;</div>
    <div class="container" id="job">
      <div class="title">
        <h3>人才招聘</h3>
        <h4>Join Us</h4>
      </div>
      <div class="content job-tabs">
        <ul class="tabs-nav">
          <li class="tabs-selected"><a href="#tab-1">PHP高级程序员</a></li>
          <li><a href="#tab-2">Android工程师</a></li>
          <li><a href="#tab-3">UI网页设计</a></li>
          <li><a href="#tab-4">Java高级程序员</a></li>
          <li><a href="#tab-5">网络管理员（超级网管）</a></li>
          <li><a href="#tab-6">大客户经理</a></li>
          <li><a href="#tab-7">出纳</a></li>
          <li><a href="#tab-8">行政前台</a></li>
        </ul>
        <div id="tab-1" class="tabs-content">
          <dl>
            <dt>岗位职责：</dt>
            <dd>1、完成宣汉7yun商城系统的功能开发；</dd>
            <dd>2、完成定制项目的开发。</dd>
            <dt>任职资格：</dt>
            <dd>1、两年以上B/S软件开发工作经验，熟悉PHP开发语言；</dd>
            <dd>2、熟悉MySQL数据库，同时熟悉SQL Server，Oracle者优先；</dd>
            <dd>3、熟悉面向对象思想，MVC三层体系，至少使用过目前已知PHP框架其中一种；</dd>
            <dd>4、熟悉Linux操作系统，熟悉常用Linux操作命令；</dd>
            <dd>5、熟悉MySQL数据库应用开发，了解MySQL的数据库配置管理、性能优化等基本操作技能；</dd>
            <dd>6、熟悉HTML、JavaScript、jQuery；</dd>
            <dd>7、具备良好的代码编程习惯及较强的文档编写能力；</dd>
            <dd>8、有较强的自学能力，能够依据业务需要学习必要的职业技能；</dd>
            <dd>9、有较强的团队意识，能够正确理解任务安排，与同事协同做业。</dd>
          </dl>
        </div>
        <div id="tab-2" class="tabs-content">
          <dl>
            <dt>岗位职责：</dt>
            <dd>1、完成宣汉7yun商城系统Android客户端的应用需求分析和产品设计；</dd>
            <dd>2、完成定制项目的开发，依据开发计划进行编码和测试。</dd>
            <dt>任职资格：</dt>
            <dd>1、两年以上软件开发工作经验，具备完整Android应用开发经验；</dd>
            <dd>2、熟悉Android SDK，熟练掌握Java语言；</dd>
            <dd>3、熟悉网络编程，了解常用网络协议；</dd>
            <dd>4、熟练掌握Android界面和交互开发；</dd>
            <dd>5、有较强的自学能力，能够依据业务需要学习必要的职业技能；</dd>
            <dd>6、有较强的团队意识，能够正确理解任务安排，与同事协同做业。</dd>
          </dl>
        </div>
        <div id="tab-3" class="tabs-content">
          <dl>
            <dt>岗位职责：</dt>
            <dd>网站UI设计、切片以及HTML制作。
            <dt>任职资格：</dt>
            <dd>1、有大型网站设计经验，有网站改版、频道建设经验者优先考虑；</dd>
            <dd>2、熟练掌握Photoshop,Fireworks,Dreamweaver等设计软件；</dd>
            <dd>3、熟练运用DIV+CSS制作网页，符合CSS2.0-W3C标准，并掌握不同浏览器下，不同版本下CSS元素的区别；</dd>
            <dd>4、熟悉网站制作流程，能运用并修改简单JavaScript类程序；</dd>
            <dd>5、积极向上，有良好的人际沟通能力，良好的工作协调能力，踏实肯干的工作精神；</dd>
            <dd>6、具有良好的沟通表达能力，需求判断力，团队协作能力；</dd>
            <dd style="color: rgba(235,138,30,1.00);">注：请应聘者在简历中提供个人近期作品连接。</dd>
          </dl>
        </div>
        <div id="tab-4" class="tabs-content">
          <dl>
            <dt>任职资格：</dt>
            <dd>1、两年以上B/S软件开发工作经验，熟悉Java语言；</dd>
            <dd>2、熟练掌握Spring、Struts、Hibernate等开发框架；</dd>
            <dd>3、良好的面向对象设计思想，熟悉设计模式；</dd>
            <dd>4、熟悉主流数据库，MySQL、Oracle；</dd>
            <dd>5、熟悉Linux操作系统，熟悉常用Linux操作命令；</dd>
            <dd>6、熟悉HTML、JavaScript、jQuery；</dd>
            <dd>7、具备良好的代码编程习惯及较强的文档编写能力；</dd>
            <dd>8、有较强的自学能力，能够依据业务需要学习必要的职业技能；</dd>
            <dd>9、有较强的团队意识，能够正确理解任务安排，与同事协同做业。</dd>
          </dl>
        </div>
        <div id="tab-5" class="tabs-content">
          <dl>
            <dt>任职资格：</dt>
            <dd>1、集群部署，负责部署Web服务器、缓存服务器、数据库服务器等，具备分布式部署经验；</dd>
            <dd>2、负责Linux安全，优化，尤其在高负载，防攻击情况下的应对方案及案例；</dd>
            <dd>3、具备Shell 脚本编写能力及部分系统级C语言的编写能力。</dd>
          </dl>
        </div>
        <div id="tab-6" class="tabs-content">
          <dl>
            <dt>岗位职责：</dt>
            <dd>1、负责接待、开发、建立和维护管理客户资源；</dd>
            <dd>2、可以贯彻和执行销售计划、政策及行动方案，及时与上级主管沟通，反馈信息；</dd>
            <dd>3、熟悉互联网，了解电商市场，能够独立利用自有产品和互联网资源寻找目标客户，促成交易；</dd>
            <dd>4、具有较强的逻辑思维，能根据客户提出的需求整理出相应文档，并估计开发的难易程度。</dd>
            <dt>任职资格：</dt>
            <dd>1、大专以上学历，3年以上工作经验，1年以上同行业销售经验或网络营销的工作经验，同时具有电话营销工作经验者优先；</dd>
            <dd>2、具备较强的沟通及表达能力，熟练使用各种办公软件，有一定的文笔能力；</dd>
            <dd>3、热爱销售工作，能承受较大的工作压力；</dd>
            <dd>4、执行能力强，注重团队合作精神，吃苦耐劳；</dd>
            <dd>5、具备较强的领悟能力和上进心。</dd>
          </dl>
        </div>
        <div id="tab-7" class="tabs-content">
          <dl>
            <dt>岗位职责：</dt>
            <dd>1、负责日常收支的管理和核对；</dd>
            <dd>2、办公室基本账务的核对；</dd>
            <dd>3、负责收集和审核原始凭证，保证报销手续及原始单据的合法性、准确性；</dd>
            <dd>4、负责登记现金、银行存款日记账并准确录入系统，按时编制银行存款余额调节表；</dd>
            <dd>5、负责记账凭证的编号、装订；保存、归档财务相关资料；</dd>
            <dd>6、负责开具各项票据；</dd>
            <dd>7、配合总会负责办公室财务管理统计汇总。</dd>
            <dt>任职资格：</dt>
            <dd>1、大专以上学历，会计学或财务相关专业毕业；</dd>
            <dd>2、具备1年以上出纳工作经验；</dd>
            <dd>3、熟悉操作财务软件、Office等办公软件；</dd>
            <dd>4、记账要求字迹清晰、准确、及时，账目日清月结，报表编制准确、及时；</dd>
            <dd>5、工作认真，态度端正；</dd>
            <dd>6、了解国家财经政策和会计、税务法规，熟悉银行结算业务。</dd>
          </dl>
        </div>
        <div id="tab-8" class="tabs-content">
          <dl>
            <dt>岗位职责：</dt>
            <dd>1、电话的呼入接听与转接；</dd>
            <dd>2、来访客户、外部人员的接待；</dd>
            <dd>3、公司邮件、报刊、传真和物品的收发与管理工作；</dd>
            <dd>4、差旅票务预订与管理；</dd>
            <dd>5、负责前台区域的环境维护，保证设备安全及正常运转（包括复印机、空调及打卡机等）；</dd>
            <dd>6、其他行政相关事务工作。</dd>
            <dt>任职资格：</dt>
            <dd>1、熟练操作办公自动化设备，包括：计算机、打印机、传真机、投影仪等；</dd>
            <dd>2、良好的语言表达能力，普通话标准，具有一定的协调、沟通能力，亲和力强；</dd>
            <dd>3、熟悉公司的文档管理；</dd>
            <dd>4、诚实敬业、工作认真细心、责任心强、开朗热情；</dd>
            <dd>5、大专以上学历，形象气质佳者优先。</dd>
          </dl>
        </div>
        <p class="hr-note">*招聘详情请致电人力资源部，电话：13764388946；<br/>
          有意者请将简历发送至 <a href="mailto:wchangkan@sohu.com">wchangkan@sohu.com</a>，标题请注明“宣汉7yun工作求职”。</p>
      </div>
    </div>
  </section>
  <!-- job end -->
  
</div>
<!-- 代码 结束 --> 
<script src="/xh/Public/Static/js/jquery.tabslet.js" ></script> 
<script>
$(function(){
		
		//页内导航定位
		$("#nav").onePageNav({
		filter: ":not(.exception)"
		});
		
		//页内导航悬停
		$(".pinned").pin({
    		containerSelector: ".main-layout"
   		});
		
		//tab切换
		$('.job-tabs').tabslet({
			animation: true
		});
		
		//显示隐藏
		$(".mapshow").click(function(){
  			$("#dituContent").toggle(300);
		});
});
</script> 
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
      createMap();//创建地图
      setMapEvent();//设置地图事件
      addMapControl();//向地图添加控件
      addMapOverlay();//向地图添加覆盖物
    }
    function createMap(){ 
      map = new BMap.Map("map"); 
      map.centerAndZoom(new BMap.Point(117.195654,39.142127),19);
    }
    function setMapEvent(){
      map.enableScrollWheelZoom();
      map.enableKeyboard();
      map.enableDragging();
      map.enableDoubleClickZoom()
    }
    function addClickHandler(target,window){
      target.addEventListener("click",function(){
        target.openInfoWindow(window);
      });
    }
    function addMapOverlay(){
      var markers = [
        {content:"天津市和平区创新大厦12层",title:"天津市网城天创科技有限责任公司",imageOffset: {width:-46,height:-21},position:{lat:39.141851,lng:117.195304}}
      ];
      for(var index = 0; index < markers.length; index++ ){
        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);
        var marker = new BMap.Marker(point,{icon:new BMap.Icon("../api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{
          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)
        })});
        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});
        var opts = {
          width: 200,
          title: markers[index].title,
          enableMessage: false
        };
        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);
        marker.setLabel(label);
        addClickHandler(marker,infoWindow);
        map.addOverlay(marker);
      };
    }
    //向地图添加控件
    function addMapControl(){
      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);
      map.addControl(scaleControl);
      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
      map.addControl(navControl);
      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});
      map.addControl(overviewControl);
    }
    var map;
      initMap();
</script>






<div class="footer">
  <div class="footer-container">
    <div class="left-side">
      <div class="site-name">
        <a href="###"><img src="/xh/Public/Static/images/foot-logo.png"  alt="<?php echo ($config["company_name"]); ?>"/></a>
        <!--<a href="javascript:;"  target="_blank"><img src="/xh/Public/Static/images/sina_logo.png"  alt="新浪微博"/></a>
        <a href="javascript:;"  target="_blank"><img src="/xh/Public/Static/images/tencent_logo.png"  alt="腾讯微博"/></a>-->
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
    <div class="qq-hover-c"><img class="img-qq" src="/xh/Public/Static/images/im/qq.png" ></div>
    </a>

    <div class="im-tel">
      <div class="b2b">
        <div>销售咨询</div>
        <?php if(is_array($pre_qq)): foreach($pre_qq as $key=>$vo): ?><div class="tel-num">
          <a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($vo); ?>&site=qq&menu=yes" >
                <img border="0" src="/xh/Public/Static/images/im/qq_ico.png"  alt=""/>
          </a>
        </div><?php endforeach; endif; ?>
      </div>
  
     <div class="solution">
        <div class="tel-num" style="margin:16px 0px 6px"><a target="_blank" href="jhttp://wpa.qq.com/msgrd?v=3&uin=2850515883&site=qq&menu=yes" >
          <img border="0" src="/xh/Public/Static/images/im/qq_ico.png"  alt="解决方案"/></a>
        </div>
      </div>

      <div class="b2b">
      <div>售后服务</div>
            <?php if(is_array($aft_qq)): foreach($aft_qq as $key=>$val): ?><div class="tel-num">
                <a target="blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($val); ?>&site=qq&menu=yes" >
                      <img border="0" src="/xh/Public/Static/images/im/qq_ico.png"  alt=""/>
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
      如需体验商城具体功能，请联系客服人员<a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'"  target="_blank" title="客服咨询1"><img border="0" src="/xh/Public/Static/images/im/qq_ico.png" /></a><a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'"  target="_blank" title="客服咨询2"><img border="0" src="/xh/Public/Static/images/im/qq_ico.png" /></a>提供相关测试地址及账号。</p>
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
    <p>你也可以直接拨打我们的免费热线：<a href="tel:4008801509"><i class="fa fa-phone"></i>400-880-1509</a>客服<a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515881&site=qq&menu=yes'"  target="_blank" title="客服咨询1"><img border="0" src="/xh/Public/Static/images/im/qq_ico.png" /></a><a href="javascript:if(confirm('http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'))window.location='http://wpa.qq.com/msgrd?v=3&uin=2850515866&site=qq&menu=yes'"  target="_blank" title="客服咨询2"><img border="0" src="/xh/Public/Static/images/im/qq_ico.png" /></a>。</p>
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
<script src="/xh/Public/Static/js/jquery.hDialog.js" ></script> 
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