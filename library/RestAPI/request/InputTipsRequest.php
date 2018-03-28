<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 16:53
 */

namespace amap\sdk\RestAPI\request;

use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;

/**
 * Class InputTipsRequest
 * @package amap\sdk\RestAPI\request
 * @method $this setKeywords($keywords)
 * @method $this setType($type)
 * @method $this setLocation($location)
 * @method $this setCity($city)
 * @method $this setCityLimit($city_limit)
 * @method $this setDataType($data_type)
 * @method $this setOutput($output)
 * @method $this setCallback($callback)
 */
class InputTipsRequest extends RestAPIRequest
{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
    }
}