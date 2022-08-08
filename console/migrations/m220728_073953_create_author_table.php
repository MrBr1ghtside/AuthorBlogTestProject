<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%author}}`.
 */
class m220728_073953_create_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%author}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull(),
            'text' => $this->text(),
            'name' => $this->string(255)->notNull(),
        
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%author}}');
    }
}
