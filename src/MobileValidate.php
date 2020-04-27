<?php

namespace Validator;

use  yii\validators\Validator;

class MobileValidate extends Validator
{
    /**
     * 校验手机号格式
     *
     * @param \yii\base\Model $model
     * @param string $attribute
     */
    public function validateAttribute($model, $attribute)
    {
        if (!\preg_match('/^1\d{10}$/', $model->$attribute)) {
            $this->addError($model, $attribute, '手机号格式错误');
        }
    }
}
