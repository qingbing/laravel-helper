<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace Helper;

/**
 * 请求帮助助手
 *
 * Class ReqHelper
 * @package Helper
 */
class ReqHelper
{
    /**
     * 请求 LOG-ID
     * @var string
     */
    private static $_logId;

    /**
     * 获取当前的请求的 LOG-ID
     * @return string
     */
    public static function getLogId(): string
    {
        if (!self::$_logId) {
            if (isset($_SERVER['HTTP_LOG_ID'])) {
                $logId = $_SERVER['HTTP_LOG_ID'];
            } else if (isset($_REQUEST['LOG_ID'])) {
                $logId = $_REQUEST['LOG_ID'];
            } else {
                $i     = mt_rand(1, 0x7FFFFF);
                $logId = sprintf(
                    "%s%08x%06x%04x%06x",
                    env('APP_NAME') . '-',
                    time() & 0xFFFFFFFF,
                    crc32(substr((string)gethostname(), 0, 256)) >> 8 & 0xFFFFFF,
                    getmypid() & 0xFFFF,
                    $i = $i > 0xFFFFFE ? 1 : $i + 1
                );
            }
            self::$_logId = $logId;
        }
        return self::$_logId;
    }
}