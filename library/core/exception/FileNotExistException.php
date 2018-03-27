<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/27 16:37
 */

namespace amap\sdk\core\exception;

use amap\sdk\core\AMapException;

class FileNotExistException extends AMapException
{
    public function __construct($errorMessage, $errorCode = 0)
    {
        parent::__construct($errorMessage, $errorCode);
        $this->setErrorType(__CLASS__);
    }
}