<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%books}}`.
 */
class m220728_073730_create_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%books}}', [
            'id' => $this->primaryKey(),
            'book_name' => $this->string(50)->notNull(),
            'price' => $this->float(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%books}}');
    }
}
