<?php

namespace app\models;
use yii\base\Model;

class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    
    public function rules() {
        return [
            [['username', 'email', 'password'], 'required'],
            [['username'], 'string'],
            [['email'], 'email'],
            [['email'], 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'email']
        ];
        
    }
    
    public function signup() {
        if($this->validate()) //Если данные успешно провалидированны
        {
            $user = new User(); //Создаем новое поле в модели User
            $user->attributes = $this->attributes; // И передаем пришедшие атрибуты
            
            return $user->create(); //Сохраняем пользователя
        }
    }
    
}