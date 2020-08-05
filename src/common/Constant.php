<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace Common;

/**
 * 变量收集类
 *
 * Class Constant
 * @package Helper
 */
class Constant
{
    // 验证的规则缓存key
    const CACHE_KEY_VALIDATOR_RULES = 'cache.validator.rules';

    /**
     * 返回本组件类所有的缓存key
     *
     * @return array
     */
    public static function cacheKeys()
    {
        return [
            self::CACHE_KEY_VALIDATOR_RULES,
        ];
    }
}