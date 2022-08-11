<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%feedbacks}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%books}}`
 */
class m220811_055458_create_feedbacks_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%feedbacks}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(50)->notNull(),
            'text' => $this->string(),
            'books_id' => $this->integer()->notNull(),
            'status' => $this->integer()->notNull(),
        ]);

        // creates index for column `books_id`
        $this->createIndex(
            '{{%idx-feedbacks-books_id}}',
            '{{%feedbacks}}',
            'books_id'
        );

        // add foreign key for table `{{%books}}`
        $this->addForeignKey(
            '{{%fk-feedbacks-books_id}}',
            '{{%feedbacks}}',
            'books_id',
            '{{%books}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%books}}`
        $this->dropForeignKey(
            '{{%fk-feedbacks-books_id}}',
            '{{%feedbacks}}'
        );

        // drops index for column `books_id`
        $this->dropIndex(
            '{{%idx-feedbacks-books_id}}',
            '{{%feedbacks}}'
        );

        $this->dropTable('{{%feedbacks}}');
    }
}
