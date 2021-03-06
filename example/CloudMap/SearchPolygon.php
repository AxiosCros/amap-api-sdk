<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 10:12
 */

require_once __DIR__ . '/../base.php';

$request = \amap\sdk\CloudMap\CloudMap::search()->polygon();

$table_id = "";
$polygon = "";

$request->setTableId($table_id);
$request->setPolygon($polygon);
$response = $request->request();

dump($response->getContent());