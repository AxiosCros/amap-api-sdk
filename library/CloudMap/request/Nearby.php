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
use amap\sdk\core\traits\RequestTrait;

/**
 * Class Nearby
 * @package amap\sdk\CloudMap\request
 * @method NearByRequest around()
 */
class Nearby
{
    protected $actionArray = [
        'around'      => 'nearby/around',
    ];

    /**
     * @param $name
     * @param $arguments
     * @return NearByRequest
     * @throws CloudMapException
     */
    public function __call($name, $arguments)
    {
        if(!isset($this->actionArray[$name])){
            throw new CloudMapException("action not exist");
        }
        $Class = new NearByRequest($this->actionArray[$name]);
        return $Class;
    }
}

class NearByRequest extends AMapRequest{
    use RequestTrait;

    public function __construct(string $action)
    {
        parent::__construct($action);
    }
}