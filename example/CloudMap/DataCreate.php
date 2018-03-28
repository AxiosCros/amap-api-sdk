<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 09:16
 */

require_once __DIR__ . '/../base.php';

/*** 创建数据(单条) ***/
$request = \amap\sdk\CloudMap\CloudMap::data()->create();

$request->setTableId($table_id);
$request->setLocationType(1);
$data = [
    "_name"=>"test",
    "_location"=>"116.397428, 39.90923",
    "coordtype"=>1,
    "_address"=>"address test"
];
$request->setData($data);
$request = $request->request();
$result = $request->getContent();
dump($result);
if($result['status'] == 0){
    dump("error");
    die();
}

$id = $result['_id'];   // data id