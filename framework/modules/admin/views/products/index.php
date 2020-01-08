<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Товары';
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['/products']];
?>
<div class="user-index">

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'sdescr',
            'descr',
            'price',
			'img',
			[                                                 
				'label' => 'Изображение',
				'value' => function ($data) {
					
					return Html::img('@web/uploads/'.$data->img,[
						'alt'=>'yii2 - картинка в gridview',
						'style' => 'width:100px;'
					]);
					//return '@web/uploads/'.$data->img; 
				},
				'format' => 'raw',
				
			],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
