<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 09:41
 */

namespace amap\sdk\core\traits;


trait RequestTrait
{
    public function __call($name, $arguments)
    {
        if(strpos($name,'set')!==false){
            $param_name = strtolower(str_replace('set','',$name));
            $this->setParam($param_name,$arguments[0]);
        }

        return $this;
    }
}