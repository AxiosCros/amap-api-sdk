<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 16:47
 */

namespace amap\sdk\RestAPI\request;

use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;

/**
 * Class ConvertRequest
 * @package amap\sdk\RestAPI\request
 * @method $this setLocations($locations)
 * @method $this setCoordsys($coordsys)
 * @method $this setOutput($output = "JSON")
 */
class ConvertRequest extends RestAPIRequest
{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
    }
}