<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/27 15:57
 */

namespace amap\sdk;

define("AMAP_PATH",__DIR__);

class AMap
{
    private static $key;

    private static $secret;

    public static $request_base_url = "http://yuntuapi.amap.com/";

    public static function auth($key = null, $secret = null){
        self::$key = self::key($key);
        self::$secret = self::secret($secret);
    }

    /**
     * @param null $key
     * @return string
     */
    public static function key($key = null){
        if(is_null($key)){
            return self::$key;
        }

        self::$key = $key;

        return self::$key;
    }

    /**
     * @param null $secret
     * @return string
     */
    public static function secret($secret = null){
        if(is_null($secret)){
            return self::$secret;
        }

        self::$secret = $secret;

        return self::$secret;
    }
}