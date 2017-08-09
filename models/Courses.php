<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "courses".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $course_duration
 * @property integer $lesson_count
 * @property integer $lesson_duration
 * @property integer $price
 * @property string $image
 * @property string $level
 */
class Courses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'courses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'image'], 'string'],
            [['course_duration', 'lesson_count', 'lesson_duration', 'price'], 'integer'],
            [['level'], 'required'],
            [['title'], 'string', 'max' => 45],
            [['level'], 'string', 'max' => 20],
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
            'course_duration' => Yii::t('app', 'Course Duration'),
            'lesson_count' => Yii::t('app', 'Lesson Count'),
            'lesson_duration' => Yii::t('app', 'Lesson Duration'),
            'price' => Yii::t('app', 'Price'),
            'image' => Yii::t('app', 'Image'),
            'level' => Yii::t('app', 'Level'),
        ];
    }
}
