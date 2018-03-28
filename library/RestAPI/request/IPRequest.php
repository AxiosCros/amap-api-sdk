<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 15:03
 */

namespace amap\sdk\RestAPI\request;

use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;

/**
 * Class IPRequest
 * @package amap\sdk\RestAPI\request
 * @method $this setIP($ip)
 */
class IPRequest extends RestAPIRequest
{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
    }
}