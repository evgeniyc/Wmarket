<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

//$this->title = $model->title;
//$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="products-view">
	<div class="products-img"><?= Html::img('@web/uploads/'.$model->img, ['alt' => $model->title]) ?></div>
	<div class="products-title"><?= Html::encode($model->title) ?></div>
	<div class="products-price">Цена: <?= $model->price ?> грн.</div>
	<div class="products-descr"><?= Html::encode($model->descr) ?></div>
</div>