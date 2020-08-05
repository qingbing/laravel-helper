<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace Common\Components;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Zf\Helper\Exceptions\Exception;

/**
 * 模块控制器基类
 *
 * Class Controller
 * @package Helper
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Execute an action on the controller.
     *
     * @param string $method
     * @param array $parameters
     * @return mixed|\Symfony\Component\HttpFoundation\Response
     *
     * @throws Exception
     */
    public function callAction($method, $parameters)
    {
        // action 之前执行
        if (method_exists($this, 'beforeAction')) {
            if (true !== call_user_func_array([$this, 'beforeAction'], ['action' => $method])) {
                throw new Exception('beforeAction', 1020001001);
            }
        }
        // 执行 action
        $return = call_user_func_array([$this, $method], $parameters);
        // action 之后执行
        if (method_exists($this, 'afterAction')) {
            call_user_func_array([$this, 'afterAction'], ['action' => $method]);
        }
        return $return;
    }
}
