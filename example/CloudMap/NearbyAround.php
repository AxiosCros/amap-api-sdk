<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 09:56
 */

require_once __DIR__ . '/../base.php';

$request = \amap\sdk\CloudMap\CloudMap::nearby()->around();
$request->setCenter("117.500244, 40.417801 ");
$request->setRadius(1000);
$request->setLimit(100);
$request->setSearchType(0);
$request->setTimeRange(86400);
$response = $request->request();

dump($response->getContent());