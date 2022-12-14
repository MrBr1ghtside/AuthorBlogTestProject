<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%books}}`.
 */
class m220811_061822_add_description_column_to_books_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%books}}', 'description', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%books}}', 'description');
    }
}
