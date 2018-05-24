<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ContractSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contracts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contract-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-md-12">
            <div class="pull-left">
                <?= Html::a('Create Contract', ['create'], ['class' => 'btn btn-success']) ?>
            </div>
            <div class="pull-right">
                <?php echo $this->render('_search', ['model' => $searchModel]); ?>
            </div>
        </div>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            'id',
            ['attribute'=>'buyer_client', 'value'=>function($model){
                return $model->buyerClient->name;
            }],
            ['attribute'=>'seller_client', 'value'=>function($model){
                return $model->sellerClient->name;
            }],
            'date:date',
            ['attribute'=>'financial_amount', 'value'=>function($model){
                return Yii::$app->formatter->asCurrency($model->financial_amount);
            }],
            //'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
