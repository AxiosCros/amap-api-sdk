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

class Search extends AMapRequest
{
    protected $actionArray = [
        'local' => 'datasearch/local',
        'around' => 'datasearch/around',
        'polygon' => 'datasearch/polygon',
        'id' => 'datasearch/id',
        'dataList' => 'datamanage/data/list',
        'statisticsProvince' => 'datasearch/statistics/province',
        'statisticsCity' => 'datasearch/statistics/city',
        'statisticsDistrict' => 'datasearch/statistics/district'
    ];
}