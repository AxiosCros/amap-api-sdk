<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 10:01
 */

require_once __DIR__ . '/../base.php';

$request = \amap\sdk\CloudMap\CloudMap::search()->local();

$table_id = "";
$keywords = "";
$city = "";
$filter = "";
$sort_rule = "_id:1";

$request->setTableId($table_id);
$request->setKeywords($keywords);
$request->setCity($city);
$request->setFilter($filter);
$request->setSortRule($sort_rule);
$response = $request->request();

dump($response->getContent());

