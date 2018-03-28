<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 14:05
 */

namespace amap\sdk\core\exception;

use amap\sdk\core\AMapException;

class RestAPIException extends AMapException
{
    public function __construct($errorMessage, $errorCode = 0)
    {
        parent::__construct($errorMessage, $errorCode);
        $this->setErrorType("RestAPI");
    }
}