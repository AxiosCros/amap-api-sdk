# 高德地图API-SDK


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

$key = "your amap key";
$secret = "your amap secret";
$table_id = 'tableid';

//Auth
AMap::auth($key,$secret);

$data = [
    "_name"=>"test",
    "_location"=>"116.397428, 39.90923",
    "coordtype"=>1,
    "_address"=>"address test"
];

//Get Request Instance
$request = CloudMap::data()->create();

$request->setTableId($table_id);
$request->setLocationType(1);
$request->setData($data);
$response = $request->request();

dump($response->getContent());
```

