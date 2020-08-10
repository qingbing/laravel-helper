<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace Helper;

use Zf\Helper\Plugins\Jwt;
use Zf\Helper\Plugins\Qiniu;

/**
 * app 助手类
 *
 * Class AppHelper
 * @package Helper
 */
class AppHelper
{
    /**
     * 实例化 Jwt 组件
     *
     * @param array|null $properties
     * @return \Zf\Helper\Abstracts\Component|Jwt
     */
    public static function jwt(array $properties = null)
    {
        $properties = $properties ?? [
                'privateKey' => env('JWT_PRIVATE_KEY'),
                'publicKey'  => env('JWT_PUBLIC_KEY'),
            ];
        return Jwt::getInstance($properties);
    }

    /**
     * 实例化 quniu 组件
     *
     * @param array|null $properties
     * @return \Zf\Helper\Abstracts\Component|Qiniu
     */
    public static function qiniu(array $properties = null)
    {
        $properties = $properties ?? [
                'accessKey' => env('QINIU_ACCESS_KEY'),
                'secretKey' => env('QINIU_SECRET_KEY'),
                'bucket'    => env('QINIU_BUCKET') ?? null,
            ];
        return Qiniu::getInstance($properties);
    }
}