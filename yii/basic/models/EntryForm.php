<?php

namespace app\models;

use Yii;
use yii\base\Model;

//跟着文档创建entry-form model类
// yii\base\Model 被用于普通模型类的父类并与数据表无关。yii\db\ActiveRecord 通常是普通模型类的父类但与数据表有关联
class EntryForm extends Model
{
    public $name;
    public $email;


    // yii\widgets\ActiveForm 足够智能到把你在 EntryForm 模型中声明的验证规则转化成客户端 JavaScript 脚本去执行验证
    public function rules()
    {
        return [
            [['name','email'],'required'],
            ['email','email'],
        ];
    }
}
