<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 09:44
 */

require_once __DIR__ . '/../base.php';

$request = \amap\sdk\CloudMap\CloudMap::data()->importStatus();

$table_id = "";
$batchild = "";

$request->setTableId($table_id);
$request->setBatchid($batchild);
$response = $request->request();

dump($response->getContent());

