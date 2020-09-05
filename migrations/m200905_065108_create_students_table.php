<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%students}}`.
 */
class m200905_065108_create_students_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%students}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'surname' => $this->string()->notNull(),
            'middle_name' => $this->string(),
            'gender' => $this->string(),
            'photo' => $this->text(),
            'studentGroup_id' => $this->integer()
        ]);

        $this->batchInsert('{{%students}}', ['name', 'surname', 'middle_name', 'gender', 'studentGroup_id'],
            [
                ['Аркадий', 'Петров', 'Алексеевич', 'Мужской', '1'],
                ['Дмитрий', 'Иванов', 'Витальевич', 'Мужской', '1'],
                ['Алексей', 'Сидоров', 'Аркадьевич', 'Мужской', '2'],
                ['Игорь', 'Коробкин', 'Дмитриевич', 'Мужской', '1'],
                ['Михаил', 'Селедкин', 'Семенович', 'Мужской', '2']
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%students}}');
    }
}
