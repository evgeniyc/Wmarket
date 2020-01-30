<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Мой кабинет';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?php Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']); ?>
    </p>
	<p>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
	Мои данные
	</button>
	<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
	Мои заказы
	</button>
	</p>
	<div class="collapse" id="collapseExample1">
		<div class="card card-body">
			Имя пользователя: <?= Yii::$app->user->identity->username ?><br>
			email: <?= Yii::$app->user->identity->email ?>
		</div>
	</div>
	<div class="collapse" id="collapseExample2">
		<div class="card card-body">
			<?= GridView::widget([
				'dataProvider' => $dataProvider,
				'columns' => [
					['class' => 'yii\grid\SerialColumn'],

					[
						'attribute' => 'prod',
						'value' => 'product.title',
					],
					'quant',
					'status',
					'date',

					['class' => 'yii\grid\ActionColumn'],
				],
			]); ?>
		</div>
	</div>
</div>
