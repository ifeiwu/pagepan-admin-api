<?php
date_default_timezone_set('PRC');

define('ROOT_PATH', __DIR__ . '/');

// 所有错误和异常记录
ini_set('error_reporting', E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', false);
ini_set('log_errors', true);
ini_set('error_log', ROOT_PATH . 'error.log');


// 在网站后台导航栏最右侧的图标【管理员 -> 访问密钥】，即可查看令牌。
define('SITE_TOKEN', '9235F74C45678F7F7DFC4CCD7E249AA5');

// 请将网站接口地址中的 “http://qing.pagepan.com.loc/src” 修改为你的域名。
define('SITE_API_URL', 'http://qing.pagepan.com.loc/src/admin/api.php');