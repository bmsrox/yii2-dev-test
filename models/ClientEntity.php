<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property int $id
 * @property string $name
 * @property string $surname
 * @property string $email
 *
 * @property Contract[] $buyerContracts
 * @property Contract[] $sellerContracts
 */
class ClientEntity extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'surname', 'email'], 'required'],
            [['name', 'surname', 'email'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'email' => 'Email',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBuyerContracts()
    {
        return $this->hasMany(Contract::class, ['buyer_client' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSellerContracts()
    {
        return $this->hasMany(Contract::class, ['seller_client' => 'id']);
    }
}
