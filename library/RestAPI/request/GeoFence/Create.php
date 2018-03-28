<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 17:24
 */

namespace amap\sdk\RestAPI\request\GeoFence;

use amap\sdk\AMapOption;
use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;

/**
 * Class Create
 * @package amap\sdk\RestAPI\request\GeoFence
 * @method $this setName($name)
 * @method $this setCenter($center)
 * @method $this setRadius($radius)
 * @method $this setPoints($points)
 * @method $this setEnable($enable)
 * @method $this setValidTime($valid_time)
 * @method $this setRepeat($repeat)
 * @method $this setFixedDate($fixed_date)
 * @method $this setTime($time)
 * @method $this setDesc($desc)
 * @method $this setAlertCondition($alert_condition)
 */
class Create extends RestAPIRequest
{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
        $this->setMethod(AMapOption::POST);
    }
}