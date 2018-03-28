<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 14:00
 */

namespace amap\sdk\RestAPI;

use amap\sdk\AMapOption;
use amap\sdk\core\AMapRequest;

class RestAPIRequest extends AMapRequest
{
    public function __construct(string $action)
    {
        parent::__construct($action);
        $this->request_base_url = AMapOption::REST_API_REQUEST_BASE_URL;
    }
}