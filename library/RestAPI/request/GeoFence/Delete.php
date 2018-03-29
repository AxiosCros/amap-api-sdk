<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/29 13:24
 */

namespace amap\sdk\RestAPI\request\GeoFence;

use amap\sdk\AMapOption;
use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;

/**
 * Class Delete
 * @package amap\sdk\RestAPI\request\GeoFence
 * @method $this setGid($gid)
 */
class Delete extends RestAPIRequest
{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
        $this->setMethod(AMapOption::DELETE);
    }
}