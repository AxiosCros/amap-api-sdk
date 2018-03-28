<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 17:11
 */

namespace amap\sdk\RestAPI\request;

use amap\sdk\RestAPI\request\GeoFence\Create;
use amap\sdk\RestAPI\request\GeoFence\Find;

class GeoFence
{
    private $action = "v4/geofence/meta";

    /**
     * @param $name
     * @return Create
     */
    public function create($name){
        $request = new Create($this->action);
        $request->setName($name);
        return $request;
    }

    /**
     * @return Find
     */
    public function find(){
        $request = new Find($this->action);
        return $request;
    }
}