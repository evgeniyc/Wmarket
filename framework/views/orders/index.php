<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

<<<<<<< HEAD
$this->title = 'Orders';
=======
$this->title = 'Мои заказы';
>>>>>>> 830b0fa56b2e5222cd30bdc6f9347011e1a38209
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orders-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Orders', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
<<<<<<< HEAD
            'user',
            'prod',
=======
            [
				'attribute' => 'user',
				'value' => 'username.username',
			],
           	[
				'attribute' => 'prod',
				'value' => 'product.title',
			],
>>>>>>> 830b0fa56b2e5222cd30bdc6f9347011e1a38209
            'quant',
            'status',
            //'date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

<<<<<<< HEAD

=======
>>>>>>> 830b0fa56b2e5222cd30bdc6f9347011e1a38209
</div>
