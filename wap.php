<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2011 http://topthink.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | 
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 网站文件入口位置
define('WEB_ROOT', dirname(__FILE__) . '/');

// 定义应用目录
define('APP_NAME', 'App');
define('APP_PATH', './App/');
define('THINK_PATH', realpath('./ThinkPHP') . '/');
define('MODULE_NAME', 'Home');
define('CONTROLLER_NAME', 'Wap');
// 开启调试
define('APP_DEBUG', true);

// 引入ThinkPHP入口文件
require THINK_PATH . 'ThinkPHP.php';
