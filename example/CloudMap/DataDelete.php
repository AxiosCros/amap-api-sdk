<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 09:37
 */

require_once __DIR__ . '/../base.php';

$request = \amap\sdk\CloudMap\CloudMap::data()->delete();

$table_id = "";

$request->setTableId($table_id);
$request->setIds("1,2");
$response = $request->request();

dump($response->getContent());