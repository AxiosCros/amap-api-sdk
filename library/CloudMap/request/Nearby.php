<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/27 17:38
 */

namespace amap\sdk\CloudMap\request;

use amap\sdk\core\AMapRequest;
use amap\sdk\core\exception\CloudMapException;

class Nearby extends AMapRequest
{
    protected $actionArray = [
        'around'      => 'nearby/around',
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
}