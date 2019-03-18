<?php

namespace app\admin\validate;

use think\Validate;

class ModelField extends Validate {

    //定义验证规则
    public $rule = [
        'name|字段名称' => 'require|alphaDash|notIn:url,cname,did,places,hits,title,ifextend',
        'title|字段标题' => 'require',
        'type|字段类型' => 'require|alphaDash',
        'define|字段定义' => 'require',
        'value|字段默认值' => 'chsAlphaNum',
//        'options|字段选项' => 'require',
        //'remark|备注' => 'require',
        //'remark|备注' => 'chsAlphaNum', //只能是汉字、字母和数字
        'orders|排序' => 'require|number',
    ];
    //定义验证场景
    protected $scene = [
    ];

}
