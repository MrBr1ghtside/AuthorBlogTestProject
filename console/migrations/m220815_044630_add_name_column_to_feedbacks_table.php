<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%feedbacks}}`.
 */
class m220815_044630_add_name_column_to_feedbacks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%feedbacks}}', 'name', $this->string(255)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%feedbacks}}', 'name');
    }
}
