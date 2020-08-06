<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace Common\Models\Dto;


use Common\Components\Model;

/**
 * 平台管理表
 *
 * Class DtoPlatform
 * @package Common\Models\Dto
 *
 * @property int $id 自增ID
 * @property string $key 项目平台代码
 * @property string $name 平台名称
 * @property string $description 平台描述
 * @property int $is_enable 启用状态[1:未启用,2:已启用]
 * @property int $sort_order 显示排序
 * @property \Illuminate\Support\Carbon $created_at 创建时间
 * @property \Illuminate\Support\Carbon $updated_at 更新时间
 */
class DtoPlatform extends Model
{
    protected $table = 'zf_platform';
}