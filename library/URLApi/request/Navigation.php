<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/4/2 09:15
 */

namespace amap\sdk\URLApi\request;

use amap\sdk\URLApi\URLApiRequest;

/**
 * Class Navigation
 * @package amap\sdk\URLApi\request
 * @method $this setForm($form)
 * @method $this setTo($to)
 * @method $this setVia($via)
 * @method $this setMode($mode)
 * @method $this setPolicy($policy)
 * @method $this setSrc($src)
 * @method $this setCoordinate($coordinate)
 * @method $this setCallNative($call_native)
 */
class Navigation extends URLApiRequest
{
    public function __construct(string $action = "navigation")
    {
        parent::__construct($action);
    }
}