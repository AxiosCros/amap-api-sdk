<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 09:18
 */

require_once __DIR__ . '/../base.php';

$request = \amap\sdk\CloudMap\CloudMap::data()->createTable();

$request->setName("ExampleTable");
$response = $request->request();

$result = $response->getContent();
dump($result);