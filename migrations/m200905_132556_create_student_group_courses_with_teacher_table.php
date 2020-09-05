<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%student_group_courses_with_teacher}}`.
 */
class m200905_132556_create_student_group_courses_with_teacher_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%student_group_courses_with_teacher}}', [
            'id' => $this->primaryKey(),
            'status' => $this->integer()->notNull(),
            'dateTime' => $this->dateTime(),
            'studentGroup_id' => $this->integer(),
            'teacher_id' => $this->integer(),
            'course_id' => $this->integer()
        ]);

        $this->batchInsert('{{%student_group_courses_with_teacher}}', ['status', 'dateTime', 'studentGroup_id', 'teacher_id', 'course_id'], [
                ['0', '2019-10-11 13:10:00', '1', '1', '1'],
                ['0', '2019-05-06 16:15:00', '2', '2', '2']
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%student_group_courses_with_teacher}}');
    }
}
