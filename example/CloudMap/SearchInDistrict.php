<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 10:21
 */

require_once __DIR__ . '/../base.php';

$request = \amap\sdk\CloudMap\CloudMap::search()->statisticsDistrict();
$request->setTableId("");
$request->setKeywords("test");
$request->setProvince("北京");
$request->setCity("北京");
$response = $request->request();

dump($response->getContent());
