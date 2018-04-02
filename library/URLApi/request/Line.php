<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/4/2 09:18
 */

namespace amap\sdk\URLApi\request;

use amap\sdk\URLApi\URLApiRequest;

/**
 * Class Line
 * @package amap\sdk\URLApi\request
 * @method $this setName($name)
 * @method $this setCity($city)
 * @method $this setSrc($src)
 * @method $this setCallNative($call_native)
 * @method $this setId($id)
 * @method $this setView($view)
 */
class Line extends URLApiRequest
{
    public function __construct(string $action = "line")
    {
        parent::__construct($action);
    }
}