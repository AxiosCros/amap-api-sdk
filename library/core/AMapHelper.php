<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/27 16:05
 */

namespace amap\sdk\core;


use amap\sdk\core\help\ArrayToXML;

class AMapHelper
{
    public static function xmlToArray($xml)
    {
        libxml_disable_entity_loader(true);
        $values = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        return $values;
    }

    public static function arrayToXml($data, $rootNodeName = 'data')
    {
        $xml = new ArrayToXML();
        $xml_content = $xml->buildXML($data, $rootNodeName);
        return $xml_content."\n";
    }

    public static function parseEnableParam($enable){
        return in_array($enable,["1",1,"On","on","ON"]) ? "On":"Off";
    }

    public static function object2Array($object) {
        $object =  json_decode( json_encode( $object),true);
        return  $object;
    }

    public static function arrayToJson($array){
        if(is_array($array)){
            $array = json_encode($array, true);
        }
        return $array;
    }

    public static function jsonToArray($json){
        $temp = \GuzzleHttp\json_decode($json,true);
        if(empty($temp) && $json != $temp){
            return $json;
        }

        return $temp;
    }

    public static function boolToString($bool){
        if(strtolower($bool) === "false" ){
            $bool = false;
        }
        return $bool ? "True":"False";
    }
}