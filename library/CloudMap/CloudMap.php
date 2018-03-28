<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/27 15:56
 */
namespace amap\sdk\CloudMap;

use amap\sdk\CloudMap\request\Data;
use amap\sdk\CloudMap\request\Nearby;
use amap\sdk\CloudMap\request\Search;
use amap\sdk\core\traits\ClientTrait;

/**
 * Class CloudMap
 * API Document : http://lbs.amap.com/api/yuntu/reference/cloudstorage
 * @package amap\sdk\CloudMap
 * @method static Data data()
 * @method static Nearby nearby()
 * @method static Search search()
 */
class CloudMap
{
    use ClientTrait;
}