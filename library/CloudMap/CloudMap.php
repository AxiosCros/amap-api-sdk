<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/27 15:56
 */
namespace amap\sdk\CloudMap;

use amap\sdk\CloudMap\request\Data;
use amap\sdk\CloudMap\request\Nearby;
use amap\sdk\CloudMap\request\Search;
use amap\sdk\core\AMapException;

/**
 * Class CloudMap
 * API Document : http://lbs.amap.com/api/yuntu/reference/cloudstorage
 * @package amap\sdk\CloudMap
 * @method static Data data()
 * @method static Nearby nearby()
 * @method static Search search()
 */
class CloudMap
{
    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws AMapException
     */
    public static function __callStatic($name, $arguments)
    {
        $class_name = ucfirst(strtolower($name));
        $class_name = __NAMESPACE__ . '\\request\\'.$class_name;
        if(!class_exists($class_name)){
            throw new AMapException("Class not exist");
        }
        $instance = new $class_name($arguments);
        return $instance;
    }
}