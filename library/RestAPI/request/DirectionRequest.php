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
 * Class DirectionRequest
 * @package amap\sdk\RestAPI\request
 * @method $this setOrigin($origin)
 * @method $this setDestination($destination)
 * @method $this setOutput($output)
 * @method $this setCallback($callback)
 * @method $this setCity($city)
 * @method $this setCityd($cityd)
 * @method $this setStrategy($strategy)
 * @method $this setNightFlag($night_flag)
 * @method $this setDate($date)
 * @method $this setTime($time)
 * @method $this setOriginId($origin_id)
 * @method $this setOriginType($origin_type)
 * @method $this setDestinationType($destination_type)
 * @method $this setWayPoints($way_points)
 * @method $this setAvoidPolygons($avoid_polygons)
 * @method $this setAvoidRoad($avoid_road)
 * @method $this setProvince($province)
 * @method $this setNumber($number)
 * @method $this setOriginIdType($origin_id_type)
 * @method $this setDestinationId($destination_id)
 * @method $this setDiu($diu)
 * @method $this setSize($size)
 * @method $this setHeight($height)
 * @method $this setWidth($width)
 * @method $this setLoad($load)
 * @method $this setAxis($axis)
 * @method $this setOrigins($origins)
 * @method $this setType($type)
 */
class DirectionRequest extends RestAPIRequest{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
    }
}