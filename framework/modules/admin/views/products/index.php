<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать товар', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'options' => ['class' => 'list-view row align-items-start'],
		'itemOptions' => [
			'class' => 'item col-xs-6 col-sm-4 col-md-3 col-lg-2', 
			'id' => 'products-item',
		],
		//'itemView' => function ($model, $key, $index, $widget) {
        //    return Html::a(Html::encode($model->title), ['view', 'id' => $model->id]);
		'itemView' => '_view',
    ]) ?>


</div>
