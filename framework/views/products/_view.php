<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $model app\models\Products */

//$this->title = $model->title;
//$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
$this->registerJs( "$('.item').on('click', 	function() { 
												if( $(this).find('.products-descr').css('display') != 'none') {
													$(this).find('.products-descr').slideToggle('slow'); 
													return false;
												}
												$('.item').css('z-index',1);
												$('.products-descr').css('display','none');
												$(this).css('z-index', 3); 
												$(this).find('.products-descr').slideToggle('slow'); 
											})");
//$this->registerJs( "$('.products-view').on('click', function() { var css = $(this).css('z-index'); alert('css: '+css)})");
?>
<div class="products-view">
	<div class="products-img"><?= Html::img('@web/uploads/'.$model->img, ['alt' => $model->title]) ?></div>
	<div class="products-title"><?= Html::encode($model->title) ?></div>
	<div class="products-price">Цена: <?= $model->price ?> грн.<i class="fas fa-camera"></i></div>
	<div class="products-descr"><?= Html::encode($model->descr) ?></div>
</div>