<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student_group_courses_with_teacher".
 *
 * @property int $id
 * @property int $status
 * @property string|null $dateTime
 * @property int|null $studentGroup_id
 * @property int|null $teacher_id
 * @property int|null $course_id
 */
class StudentGroupCourseWithTeacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student_group_courses_with_teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'required'],
            [['status', 'studentGroup_id', 'teacher_id', 'course_id'], 'integer'],
            [['dateTime'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'dateTime' => 'Date Time',
            'studentGroup_id' => 'Student Group ID',
            'teacher_id' => 'Teacher ID',
            'course_id' => 'Course ID',
        ];
    }
}
