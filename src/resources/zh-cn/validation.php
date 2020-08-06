<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute 必须接受', // 必须为 yes、 on、 1、或 true.
    'active_url'           => ':attribute 必须是一个合法的 URL',
    'after'                => ':attribute 必须是 :date 之后的一个日期',
    'after_or_equal'       => ':attribute 必须是 :date 之后或相同的一个日期',
    'alpha'                => ':attribute 只能包含字母',
    'alpha_dash'           => ':attribute 只能包含字母、数字、中划线或下划线',
    'alpha_num'            => ':attribute 只能包含字母和数字',
    'array'                => ':attribute 必须是一个数组',
    'before'               => ':attribute 必须是 :date 之前的一个日期',
    'before_or_equal'      => ':attribute 必须是 :date 之前或相同的一个日期',
    'between'              => [
        'numeric' => ':attribute 必须在 :min 到 :max 之间',
        'file'    => ':attribute 必须在 :min 到 :max KB 之间',
        'string'  => ':attribute 必须在 :min 到 :max 个字符之间',
        'array'   => ':attribute 必须在 :min 到 :max 项之间',
    ],
    'boolean'              => ':attribute 必须是 true 或 false, 1 或 0 ',
    'confirmed'            => ':attribute 确认不匹配',
    'date'                 => ':attribute 必须是一个合法的日期',
    'date_equals'          => ':attribute 必须是 :date',
    'date_format'          => ':attribute 与给定的格式 :format 不符合',
    'different'            => ':attribute 必须不同于 :other',
    'digits'               => ':attribute 必须是 :digits 位',
    'digits_between'       => ':attribute 必须在 :min 和 :max 位之间',
    'dimensions'           => ':attribute 具有无效的图片尺寸',
    'distinct'             => ':attribute 有重复值',
    'email'                => ':attribute 必须是一个合法的电子邮件地址',
    'exists'               => '选定的 :attribute 无效',
    'file'                 => ':attribute 必须是一个文件',
    'filled'               => ':attribute 必须填写',
    'ends_with'            => ':attribute 必须以下之一结尾: :values',
    'gt'                   => [
        'numeric' => ':attribute 必须大于 :value',
        'file'    => ':attribute 必须大于 :value KB',
        'string'  => ':attribute 必须大于 :value 个字符',
        'array'   => ':attribute 必须大于 :value 项',
    ],
    'gte'                  => [
        'numeric' => ':attribute 必须大于或等于 :value',
        'file'    => ':attribute 必须大于或等于 :value KB',
        'string'  => ':attribute 必须大于或等于 :value 个字符',
        'array'   => ':attribute 必须大于或等于 :value 项',
    ],
    'image'                => ':attribute 必须是 jpeg, png, bmp 或者 gif 格式的图片',
    'in'                   => '选定的 :attribute 无效',
    'in_array'             => ':attribute 不存在于 :other',
    'integer'              => ':attribute 必须是个整数',
    'ip'                   => ':attribute 必须是一个合法的 IP 地址',
    'ipv4'                 => ':attribute 必须是 IPv4 地址',
    'ipv6'                 => ':attribute 必须是 IPv6 地址',
    'json'                 => ':attribute必须是一个合法的 JSON 字符串',
    'lt'                   => [
        'numeric' => ':attribute 必须小于 :value',
        'file'    => ':attribute 必须小于 :value KB',
        'string'  => ':attribute 必须小于 :value 字符',
        'array'   => ':attribute 必须小于 :value 项',
    ],
    'lte'                  => [
        'numeric' => 'The :attribute 必须小于或等于 :value',
        'file'    => 'The :attribute 必须小于或等于 :value KB',
        'string'  => 'The :attribute 必须小于或等于 :value 字符',
        'array'   => 'The :attribute 必须小于或等于 :value 项',
    ],
    'max'                  => [
        'numeric' => ':attribute 的最大值为 :max 位',
        'file'    => ':attribute 的最大为 :max',
        'string'  => ':attribute 的最大长度为 :max 字符',
        'array'   => ':attribute 的最大个数为 :max 个',
    ],
    'mimes'                => ':attribute 的文件类型必须是: values',
    'mimetypes'            => ':attribute 的文件类型必须是: values',
    'min'                  => [
        'numeric' => ':attribute 的最小值为 :min',
        'file'    => ':attribute 大小至少为 :min KB',
        'string'  => ':attribute 的最小长度为 :min 字符',
        'array'   => ':attribute 至少有 :min 项',
    ],
    'not_in'               => '选定的 :attribute 无效',
    'not_regex'            => ':attribute 格式无效',
    'numeric'              => ':attribute 必须是数字',
    'password'             => '密码不正确',
    'present'              => ':attribute 必须存在',
    'regex'                => ':attribute 格式无效',
    'required'             => ':attribute 不能为空',
    'required_if'          => ':attribute 当 :other 是 :value 时不能为空',
    'required_unless'      => '除非 :other 是在 :values 中，否则 :attribute 不能为空',
    'required_with'        => '当 :values 存在时 :attribute 不能为空',
    'required_with_all'    => '当 :values 存在时 :attribute 不能为空',
    'required_without'     => '当 :values 不存在时 :attribute 不能为空',
    'required_without_all' => '当 :values 不存在时 :attribute 不能为空',
    'same'                 => ':attribute 和 :other 必须相同',
    'size'                 => [
        'numeric' => ':attribute 必须是 :size 位',
        'file'    => ':attribute 必须是 :size KB',
        'string'  => ':attribute 必须是 :size 个字符',
        'array'   => ':attribute 必须包括 :size 项',
    ],
    'starts_with'          => ':attribute 必须以 :values 中之一开始',
    'string'               => ':attribute 必须是一个字符串',
    'timezone'             => ':attribute 必须是个有效的时区',
    'unique'               => ':attribute 已存在',
    'uploaded'             => ':attribute 上传失败',
    'url'                  => ':attribute 必须有效的URL',
    'uuid'                 => ':attribute 必须是有效的 UUID',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
