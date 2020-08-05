<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace Helper;

/**
 * 请求的统一响应
 *
 * Class Response
 * @package Helper
 */
class ResHelper
{
    /**
     * 请求的成功响应返回
     *
     * @param mixed $data
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function success($data = [], string $message = 'success')
    {
        return self::json($data, 0, $message);
    }

    /**
     * 请求的异常响应返回
     *
     * @param string $message
     * @param int $code
     * @param mixed $data
     * @return \Illuminate\Http\JsonResponse
     */
    public static function failure(string $message = 'failure', int $code = -100, $data = [])
    {
        return self::json($data, $code, $message);
    }

    /**
     * 请求的响应返回
     *
     * @param mixed $data
     * @param int $code
     * @param string $message
     * @return \Illuminate\Http\JsonResponse
     */
    public static function json($data, int $code = 0, string $message = 'ok')
    {
        return response()->json([
            'time' => microtime(true),
            'code' => $code,
            'msg'  => $message,
            'data' => $data,
        ])->withHeaders([
            'log-id' => ReqHelper::getLogId(),
        ]);
    }
}