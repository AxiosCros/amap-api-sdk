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
use amap\sdk\core\traits\RequestTrait;

/**
 * Class Data
 * @package amap\sdk\CloudMap\request
 * @method DataRequest createTable()
 * @method DataRequest create()
 * @method DataRequest createByExcel()
 * @method DataRequest update()
 * @method DataRequest delete()
 * @method DataRequest importStatus()
 */
class Data
{
    protected $actionArray = [
        'createTable'   => 'datamanage/table/create',
        'create'        => 'datamanage/data/create',
        'createByExcel' => 'datamanage/data/batchcreate',
        'update'        => 'datamanage/data/update',
        'delete'        => 'datamanage/data/delete',
        'importStatus'  => 'datamanage/batch/importstatus',
    ];

    /**
     * @param $name
     * @param $arguments
     * @return DataRequest
     * @throws CloudMapException
     * @throws AMapException
     */
    public function __call($name, $arguments)
    {
        if(!isset($this->actionArray[$name])){
            throw new CloudMapException("action not exist");
        }
        $Class = new DataRequest($this->actionArray[$name]);
        return $Class;
    }
}

/**
 * Class DataRequest
 * @package amap\sdk\CloudMap\request
 * @method $this setIds($ids)
 * @method $this setName($name)
 * @method $this setTableId($table_id)
 * @method $this setData($data)
 * @method $this setBatchid($batchid)
 */
class DataRequest extends AMapRequest{

    use RequestTrait;

    /**
     * DataRequest constructor.
     * @param string $action
     */
    public function __construct(string $action)
    {
        parent::__construct($action);
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
}