<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/30 16:39
 */

namespace amap\sdk\URLApi;

use amap\sdk\AMapOption;
use amap\sdk\core\AMapRequest;

class URLApiRequest extends AMapRequest
{
    public function __construct(string $action)
    {
        parent::__construct($action);
        $this->request_base_url = AMapOption::URL_API_REQUEST_BASE_URL;
    }
}