<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/27 17:34
 */

namespace amap\sdk\CloudMap\request;

use amap\sdk\core\AMapException;
use amap\sdk\core\AMapRequest;
use amap\sdk\core\exception\CloudMapException;
use amap\sdk\core\exception\FileNotExistException;

/**
 * Class Data
 * @package amap\sdk\CloudMap\request
 * @method $this create()
 * @method $this createByExcel()
 * @method $this update()
 * @method $this delete()
 * @method $this importStatus()
 */
class Data extends AMapRequest
{
    protected $actionArray = [
        'create'        => 'datamanage/data/create',
        'createByExcel' => 'datamanage/data/batchcreate',
        'update'        => 'datamanage/data/update',
        'delete'        => 'datamanage/data/delete',
        'importStatus'  => 'datamanage/batch/importstatus',
    ];

    /**
     * @param $table_id
     * @return $this
     */
    public function setTableId($table_id){
        $this->setParam("tableid",$table_id);
        return $this;
    }

    /**
     * @param $location_type
     * @return $this
     */
    public function setLocationType($location_type){
        $this->setParam("loctype",$location_type);
        return $this;
    }

    /**
     * 设置批量上传的excel文件本地路径
     * @param $file_path
     * @return $this
     * @throws FileNotExistException
     * @throws AMapException
     */
    public function setFilePath($file_path){
        $ext = pathinfo($file_path,PATHINFO_EXTENSION);
        if($ext !== 'csv'){
            throw new AMapException("file extension must be 'csv'");
        }
        $this->setFile($file_path);
        return $this;
    }

    /**
     * @param $data
     * @return $this
     */
    public function setData($data){
        $this->setParam('data',$data);
        return $this;
    }

    public function setBatchid($batchid){
        $this->setParam('batchid',$batchid);
        return $this;
    }

    /**
     * @param $name
     * @param $arguments
     * @return $this
     * @throws CloudMapException
     */
    public function __call($name, $arguments)
    {
        if(!isset($this->actionArray[$name])){
            throw new CloudMapException("action not exist");
        }
        $this->setAction($this->actionArray[$name]);
        RETURN $this;
    }
}