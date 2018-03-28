<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 14:47
 */

namespace amap\sdk\RestAPI\request;

use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;

/**
 * Class DistrictRequest
 * @package amap\sdk\RestAPI\request
 * @method $this setKeywords($keywords)
 * @method $this setSubDistrict($sub_district)
 * @method $this setPage($page)
 * @method $this setOffset($offset)
 * @method $this setExtensions($extensions)
 * @method $this setFilter($filter)
 * @method $this setCallback($callback)
 * @method $this setOutput($output)
 */
class DistrictRequest extends RestAPIRequest
{
    public function __construct(string $action)
    {
        parent::__construct($action);
    }

    use RequestTrait;
}