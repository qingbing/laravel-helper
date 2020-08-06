<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace Helper;

/**
 * database 助手
 *
 * Class DbHelper
 * @package Helper
 */
class DbHelper
{
    /**
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @param array $params
     * @return array
     */
    public static function paginate(\Illuminate\Database\Eloquent\Builder $builder, $params = [])
    {
        // 参数获取
        $pageNo   = $params['pageNo'] ?? 1;
        $pageSize = $params['pageSize'] ?? 10;
        // 克隆 count-query
        $countBuilder = clone $builder;
        // 取消 count 的无意义表达式
        $countBuilder->getQuery()->orders      = [];
        $countBuilder->getQuery()->unionOrders = [];
        // 分页获取
        $R = [
            'totalCount' => $countBuilder->count(),
            'pageNo'    => $pageNo,
            'pageSize'  => $pageSize,
            'result'     => $builder->forPage($pageNo, $pageSize)->get()->toArray(),
        ];
        return $R;
    }
}