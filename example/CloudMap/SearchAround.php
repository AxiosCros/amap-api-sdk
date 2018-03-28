<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 10:11
 */

require_once __DIR__ . '/../base.php';

$request = \amap\sdk\CloudMap\CloudMap::search()->around();

$table_id = "";
$center = "";

$request->setTableId($table_id);
$request->setCenter($center);
$response = $request->request();

dump($response->getContent());