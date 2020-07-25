<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace Helper;

use Illuminate\Support\Env;

/**
 * app 助手类
 *
 * Class AppHelper
 * @package Helper
 */
class AppHelper
{
    /**
     * 判断是否是本地开发环境
     *
     * @return bool
     */
    public static function isLocal()
    {
        return 0 === strcasecmp(Env::get('APP_ENV'), 'local');
    }
}