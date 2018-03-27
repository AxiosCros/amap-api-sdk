<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/27 17:02
 */

namespace amap\sdk\CloudMap;

use amap\sdk\core\AMapRequest;
use amap\sdk\core\exception\CloudMapException;
use amap\sdk\core\exception\FileNotExistException;

class CloudMapRequest extends AMapRequest
{
    protected $actionArray = [
        'create'        => 'datamanage/data/create',
        'createByExcel' => 'datamanage/data/batchcreate',
        'update'        => 'datamanage/data/update',
        'delete'        => 'datamanage/data/delete',
        'importStatus'  => 'datamanage/batch/importstatus'
    ];

    /**
     * CloudMapRequest constructor.
     * @param $action
     * @throws CloudMapException
     * @throws \amap\sdk\core\AMapException
     */
    public function __construct($action)
    {
        if(!isset($this->actionArray[$action])){
            throw new CloudMapException("action not exist");
        }
        parent::__construct($this->actionArray[$action]);
    }

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
     */
    public function setFilePath($file_path){
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
}