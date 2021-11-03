<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%card}}`.
 */
class m211103_093407_create_card_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%card}}', [
            'id' => $this->primaryKey(),
            'card_id' => $this->string(16)->unique(),
            'card_alias' => $this->string(30),
            'card_account_id' => $this->string(32),
            'type_of_card' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%card}}');
    }
}
