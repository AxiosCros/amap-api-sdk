<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 15:27
 */
namespace amap\example\RestAPI;

use amap\sdk\AMap;
use amap\sdk\RestAPI\RestAPI;

require_once __DIR__. "/../../vendor/autoload.php";

$key = "";
$secret = "";

AMap::auth($key,$secret,AMap::CloseSign);
$image_url = RestAPI::staticMap()->setLocation("116.481485,39.990464")->buildUrl();

dump($image_url);