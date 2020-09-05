<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string|null $middle_name
 * @property string|null $gender
 * @property string|null $photo
 * @property int|null $studentGroup_id
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname'], 'required'],
            [['photo'], 'string'],
            [['studentGroup_id'], 'integer'],
            [['name', 'surname', 'middle_name', 'gender'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'middle_name' => 'Middle Name',
            'gender' => 'Gender',
            'photo' => 'Photo',
            'studentGroup_id' => 'Student Group ID',
        ];
    }
}
