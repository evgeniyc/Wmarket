<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Products', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'options' => ['class' => 'list-view row'],
		'itemOptions' => [
			'class' => 'item col-xs-12 col-sm-6 col-md-4 col-lg-3', 
			'id' => 'products-item',
		],
		//'itemView' => function ($model, $key, $index, $widget) {
        //    return Html::a(Html::encode($model->title), ['view', 'id' => $model->id]);
		'itemView' => '_view',
    ]) ?>


</div>
