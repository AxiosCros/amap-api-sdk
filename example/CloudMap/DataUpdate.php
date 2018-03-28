<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 09:35
 */

require_once __DIR__ . '/../base.php';

$request = \amap\sdk\CloudMap\CloudMap::data()->update();

$table_id = "";

$request->setTableId($table_id);
$data = [
    "_id"=>"1",
    "_name"=>"test update",
    "_location"=>"116.397428, 39.90923",
    "coordtype"=>1,
    "_address"=>"address test"
];
$request->setData($data);
$response = $request->request();

dump($response->getContent());