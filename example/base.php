<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 09:16
 */

namespace amap\example;

use amap\sdk\AMap;

require_once __DIR__. "/../vendor/autoload.php";

$key = "your amap key";
$secret = "your amap secret";

//Auth
AMap::auth($key,$secret);