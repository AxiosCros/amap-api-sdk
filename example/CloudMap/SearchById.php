<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 10:14
 */

require_once __DIR__ . '/../base.php';

$request = \amap\sdk\CloudMap\CloudMap::search()->searchById();
$table_id = '';
$request->setTableId($table_id);
$request->setId(1);
$response = $request->request();

dump($response->getContent());