<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">

    <!--<h1><?= Html::encode($this->title) ?></h1>-->

    <div id="product-img"><?=Html::img('@web/uploads/'.$model->img, ['alt' => $model->title])?></div>
	<div id="product-sdescr"><span id="descr-sdescr">Краткое описание:</span><br><?=$model->sdescr ?></div>
	<div id="product-descr"><span id="descr-descr">Описание:</span><br><?=$model->descr ?></div>
	<div id="product-price">Цена: <?=$model->price ?>грн.</div>
	<div id="back-ref"><?= Html::a('Изменить', ['products/update', 'id' => $model->id]) ?></div>
	<div class="clearfix"></div>
	
</div>
