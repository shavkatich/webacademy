<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programming".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $image
 */
class Programming extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programming';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'image'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'title' => Yii::t('app', 'Title'),
            'description' => Yii::t('app', 'Description'),
            'image' => Yii::t('app', 'Image'),
        ];
    }
}
