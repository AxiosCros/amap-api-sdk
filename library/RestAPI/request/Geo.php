<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 13:56
 */

namespace amap\sdk\RestAPI\request;

use amap\sdk\core\exception\RestAPIException;
use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;

/**
 * Class Geo
 * @package amap\sdk\RestAPI\request
 * @method GeoRequest code()
 * @method GeoRequest recode()
 */
class Geo
{
    protected $actionArray = [
        'code'   => 'v3/geocode/geo',
        'recode' => 'v3/geocode/regeo',
    ];

    /**
     * @param $name
     * @param $arguments
     * @return GeoRequest
     * @throws RestAPIException
     */
    public function __call($name, $arguments)
    {
        if(!isset($this->actionArray[$name])){
            throw new RestAPIException("action not exist");
        }
        $Class = new GeoRequest($this->actionArray[$name]);
        return $Class;
    }
}

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