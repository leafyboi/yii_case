<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%courses}}`.
 */
class m200905_065129_create_courses_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%courses}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'description' => $this->text(),
            'duration' => $this->integer(),
            'teacher_id' => $this->integer()
        ]);

        $this->batchInsert('{{%courses}}', ['name', 'description', 'duration', 'teacher_id'],
            [
                ['Ведение документации', 'Всем быть обязательно!', '40', '1'],
                ['Изучение основ ООП', 'Кто не придет - можете не расчитывать на автомат.', '50', '2'],
                ['Английский язык', 'Будем изучать conditionals.', '35', '3']
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%courses}}');
    }
}
