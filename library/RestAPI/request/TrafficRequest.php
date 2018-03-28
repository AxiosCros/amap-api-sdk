<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 17:07
 */

namespace amap\sdk\RestAPI\request;

use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;

/**
 * Class TrafficRequest
 * @package amap\sdk\RestAPI\request
 * @method $this setLevel($level)
 * @method $this setExtensions($extensions)
 * @method $this setOutput($output)
 * @method $this setCallback($callback)
 * @method $this setRectangle($rectangle)
 * @method $this setLocation($location)
 * @method $this setRadius($radius)
 * @method $this setName($name)
 * @method $this setCity($city)
 * @method $this setAdcode($adcode)
 */
class TrafficRequest extends RestAPIRequest
{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
    }
}