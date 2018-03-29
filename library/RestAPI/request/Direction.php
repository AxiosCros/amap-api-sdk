<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 14:12
 */

namespace amap\sdk\RestAPI\request;

use amap\sdk\core\exception\RestAPIException;

/**
 * 路径规划
 * Class Direction
 * @package amap\sdk\RestAPI\request
 * @method DirectionRequest walking()
 * @method DirectionRequest bus()
 * @method DirectionRequest driving()
 * @method DirectionRequest bicycling()
 * @method DirectionRequest truck()
 * @method DirectionRequest distance()
 */
class Direction
{
    protected $actionArray = [
        'walking'   => 'v3/direction/walking', //步行路径规划
        'bus'       => 'v3/direction/transit/integrated',//公交路径规划
        'driving'   => 'v3/direction/driving',//驾车路径规划
        'bicycling' => 'v4/direction/bicycling',//骑行路径规划
        'truck'     => 'v4/direction/truck',//火车路径规划
        'distance'  => 'v3/distance'//距离测量
    ];

    /**
     * @param $name
     * @param $arguments
     * @return DirectionRequest
     * @throws RestAPIException
     */
    public function __call($name, $arguments)
    {
        if (!isset($this->actionArray[$name])) {
            throw new RestAPIException("action not exist");
        }
        $Class = new DirectionRequest($this->actionArray[$name]);
        return $Class;
    }
}

