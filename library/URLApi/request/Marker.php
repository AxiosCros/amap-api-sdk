<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/30 16:43
 */

namespace amap\sdk\URLApi\request;

use amap\sdk\URLApi\URLApiRequest;

/**
 * Class Marker
 * @package amap\sdk\URLApi\request
 * @method $this setPosition()
 * @method $this setName($name)
 * @method $this setSrc($src)
 * @method $this setCoordinate($coordinate)
 * @method $this setCallNative($call_native)
 * @method $this setPolid($polid)
 * @method $this setMarkers($markers)
 */
class Marker extends URLApiRequest
{
    public function __construct(string $action = "marker")
    {
        parent::__construct($action);
    }
}