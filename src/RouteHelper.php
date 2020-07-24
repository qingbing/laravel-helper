<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace Helper;

use Illuminate\Support\Facades\Route;

/**
 * 路由辅助类
 *
 * Class RouteHelper
 * @package Helper
 */
class RouteHelper
{
    /**
     * 默认添加的路由
     */
    const ROUTE_TYPE_LIST    = 'list'; // 列表
    const ROUTE_TYPE_CREATE  = 'create'; // 增加
    const ROUTE_TYPE_UPDATE  = 'edit'; // 修改
    const ROUTE_TYPE_DESTROY = 'delete'; // 删除
    const ROUTE_TYPE_SHOW    = 'show'; // 详情
    /**
     * @var array 默认路由
     */
    public static $routeMap = [
        self::ROUTE_TYPE_LIST    => ['actionList', ['get', 'post']],
        self::ROUTE_TYPE_CREATE  => ['actionCreate', ['post']],
        self::ROUTE_TYPE_UPDATE  => ['actionEdit', ['post']],
        self::ROUTE_TYPE_DESTROY => ['actionDelete', ['post']],
        self::ROUTE_TYPE_SHOW    => ['actionView', ['get', 'post']],
    ];

    /**
     * 简化注册自定义路由
     *
     * @param string $controllerName
     * @param $prefix
     * @param array $excepts
     */
    public static function registerCURLRoute(string $controllerName, string $prefix, array $excepts = [])
    {
        foreach (static::$routeMap as $route => $config) {
            if (in_array($route, $excepts)) {
                continue;
            }
            Route::match($config[1], "{$prefix}/{$route}", "{$controllerName}@{$config[0]}");
        }
    }
}