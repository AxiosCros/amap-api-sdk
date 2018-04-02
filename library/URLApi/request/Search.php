<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/4/2 09:08
 */

namespace amap\sdk\URLApi\request;

use amap\sdk\URLApi\URLApiRequest;

/**
 * Class Search
 * @package amap\sdk\URLApi\request
 * @method $this setKeyword($keyword)
 * @method $this setCenter($center)
 * @method $this setCity($city)
 * @method $this setView($view)
 * @method $this setSrc($src)
 * @method $this setCoordinate($coordinate)
 * @method $this setCallNative($call_native)
 */
class Search extends URLApiRequest
{
    public function __construct(string $action = "search")
    {
        parent::__construct($action);
    }
}