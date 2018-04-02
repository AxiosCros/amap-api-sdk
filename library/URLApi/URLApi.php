<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/30 16:37
 */

namespace amap\sdk\URLApi;

use amap\sdk\core\traits\ClientTrait;
use amap\sdk\URLApi\request\Marker;
use amap\sdk\URLApi\request\Navigation;
use amap\sdk\URLApi\request\Nearby;
use amap\sdk\URLApi\request\PoiDetail;
use amap\sdk\URLApi\request\Search;

/**
 * Class URLApi
 * @package amap\sdk\URLApi
 */
class URLApi
{
    use ClientTrait;

    /**
     * 单点/多点标注
     * @return Marker
     */
    public static function marker(){
        return (new Marker());
    }

    /**
     * 地点详情页
     * @return PoiDetail
     */
    public static function poiDetail(){
        return (new PoiDetail());
    }

    /**
     * 搜索查询
     * @return Search
     */
    public static function search(){
        return (new Search());
    }

    /**
     * 周边生活服务页
     * @return Nearby
     */
    public static function nearby(){
        return (new Nearby());
    }

    /**
     * 路径规划
     * @return Navigation
     */
    public static function navigation()
    {
        return (new Navigation());
    }

    public static function line(){

    }
}