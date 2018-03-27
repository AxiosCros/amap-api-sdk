<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/27 16:00
 */
namespace amap\sdk\core\exception;

use amap\sdk\core\AMapException;

class CloudMapException extends AMapException
{
    public function __construct($errorMessage, $errorCode)
    {
        parent::__construct($errorMessage, $errorCode);
        $this->setErrorType("CloudMap");
    }
}