<?php

use kartik\money\MaskMoney;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contract */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contract-form">

    <?php $form = ActiveForm::begin(['id' => 'contract-form']); ?>

    <?= $form->field($model, 'buyer_client')
        ->dropDownList($model->listClient(), ['prompt' => 'Select a buyer client']) ?>

    <?= $form->field($model, 'seller_client')
        ->dropDownList($model->listClient(), ['prompt' => 'Select a seller client']) ?>

    <?= $form->field($model, 'financial_amount')->widget(MaskMoney::class, [
        'options' => [
            'class' => 'form-control',
        ]
    ]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
