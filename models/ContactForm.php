<?php

/* Объявляем пространство имен */
namespace app\models;

use Yii;
use yii\base\Model;

/* Объявляем класс формы */
class ContactForm extends Model
{
    /* Объявление переменных */
    public $name, $email;
    
    /* Правила для полей формы обратной связи (валидация) */
    public function rules()
    {
        return [
            /* Поля обязательные для заполнения */
            [ ['name', 'email'], 'required'],
            /* Поле электронной почты */
            ['email', 'email'],
        ];
    }

    /* Определяем названия полей */
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'email' => 'Электронный адрес',
        ];
    }

    /* функция отправки письма на почту */
    public function contact($emailto)
    {
        /* Проверяем форму на валидацию */
        if ($this->validate()) {    
            Yii::$app->mailer->compose() 
                ->setFrom([$this->email => $this->name]) /* от кого */
                ->setTo($emailto) /* куда */
                ->send(); /* функция отправки письма */

            return true;
        } else {
            return false;
        }
    }
}