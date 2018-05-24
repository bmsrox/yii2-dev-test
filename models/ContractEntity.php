<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contract".
 *
 * @property int $id
 * @property int $buyer_client
 * @property int $seller_client
 * @property int $date
 * @property string $financial_amount
 * @property string $description
 *
 * @property Client $buyerClient
 * @property Client $sellerClient
 */
class ContractEntity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contract';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['buyer_client', 'seller_client', 'financial_amount', 'description'], 'required'],
            [['buyer_client', 'seller_client', 'date'], 'integer'],
            [['financial_amount'], 'number'],
            [['description'], 'string'],
            [['buyer_client'], 'exist', 'skipOnError' => true, 'targetClass' => Client::class, 'targetAttribute' => ['buyer_client' => 'id']],
            [['seller_client'], 'exist', 'skipOnError' => true, 'targetClass' => Client::class, 'targetAttribute' => ['seller_client' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'buyer_client' => 'Buyer Client',
            'seller_client' => 'Seller Client',
            'date' => 'Date',
            'financial_amount' => 'Financial Amount',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuyerClient()
    {
        return $this->hasOne(Client::class, ['id' => 'buyer_client']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSellerClient()
    {
        return $this->hasOne(Client::class, ['id' => 'seller_client']);
    }
}
