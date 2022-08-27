<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%posts}}`.
 */
class m220827_054706_add_slug_column_to_posts_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%posts}}', 'slug', $this->string(255)->notNull());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('{{%posts}}', 'slug');
    }
}
