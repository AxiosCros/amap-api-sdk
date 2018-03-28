<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 10:20
 */

require_once __DIR__ . '/../base.php';

$request = \amap\sdk\CloudMap\CloudMap::search()->statisticsCity();
$request->setTableId("");
$request->setKeywords("北京");
$response = $request->request();

dump($response->getContent());