<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/27 15:56
 */
namespace amap\sdk\CloudMap;

/**
 * Class CloudMap
 * API Document : http://lbs.amap.com/api/yuntu/reference/cloudstorage
 * @package amap\sdk\CloudMap
 * @method static CloudMapRequest create()
 * @method static CloudMapRequest createByExcel()
 * @method static CloudMapRequest update()
 * @method static CloudMapRequest delete()
 * @method static CloudMapRequest importStatus()
 */
class CloudMap
{
    /**
     * @param $name
     * @param $arguments
     * @return CloudMapRequest
     * @throws \amap\sdk\core\AMapException
     * @throws \amap\sdk\core\exception\CloudMapException
     */
    public static function __callStatic($name, $arguments)
    {
        $instance = new CloudMapRequest($name);
        return $instance;
    }
}