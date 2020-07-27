<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace Helper;

use Zf\Helper\JwtHelper;

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
     * @return \Zf\Helper\Abstracts\Component|JwtHelper
     */
    public static function jwt()
    {
        return JwtHelper::getInstance([
            'privateKey' => env('JWT_PRIVATE_KEY'),
            'publicKey'  => env('JWT_PUBLIC_KEY'),
        ]);
    }
}