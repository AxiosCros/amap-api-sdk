<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 15:28
 */

namespace amap\sdk\RestAPI\request;

use amap\sdk\AMap;
use amap\sdk\core\traits\RequestTrait;
use amap\sdk\RestAPI\RestAPIRequest;

/**
 * Class StaticMapRequest
 * @package amap\sdk\RestAPI\request
 * @method $this setLocation($location)
 * @method $this setZoom($zoom)
 * @method $this setSize($size)
 * @method $this setScale($scale)
 * @method $this setMarkers($markers)
 * @method $this setLabels($labels)
 * @method $this setPaths($paths)
 * @method $this setTraffic($traffic)
 */
class StaticMapRequest extends RestAPIRequest
{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
    }

    public function buildUrl()
    {
        $domain = "http://" . $this->request_base_url;
        $param_string = $this->formatParam($this->param);
        if (AMap::signSwitch()) {
            $str = $param_string . AMap::secret();
            $sig = md5($str);
            $param_string .= "&sig=" . $sig;
        }
        return $domain . $this->action . "?" . $param_string;
    }
}