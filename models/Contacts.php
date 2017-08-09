<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacts".
 *
 * @property integer $id
 * @property string $address
 * @property string $phone_number
 * @property string $email
 * @property string $fb_link
 * @property string $in_link
 * @property string $vk_link
 */
class Contacts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contacts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['address'], 'string', 'max' => 255],
            [['phone_number'], 'string', 'max' => 30],
            [['email', 'fb_link', 'in_link', 'vk_link'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'address' => Yii::t('app', 'Address'),
            'phone_number' => Yii::t('app', 'Phone Number'),
            'email' => Yii::t('app', 'Email'),
            'fb_link' => Yii::t('app', 'Fb Link'),
            'in_link' => Yii::t('app', 'In Link'),
            'vk_link' => Yii::t('app', 'Vk Link'),
        ];
    }
}
