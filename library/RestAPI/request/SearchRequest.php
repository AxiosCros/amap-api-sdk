<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 15:07
 */

namespace amap\sdk\RestAPI\request;
use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;


/**
 * Class SearchRequest
 * @package amap\sdk\RestAPI\request
 * @method $this setKeywords($keywords)
 * @method $this setTypes($types)
 * @method $this setCity($city)
 * @method $this setCityLimit($city_limit)
 * @method $this setChildren($children)
 * @method $this setOffset($offset)
 * @method $this setPage($page)
 * @method $this setBuilding($building)
 * @method $this setFloor($floor)
 * @method $this setExtensions($extensions)
 * @method $this setOutput($output)
 * @method $this setCallback($callback)
 * @method $this setId($id)
 * @method $this setLocation($location)
 * @method $this setRadius($radius)
 * @method $this setSortRule($sort_rule)
 * @method $this setPolygon($polygon)
 */
class SearchRequest extends RestAPIRequest
{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
    }
}