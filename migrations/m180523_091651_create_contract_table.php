<?php

use yii\db\Migration;

/**
 * Handles the creation of table `contract`.
 */
class m180523_091651_create_contract_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('contract', [
            'id' => $this->primaryKey(),
            'buyer_client' => $this->integer()->notNull(),
            'seller_client' => $this->integer()->notNull(),
            'date' => $this->integer(),
            'financial_amount' => $this->decimal(10,2)->notNull(),
            'description' => $this->text()->notNull()
        ]);

        $this->addForeignKey('client_contract_buyer', 'contract', 'buyer_client', 'client', 'id', 'RESTRICT');
        $this->addForeignKey('client_contract_seller', 'contract', 'seller_client', 'client', 'id', 'RESTRICT');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('client_contract_buyer','contract');
        $this->dropForeignKey('client_contract_seller','contract');

        $this->dropTable('contract');
    }
}
