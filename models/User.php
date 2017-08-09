<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $email
 * @property string $is_admin
 * @property string $created_time
 * @property string $status
 */
class User extends ActiveRecord implements IdentityInterface
{
    public static function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return [
            [['username', 'email', 'password'], 'required'],
            [['is_admin', 'status'], 'string'],
            [['created_time'], 'safe'],
            [['username', 'password'], 'string', 'max' => 45],
            [['username'], 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'username'],
            [['email'], 'unique', 'targetClass' => 'app\models\User', 'targetAttribute' => 'email']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'username' => Yii::t('app', 'Username'),
            'password' => Yii::t('app', 'Password'),
            'email' => Yii::t('app', 'Email'),
            'is_admin' => Yii::t('app', 'Is Admin'),
            'created_time' => Yii::t('app', 'Created Time'),
            'status' => Yii::t('app', 'Status'),
        ];
    }
    
    public static function findIdentity($id)
    {
        return User::findOne($id);
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
 
    }

    public static function findByUsername($username)
    {
        return User::find()->where(['username' => $username])->one();

    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return ($this->password === $password) ? true : false;
    }
    
    public function create()
    {
        return $this->save(false);
    }

}
