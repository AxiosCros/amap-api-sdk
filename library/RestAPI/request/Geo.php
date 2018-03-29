<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 13:56
 */

namespace amap\sdk\RestAPI\request;

use amap\sdk\core\exception\RestAPIException;

/**
 * 坐标转换
 * @package amap\sdk\RestAPI\request
 * @method GeoRequest code()
 * @method GeoRequest recode()
 */
class Geo
{
    protected $actionArray = [
        'code'   => 'v3/geocode/geo',//地理编码
        'recode' => 'v3/geocode/regeo',//逆地理编码
    ];

    /**
     * @param $name
     * @param $arguments
     * @return GeoRequest
     * @throws RestAPIException
     */
    public function __call($name, $arguments)
    {
        if(!isset($this->actionArray[$name])){
            throw new RestAPIException("action not exist");
        }
        $Class = new GeoRequest($this->actionArray[$name]);
        return $Class;
    }
}

