<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/27 16:02
 */

namespace amap\sdk\core;


class AMapException extends \Exception
{
    public function __construct($errorMessage, $errorCode = 0)
    {
        parent::__construct($errorMessage);
        $this->errorMessage = $errorMessage;
        $this->errorCode = $errorCode;
        $this->setErrorType("AMap");
    }

    private $errorCode;
    private $errorMessage;
    private $errorType;

    public function getErrorCode()
    {
        return $this->errorCode;
    }

    public function setErrorCode($errorCode)
    {
        $this->errorCode = $errorCode;
    }

    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    public function setErrorMessage($errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    public function getErrorType()
    {
        return $this->errorType;
    }

    public function setErrorType($errorType)
    {
        $this->errorType = $errorType;
    }
}