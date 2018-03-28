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

    private static $sign_switch;

    const OpenSign = 1;

    const CloseSign = 0;

    public static function auth($key = null, $secret = null, $sign_switch = self::OpenSign){
        self::$key = self::key($key);
        self::$secret = self::secret($secret);
        self::$sign_switch = self::signSwitch($sign_switch);
    }

    public static function signSwitch($sign_switch = null){
        if(is_null($sign_switch)){
            return self::$sign_switch;
        }

        self::$sign_switch = $sign_switch;

        return self::$sign_switch;
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