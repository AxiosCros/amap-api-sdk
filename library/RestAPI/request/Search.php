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

class Search {
    protected $actionArray = [
        'keyword'   => 'v3/place/text',
        'around'    => 'v3/place/around',
        'polygon'   => 'v3/place/polygon',
        'detail'    => 'v3/place/detail'
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

