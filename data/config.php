<?php
/**
 * Created by iMac
 * 火一五信息科技有限公司
 * 联系方式:15288986891
 * QQ:3186355915
 * web:http://host.huo15.com
 * 日期：2017/1/9
 */


function huo15_get_client_ip()
{
	if ($_SERVER['REMOTE_ADDR']) {
		$cip = $_SERVER['REMOTE_ADDR'];
	} elseif (getenv("REMOTE_ADDR")) {
		$cip = getenv("REMOTE_ADDR");
	} elseif (getenv("HTTP_CLIENT_IP")) {
		$cip = getenv("HTTP_CLIENT_IP");
	} else {
		$cip = "unknown";
	}
	return $cip;
}




if (huo15_get_client_ip() == '127.0.0.1') {
	$db_host   = "localhost:3306";
	// database name
	$db_name   = "fresh";

// database username
	$db_user   = "root";

// database password
	$db_pass   = "huo15com";




/*	$db_host   = "211.149.214.242:3306";
	// database name
	$db_name   = "fresh";

// database username
	$db_user   = "fresh";

// database password
	$db_pass   = "huo15com";*/



} else {

// database host
	$db_host   = "localhost:3306";
// database name
	$db_name   = "fresh";

// database username
	$db_user   = "fresh";

// database password
	$db_pass   = "huo15com";
}




// table prefix
$prefix    = "ecs_";

$timezone    = "PRC";

$cookie_path    = "/";

$cookie_domain    = "";

$session = "1440";

define('EC_CHARSET','utf-8');

define('ADMIN_PATH','admin');

define('AUTH_KEY', 'this is a key');

define('OLD_AUTH_KEY', '');

define('API_TIME', '2017-01-10 22:39:28');
/**
0 关闭debug
1 显示错误信息
2 关闭缓存
4 显示debug页面
8 记录sql查询

所有的调试模式都开启：
15 = 1 + 2 + 4 + 8
 */

define('DEBUG_MODE', '0');


?>