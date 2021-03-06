<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/29 13:28
 */

namespace amap\sdk\RestAPI\request\GeoFence;

use amap\sdk\AMapOption;
use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;

/**
 * Class Status
 * @package amap\sdk\RestAPI\request\GeoFence
 * @method $this setDiu($diu)
 * @method $this setUid($uid)
 * @method $this setLocations($locations)
 * @method $this setSig($sig)
 */
class Status extends RestAPIRequest
{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
        $this->setMethod(AMapOption::GET);
    }
}