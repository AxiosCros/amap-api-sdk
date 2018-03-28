<?php
/**
 * @author: axios
 *
 * @email: axiosleo@foxmail.com
 * @blog:  http://hanxv.cn
 * @datetime: 2018/3/28 13:54
 */

namespace amap\sdk\RestAPI;

use amap\sdk\core\traits\ClientTrait;
use amap\sdk\RestAPI\request\Geo;
use amap\sdk\RestAPI\request\Direction;

/**
 * Class RestAPI
 * @package amap\sdk\RestAPI
 * @method static Geo geo()
 * @method static Direction direction()
 */
class RestAPI
{
    use ClientTrait;
}