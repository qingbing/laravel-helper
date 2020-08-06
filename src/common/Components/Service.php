<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace Common\Components;


use Illuminate\Support\Facades\DB;
use Zf\Helper\Abstracts\Singleton;
use Zf\Helper\Exceptions\BusinessException;

/**
 * 逻辑处理服务
 *
 * Class Service
 * @package Common\Components
 */
class Service extends Singleton
{
    /**
     * @var bool 是否开启操作日志，默认关闭
     */
    protected $openLog = false;
    /**
     * @var string 日志表
     */
    protected $logTable = 'zf_operate_log';
    /**
     * @var int 登录用户
     */
    protected $logUid;
    /**
     * @var string 用户名
     */
    protected $logUsername;
    /**
     * @var string 日志类型
     */
    protected $logType;
    /**
     * @var string 日志消息
     */
    protected $logMessage = '';
    /**
     * @var string 日志关键字
     */
    protected $logKeyword = '';
    /**
     * @var array 记录的日志辅助内容
     */
    protected $logData = [];

    /**
     * 操作成功，记录日志，如果开启
     *
     * @param mixed $return
     * @return mixed
     */
    protected function success($return = null)
    {
        if ($this->openLog) {
            $data = [
                'type'        => $this->logType,
                'keyword'     => $this->logKeyword,
                'message'     => $this->logMessage,
                'data'        => is_array($this->logData) ? json_encode($this->logData) : $this->logData,
                'op_ip'       => request()->getClientIp(),
                'op_uid'      => $this->logUid,
                'op_username' => $this->logUsername,
            ];
            DB::table($this->logTable)->insert($data);
        }
        return $return;
    }

    /**
     * 抛出业务异常
     *
     * @param string $message
     * @param int $code
     * @throws BusinessException
     */
    protected function throwBusinessException(string $message, $code = 10000)
    {
        throw new BusinessException($message, $code);
    }
}