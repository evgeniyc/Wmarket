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

    <h1><?= Html::encode($this->title) ?></h1>

<!--<<<<<< HEAD
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'title',
            'descr:ntext',
			[                      
				'label' => 'Изображение',
				'value' => Html::img('@web/uploads/'.$model->img, ['alt' => $model->title]),
			],
            'price',
        ],
    ]) ?>

=======-->
    <div id="product-img"><?=Html::img('@web/uploads/'.$model->img, ['alt' => $model->title])?></div>
	<div id="product-descr"><span id="descr-descr">Описание:</span><br><?=$model->descr ?></div>
	<div id="product-price">Цена: <?=$model->price ?>грн.</div>
	<div id="back-ref"><?= Html::a('Назад', Yii::$app->request->referrer) ?></div>
	<div class="clearfix"></div>
	
</div>
