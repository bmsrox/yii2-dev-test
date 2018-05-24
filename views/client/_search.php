<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClientSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="client-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=> ['class'=>'form-inline', 'data-pjax' => true]
    ]); ?>

    <?= $form->field($model, 'search', [
        'template'=>'{input}<span class="input-group-btn"><button class="btn btn-warning btn-flat" type="submit"><i class="glyphicon glyphicon-search"></i></button></span>',
        'options'=>['class'=>'input-group input-group-sm']])
        ->textInput(['placeholder'=>Yii::t('app', 'Search')]);
    ?>

    <?php ActiveForm::end(); ?>

</div>
