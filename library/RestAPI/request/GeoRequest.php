<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 15:08
 */

namespace amap\sdk\RestAPI\request;

use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;

/**
 * Class GeoRequest
 * @package amap\sdk\RestAPI\request
 * @method $this setLocation($location)
 * @method $this setPoitype($poi_type)
 * @method $this setRadius($radius)
 * @method $this setExtensions($extensions)
 * @method $this setBatch($batch)
 * @method $this setRoadLevel($road_level)
 * @method $this setOutput($output)
 * @method $this setCallback($callback)
 * @method $this setHomeorcorp($homeorcorp)
 * @method $this setCity($city)
 * @method $this setAddress($address)
 */
class GeoRequest extends RestAPIRequest{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
    }
}