<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/4/2 09:06
 */

namespace amap\sdk\URLApi\request;

use amap\sdk\URLApi\URLApiRequest;

/**
 * Class PoiDetail
 * @package amap\sdk\URLApi\request
 * @method $this setPolid($polid)
 * @method $this setSrc($src)
 * @method $this setCallNative($call_native)
 */
class PoiDetail extends URLApiRequest
{
    public function __construct(string $action = "poidetail")
    {
        parent::__construct($action);
    }
}