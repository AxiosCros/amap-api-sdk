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
use amap\sdk\RestAPI\request\GeoFence\Delete;
use amap\sdk\RestAPI\request\GeoFence\Find;
use amap\sdk\RestAPI\request\GeoFence\Status;
use amap\sdk\RestAPI\request\GeoFence\Update;

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

    /**
     * @param $gid
     * @return Update
     */
    public function update($gid){
        $request = new Update($this->action);
        return $request->setGid($gid);
    }

    /**
     * @param $gid
     * @return Delete
     */
    public function delete($gid){
        $request = new Delete($this->action);
        return $request->setGid($gid);
    }

    /**
     * @param $diu
     * @return Status
     */
    public function status($diu){
        $request = new Status("v4/geofence/status");
        return $request->setDiu($diu);
    }
}