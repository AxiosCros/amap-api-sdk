<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 09:22
 */

require_once __DIR__ . '/../base.php';

$request = \amap\sdk\CloudMap\CloudMap::data()->createByExcel();

$csv_file_path = "";
$request->setFilePath($csv_file_path);
$response = $request->request();

dump($response->getContent());