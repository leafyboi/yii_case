<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student_groups".
 *
 * @property int $id
 * @property int $groupNumber
 */
class StudentGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student_groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['groupNumber'], 'required'],
            [['groupNumber'], 'integer'],
            [['groupNumber'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'groupNumber' => 'Group Number',
        ];
    }
}
