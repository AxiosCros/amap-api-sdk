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
 * @method $this setId($id)
 * @method $this setGid($gid)
 * @method $this setName($name)
 * @method $this setEnable($enable)
 */
class Find extends RestAPIRequest
{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
        $this->setMethod(AMapOption::GET);
    }

    /**
     * @param int $page_number
     * @return $this
     */
    public function setPageNumber($page_number = 1){
        $this->setParam("page_no",$page_number);
        return $this;
    }

    /**
     * @param $page_size
     * @return $this
     */
    public function setPageSize($page_size){
        $this->setParam("page_size",$page_size);
        return $this;
    }

    /**
     * @param $start_time
     * @return $this
     */
    public function setStartTime($start_time){
        $this->setParam("start_time",$start_time);
        return $this;
    }

    /**
     * @param $end_time
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->setParam("end_time",$end_time);
        return $this;
    }
}