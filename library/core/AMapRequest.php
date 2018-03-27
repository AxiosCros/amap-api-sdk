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
use GuzzleHttp\Client;

class AMapRequest
{
    protected $request_base_url = "yuntuapi.amap.com/";

    protected $action = "";

    protected $data = [];

    protected $sig = "";

    protected $param = [];

    /**
     * AMapRequest constructor.
     * @throws AMapException
     */
    public function __construct()
    {
        $this->param['key'] = AMap::key();
    }

    protected function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    public function setParam($key, $value){
        $this->param[$key] = $value;
    }

    /**
     * @return AMapResponse
     * @throws AMapException
     */
    public function request()
    {
        $this->param['data'] = json_encode($this->data);
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
        $request_param['sig'] = $sig;
        return self::curl($this->request_base_url, $this->action, $request_param);
    }

    private static function curl($domain, $path, $data = [], $method = "POST", $header = [])
    {
        $domain = "http://" . $domain;
        $client = new Client(['base_uri' => $domain]);
        $result = $client->request($method, $path, [
            'http_errors' => false,
            'form_params' => $data,
            'headers' => $header
        ]);
        $body = $result->getBody();
        $response = new AMapResponse();
        $response->setHeader($result->getHeaders());
        $body = (string)$body;
        $content_type = $result->getHeaderLine("content-type");
        if (strpos($content_type, "xml") !== false) {
            $body = AMapHelper::xmlToArray($body);
        } else if (strpos($content_type, "json") !== false) {
            $body = AMapHelper::jsonToArray($body);
        }
        $response->setBody($body);
        $response->setStatus($result->getStatusCode());
        return $response;
    }
}