<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%authors}}`.
 */
class m220810_052034_create_authors_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%authors}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'text' => $this->text(),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%authors}}');
    }
}
