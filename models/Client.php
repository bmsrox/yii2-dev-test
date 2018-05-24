<?php

namespace app\models;

class Client extends ClientEntity
{
    public function rules ()
    {
        return array_merge (parent::rules(), [
            ['email', 'email']
        ]);
    }
}