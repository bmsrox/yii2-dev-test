<?php

use yii\db\Migration;

/**
 * Handles the creation of table `client`.
 */
class m180523_091159_create_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('client', [
            'id' => $this->primaryKey(),
            'name' => $this->string(60)->notNull(),
            'surname' => $this->string(60)->notNull(),
            'email' => $this->string(60)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('client');
    }
}
