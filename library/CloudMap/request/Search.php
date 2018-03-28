<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/27 17:39
 */

namespace amap\sdk\CloudMap\request;

use amap\sdk\core\AMapRequest;
use amap\sdk\core\exception\CloudMapException;
use amap\sdk\core\traits\RequestTrait;

/**
 * Class Search
 * @package amap\sdk\CloudMap\request
 * @method SearchRequest local()
 * @method SearchRequest around()
 * @method SearchRequest polygon()
 * @method SearchRequest searchById()
 * @method SearchRequest dataList()
 * @method SearchRequest statisticsProvince()
 * @method SearchRequest statisticsCity()
 * @method SearchRequest statisticsDistrict()
 */
class Search extends AMapRequest
{
    protected $actionArray = [
        'local' => 'datasearch/local',
        'around' => 'datasearch/around',
        'polygon' => 'datasearch/polygon',
        'searchById' => 'datasearch/id',
        'dataList' => 'datamanage/data/list',
        'statisticsProvince' => 'datasearch/statistics/province',
        'statisticsCity' => 'datasearch/statistics/city',
        'statisticsDistrict' => 'datasearch/statistics/district'
    ];

    /**
     * @param $name
     * @param $arguments
     * @return SearchRequest
     * @throws CloudMapException
     */
    public function __call($name, $arguments)
    {
        if(!isset($this->actionArray[$name])){
            throw new CloudMapException("action not exist");
        }
        $Class = new SearchRequest($this->actionArray[$name]);
        return $Class;
    }
}

class SearchRequest extends AMapRequest{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
    }
}