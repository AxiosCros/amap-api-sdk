<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 15:11
 */

namespace amap\sdk\RestAPI\request;

use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;

/**
 * Class AutoGraspRequest
 * @package amap\sdk\RestAPI\request
 * @method $this setCarId($car_id)
 * @method $this setLocations($locations)
 * @method $this setTime($time)
 * @method $this setDirection($direction)
 * @method $this setSpeed($speed)
 * @method $this setExtensions($extensions)
 */
class AutoGraspRequest extends RestAPIRequest
{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
    }
}