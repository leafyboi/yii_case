<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%student_groups}}`.
 */
class m200905_125413_create_student_groups_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%student_groups}}', [
            'id' => $this->primaryKey(),
            'groupNumber' => $this->integer()->unique()->notNull()
        ]);

        $this->batchInsert('{{%student_groups}}', ['groupNumber'], [
                ['132'],
                ['171'],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%student_groups}}');
    }
}
