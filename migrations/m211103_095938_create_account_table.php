<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%account}}`.
 */
class m211103_095938_create_account_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%account}}', [
            'id' => $this->primaryKey(),
            'account_id' => $this->string(16)->unique(),
            'Iban' => $this->string(64),
            'bicSwift' => $this->string(32),
            'client_id' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%account}}');
    }
}
