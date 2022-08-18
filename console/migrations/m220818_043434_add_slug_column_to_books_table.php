<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%books}}`.
 */
class m220818_043434_add_slug_column_to_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%books}}', 'slug', $this->string(255)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%books}}', 'slug');
    }
}
