<?php

namespace app\models;

use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

class Contract extends ContractEntity
{
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'date',
                'updatedAtAttribute' => false,
                'value' => time()
            ]
        ];
    }

    public function listClient()
    {
        $modelClass = $this->getBuyerClient()->modelClass;
        $clients = $modelClass::find()->asArray()->all();

        return ArrayHelper::map($clients, 'id', 'name');
    }
}