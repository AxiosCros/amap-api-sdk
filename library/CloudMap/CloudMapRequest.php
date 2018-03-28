<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 14:03
 */

namespace amap\sdk\CloudMap;

use amap\sdk\AMapOption;
use amap\sdk\core\AMapRequest;

class CloudMapRequest extends AMapRequest
{
    public function __construct(string $action)
    {
        parent::__construct($action);
        $this->request_base_url = AMapOption::CLOUD_MAP_REQUEST_BASE_URL;
    }
}