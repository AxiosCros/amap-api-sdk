<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 17:30
 */

namespace amap\sdk\RestAPI\request\GeoFence;

use amap\sdk\AMapOption;
use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;

/**
 * Class Find
 * @package amap\sdk\RestAPI\request\GeoFence
 */
class Find extends RestAPIRequest
{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
        $this->setMethod(AMapOption::GET);
    }
}