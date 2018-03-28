<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 13:55
 */

namespace amap\sdk\core\traits;


use amap\sdk\core\AMapException;

trait ClientTrait
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