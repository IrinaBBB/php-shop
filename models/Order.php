<?php

namespace app\models;

use Yii;


class Order extends \yii\db\ActiveRecord
{

    public static function tableName()
    {
        return 'order';
    }


    public function rules()
    {
        return [
            [['date', 'name', 'email', 'phone', 'address', 'sum'], 'required'],
            [['email'], 'email'],
            [['name', 'email', 'phone', 'address'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'Email',
            'phone' => 'Телефон',
            'address' => 'Адрес',
        ];
    }
}
