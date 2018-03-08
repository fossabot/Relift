<?php
/**
 * Created by PhpStorm.
 * User: genes
 * Date: 2018/2/6
 * Time: 19:41
 */

if (! function_exists('getIP')){
	/*获取客户端IP*/
	function getIP()
	{
		if (@$_SERVER["HTTP_X_FORWARDED_FOR"])
			$ip = $_SERVER["HTTP_X_FORWARDED_FOR"];
		else if (@$_SERVER["HTTP_CLIENT_IP"])
			$ip = $_SERVER["HTTP_CLIENT_IP"];
		else if (@$_SERVER["REMOTE_ADDR"])
			$ip = $_SERVER["REMOTE_ADDR"];
		else
			$ip = "Unknown";
		return $ip;
	}
}
