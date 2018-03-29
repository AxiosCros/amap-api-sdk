# 高德地图API-SDK

## 高德开发文档

- [云图服务API](http://lbs.amap.com/api/yuntu/summary/?)
- [Web服务API](https://lbs.amap.com/api/webservice/summary/)

## 安装
```shell
composer require axios/amap-api-sdk
```

## 使用示例

```php
namespace AMap;

use amap\sdk\AMap;
use amap\sdk\CloudMap\CloudMap;

require_once __DIR__. "/../vendor/autoload.php";

//Auth
AMap::auth("your amap key","your amap secret");

//Request
$request = \amap\sdk\CloudMap\CloudMap::search()->dataList();
$request->setTableId("table id");
$response = $request->request();

//Get Response Content(array)
dump($response->getContent());
```