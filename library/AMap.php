<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/27 15:57
 */

namespace amap\sdk;

use amap\sdk\core\AMapException;

define("AMAP_PATH",__DIR__);

class AMap
{
    private static $key;

    private static $secret;

    public static $request_base_url = "http://yuntuapi.amap.com/";

    public static function auth($key, $secret = ""){
        self::$key = $key;
        self::$secret = $secret;
    }

    /**
     * @param null $key
     * @return string
     * @throws AMapException
     */
    public static function key($key = null){
        if(is_null($key)){
            return self::$key;
        }

        if(!is_string($key)){
            throw new AMapException("key error , must be string!");
        }

        self::$key = $key;

        return self::$key;
    }

    /**
     * @param null $secret
     * @return string
     * @throws AMapException
     */
    public static function secret($secret = null){
        if(is_null($secret)){
            return self::$secret;
        }

        if(!is_string($secret)){
            throw new AMapException("secret error , must be string!");
        }

        self::$secret = $secret;

        return self::$secret;
    }
}