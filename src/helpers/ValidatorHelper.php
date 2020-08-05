<?php
/**
 * @link        http://www.phpcorner.net
 * @author      qingbing<780042175@qq.com>
 * @copyright   Chengdu Qb Technology Co., Ltd.
 */

namespace Helper;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Validator;
use Zf\Helper\Abstracts\Component;
use Zf\Helper\Exceptions\Exception;

/**
 * 验证器助手
 *
 * Class ValidatorHelper
 * @package Helper
 */
class ValidatorHelper extends Component
{
    /**
     * @var array 传入规则
     */
    public $rules = [];

    private $_attributes        = []; // 属性集合
    private $_attributeLabels   = []; // 标签集合
    private $_attributeMessages = []; // 消息集合
    private $_attributeRules    = []; // 规则集合
    private $_attributeDefaults = []; // 默认值集合

    /**
     * @var array|\Illuminate\Contracts\Validation\Validator
     */
    private $_validator;

    /**
     * 构造函数后执行 : 解析验证规则
     *
     * @throws Exception
     */
    protected function init()
    {
        if (empty($this->rules)) {
            return;
        }
        $cacheKey = Constant::CACHE_KEY_VALIDATOR_RULES . '-' . serialize($this->rules);
        if (\App::isLocal() || null === ($out = Cache::get($cacheKey))) {
            $attributes        = [];
            $attributeLabels   = [];
            $attributeMessages = [];
            $attributeRules    = [];
            $attributeDefaults = [];
            foreach ($this->rules as $property => $rule) {
                $parse = $this->parseRule($property, $rule);
                array_push($attributes, $parse['attribute']);
                $attributeLabels[$parse['attribute']] = $parse['attributeLabel'];
                $attributeMessages                    = array_merge($attributeMessages, $parse['messages']);
                $attributeRules[$parse['attribute']]  = $parse['rules'];
                if (null !== $parse['default']) {
                    $attributeDefaults[$parse['attribute']] = $parse['default'];
                }
            }
            $out = [
                'attributes'        => $attributes,
                'attributeLabels'   => $attributeLabels,
                'attributeMessages' => $attributeMessages,
                'attributeRules'    => $attributeRules,
                'attributeDefaults' => $attributeDefaults,
            ];
            Cache::put($cacheKey, serialize($out));
        } else {
            $out = unserialize($out);
        }
        $this->_attributes        = $out['attributes'];
        $this->_attributeLabels   = $out['attributeLabels'];
        $this->_attributeMessages = $out['attributeMessages'];
        $this->_attributeRules    = $out['attributeRules'];
        $this->_attributeDefaults = $out['attributeDefaults'];
    }

    /**
     * 解析一个验证规则
     *
     * @param string $attribute
     * @param array $rule
     * @return array
     *
     * @throws Exception
     */
    protected function parseRule(string $attribute, array $rule)
    {
        // 属性拆分
        $arr = explode_data($attribute, '|');
        // 属性
        $attribute = array_shift($arr);
        // 标签
        $attributeLabel = array_shift($arr);
        $attributeLabel = $attributeLabel ?? $attribute;
        // 默认值
        $default = array_shift($arr);
        // 规则拆分
        $rRules            = [];
        $attributeMessages = [];
        foreach ($rule as $r) {
            $arr = explode_data($r, '|');
            if (0 === count($arr)) {
                throw new Exception("{$attributeLabel}必须至少指定一个验证规则", 1020002001001);
            }
            $ruleName = array_shift($arr);
            array_push($rRules, $ruleName);
            $message = array_shift($arr);
            if (!empty($message)) {
                $attributeMessages["{$attribute}.{$ruleName}"] = $message;
            }
        }
        return [
            'attribute'      => $attribute,
            'attributeLabel' => $attributeLabel,
            'default'        => $default,
            'messages'       => $attributeMessages,
            'rules'          => $rRules,
        ];
    }

    /**
     * 批量添加验证规则
     *
     * @param array $rules
     * @return $this
     *
     * @throws Exception
     */
    public function addRules(array $rules)
    {
        foreach ($rules as $attribute => $rule) {
            $this->addRule($attribute, $rule);
        }
        return $this;
    }

    /**
     * 添加一个验证规则
     *
     * @param string $attribute 验证属性< 属性名|标签名|默认值 >
     * @param array $rule 验证规则< 规则|自定义消息 >
     * @return $this
     *
     * @throws Exception
     */
    public function addRule(string $attribute, array $rule)
    {
        $parse = $this->parseRule($attribute, $rule);
        array_push($this->_attributes, $parse['attribute']);
        $this->_attributeLabels[$parse['attribute']] = $parse['attributeLabel'];
        $this->_attributeMessages                    = array_merge($this->_attributeMessages, $parse['messages']);
        $this->_attributeRules[$parse['attribute']]  = $parse['rules'];
        if (null !== $parse['default']) {
            $this->_attributeDefaults[$parse['attribute']] = $parse['default'];
        }
        return $this;
    }

    /**
     * 获取验证错误信息
     *
     * @param bool $toArray
     * @return array|\Illuminate\Support\MessageBag
     */
    public function getErrors($toArray = true)
    {
        if ($toArray) {
            return $this->_validator->errors()->toArray();
        }
        return $this->_validator->errors();
    }

    /**
     * 获取第一个验证失败的消息，验证成功返回 false
     *
     * @return bool|string
     */
    public function getFirstError()
    {
        $errors = $this->getErrors(true);
        if (empty($errors)) {
            return false;
        }
        $fieldErrors = array_shift($errors);
        return $fieldErrors[0];
    }

    /**
     * 验证数据，并返回数据，验证失败根据 $failThrowException 抛出异常或返回 false
     *
     * @param array $data
     * @param bool $failThrowException
     * @return array|bool
     *
     * @throws Exception
     */
    public function make(array $data, $failThrowException = true)
    {
        // 去除数据左右空格
        $data = trim_data($data);
        // 创建自定义验证器
        $this->_validator = $validator = Validator::make($data,
            $this->_attributeRules,
            $this->_attributeMessages,
            $this->_attributeLabels);
        if ($validator->fails()) {
            // 验证失败处理
            if ($failThrowException) {
                throw new Exception($this->getFirstError(), 1020002002);
            } else {
                return false;
            }
        }
        // 追加默认值并返回
        return $this->putDefaults($data);
    }

    /**
     * 为空数据追加默认值
     *
     * @param array $data
     * @return array
     */
    protected function putDefaults(array &$data)
    {
        $_data = &$data;
        foreach ($this->_attributeDefaults as $attribute => $default) {
            $attrArr = explode_data($attribute, '.');
            while (true) {
                $key = array_shift($attrArr);
                if (0 === count($attrArr)) {
                    if (!isset($_data[$key]) || null === $_data[$key] || '' === $_data[$key]) {
                        $_data[$key] = $default;
                    }
                    break;
                } else {
                    if (!isset($_data[$key])) {
                        $_data[$key] = [];
                    }
                    $_data = &$_data[$key];
                }
            }
        }
        unset($_data);
        return $data;
    }
}