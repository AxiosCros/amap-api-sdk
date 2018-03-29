<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/29 10:07
 */

namespace amap\sdk\RestAPI\request\GeoFence;

use amap\sdk\AMapOption;
use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;

/**
 * Class Update
 * @package amap\sdk\RestAPI\request\GeoFence
 * @method $this setName($name)
 * @method $this setCenter($center)
 * @method $this setRadius($radius)
 * @method $this setPoints($points)
 * @method $this setEnable($enable)
 * @method $this setRepeat($repeat)
 * @method $this setTime($time)
 * @method $this setDesc($desc)
 */
class Update extends RestAPIRequest
{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
        $this->setMethod(AMapOption::PATCH);
    }

    /**
     * @param $valid_time
     * @return $this
     */
    public function setValidTime($valid_time)
    {
        $this->setParam("valid_time", $valid_time);
        return $this;
    }

    /**
     * @param $fixed_date
     * @return $this
     */
    public function setFixedDate($fixed_date)
    {
        $this->setParam("fixed_date", $fixed_date);
        return $this;
    }

    /**
     * @param $alert_condition
     * @return $this
     */
    public function setAlertCondition($alert_condition)
    {
        $this->setParam("alert_condition", $alert_condition);
        return $this;
    }
}