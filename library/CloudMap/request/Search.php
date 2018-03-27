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
        'local'       => 'datasearch/local',
        'around'      => 'datasearch/around',
    ];
}