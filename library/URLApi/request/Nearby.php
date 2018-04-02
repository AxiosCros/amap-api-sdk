<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/4/2 09:12
 */

namespace amap\sdk\URLApi\request;

use amap\sdk\URLApi\URLApiRequest;

/**
 * Class Nearby
 * @package amap\sdk\URLApi\request
 * @method $this setService($service)
 * @method $this setLocation($location)
 * @method $this setCity($city)
 * @method $this setSrc($src)
 * @method $this setCoordinate($coordinate)
 */
class Nearby extends URLApiRequest
{
    public function __construct(string $action = "nearby")
    {
        parent::__construct($action);
    }
}