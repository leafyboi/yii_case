<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%teachers}}`.
 */
class m200905_065114_create_teachers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%teachers}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'surname' => $this->string()->notNull(),
            'middle_name' => $this->string(),
            'gender' => $this->string(),
            'info' => $this->text(),
            'photo' => $this->text(),
        ]);

        $this->batchInsert('{{%teachers}}', ['name', 'surname', 'middle_name', 'gender', 'info'],
            [
                ['Аркадий', 'Семехин', 'Витальевич', 'Мужской', 'Преподаватель информатики'],
                ['Анна', 'Кромкина', 'Владимировна', 'Женский', 'Преподаватель информатики'],
                ['Виталина', 'Петрук', 'Аркадьевна', 'Женский', 'Преподаватель английского'],
            ]
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%teachers}}');
    }
}
