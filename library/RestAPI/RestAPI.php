<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 13:54
 */

namespace amap\sdk\RestAPI;

use amap\sdk\core\traits\ClientTrait;
use amap\sdk\RestAPI\request\AutoGraspRequest;
use amap\sdk\RestAPI\request\ConvertRequest;
use amap\sdk\RestAPI\request\DistrictRequest;
use amap\sdk\RestAPI\request\Geo;
use amap\sdk\RestAPI\request\Direction;
use amap\sdk\RestAPI\request\InputTipsRequest;
use amap\sdk\RestAPI\request\IPRequest;
use amap\sdk\RestAPI\request\Search;
use amap\sdk\RestAPI\request\StaticMapRequest;
use amap\sdk\RestAPI\request\WeatherRequest;
use amap\sdk\RestAPI\request\Traffic;
use amap\sdk\RestAPI\request\GeoFence;

/**
 * Class RestAPI
 * API Document : http://lbs.amap.com/api/webservice/summary
 * @package amap\sdk\RestAPI
 * @method static Geo geo()
 * @method static Direction direction()
 * @method static Search search()
 * @method static Traffic traffic()
 * @method static GeoFence geoFence()
 */
class RestAPI
{
    use ClientTrait;

    /**
     * 行政区域查询
     * @return DistrictRequest
     */
    public static function district(){
        return (new DistrictRequest("v3/config/district"));
    }

    /**
     * @param string $ip
     * @return IPRequest
     */
    public static function ip($ip = ""){
        return (new IPRequest("v3/ip?"))->setIP($ip);
    }

    /**
     * @return AutoGraspRequest
     */
    public static function autoGrasp(){
        return (new AutoGraspRequest("v3/autograsp"));
    }

    /**
     * 静态地图
     * @param int $zoom
     * @return StaticMapRequest
     */
    public static function staticMap($zoom = 10){
        return (new StaticMapRequest("v3/staticmap"))->setZoom($zoom);
    }

    /**
     * 坐标转换
     * @param $locations
     * @return ConvertRequest
     */
    public static function convert($locations){
        return (new ConvertRequest("v3/assistant/coordinate/convert"))->setLocations($locations);
    }

    /**
     * 天气查询
     * @param $city
     * @return WeatherRequest
     */
    public static function weather($city){
        return (new WeatherRequest("v3/weather/weatherInfo"))->setCity($city);
    }

    /**
     * 输入提示
     * @param $keywords
     * @return InputTipsRequest
     */
    public static function inputTips($keywords){
        return (new InputTipsRequest("v3/assistant/inputtips"))->setKeywords($keywords);
    }
}