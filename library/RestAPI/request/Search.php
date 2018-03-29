<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 14:52
 */

namespace amap\sdk\RestAPI\request;

use amap\sdk\core\exception\RestAPIException;

/**
 * Class Search
 * @package amap\sdk\RestAPI\request
 * @method SearchRequest keyword()
 * @method SearchRequest around()
 * @method SearchRequest polygon()
 * @method SearchRequest detail()
 */
class Search {
    protected $actionArray = [
        'keyword'   => 'v3/place/text',//关键字搜索
        'around'    => 'v3/place/around',//周边搜索
        'polygon'   => 'v3/place/polygon',//多边形搜索
        'detail'    => 'v3/place/detail'//ID查询
    ];

    /**
     * @param $name
     * @param $arguments
     * @return SearchRequest
     * @throws RestAPIException
     */
    public function __call($name, $arguments)
    {
        if(!isset($this->actionArray[$name])){
            throw new RestAPIException("action not exist");
        }
        $Class = new SearchRequest($this->actionArray[$name]);
        return $Class;
    }
}

