<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/27 16:03
 */

namespace amap\sdk\core;

use amap\sdk\AMap;
use amap\sdk\core\exception\FileNotExistException;

class AMapRequest
{
    protected $request_base_url = "";

    protected $action = "";

    protected $sig = "";

    protected $param = [];

    protected $file_path;

    /**
     * AMapRequest constructor
     * @param string $action
     */
    public function __construct($action)
    {
        $this->param['key'] = AMap::key();
        $this->action = $action;
    }

    protected function setAction($action)
    {
        $this->action = $action;
    }

    public function setParam($key, $value)
    {
        $this->param[$key] = $value;
    }

    /**
     * @param string $key
     * @return array|mixed
     * @throws AMapException
     */
    public function params($key = null)
    {
        $param = $this->param;

        if (is_null($key)) {
            return $param;
        }

        if (!isset($param[$key])) {
            throw new AMapException($key . " param not exist");
        }

        return $param[$key];
    }

    /**
     * @param $file_path
     * @throws FileNotExistException
     */
    protected function setFile($file_path)
    {
        if (!file_exists($file_path)) {
            throw new FileNotExistException($file_path . " not exist");
        }
        $this->file_path = $file_path;
        $this->param['file'] = file_get_contents($file_path);
    }

    /**
     * @return AMapResponse
     */
    public function request()
    {
        if (isset($this->param['data'])) {
            $this->param['data'] = json_encode($this->param['data']);
        }
        ksort($this->param);
        $str = "";
        $n = 0;
        foreach ($this->param as $k => $v) {
            if ($n !== 0) {
                $str .= "&";
            }
            $str .= $k . "=" . $v;
            $n++;
        }
        $str .= AMap::secret();
        $sig = md5($str);
        $this->param['sig'] = $sig;

        return AMapHelper::curl($this->request_base_url, $this->action, $this->param);
    }
}