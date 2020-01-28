<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\web\View;
use rmrevin\yii\fontawesome\FAS;
/* @var $this yii\web\View */
/* @var $model app\models\Products */

//$this->title = $model->title;
//$this->params['breadcrumbs'][] = ['label' => 'Products', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
//rmrevin\yii\fontawesome\AssetBundle::register($this);

$this->registerJs( "$('.fa-list').on('click', 	function() { 
												//var descr = $(this).closest('.products-descr');
												var item = $(this).closest('.item');
												var descr = item.find('.products-descr');
												if( descr.css('display') != 'none') {
													descr.slideToggle('slow'); 
													return false;
												}
												$('.item').css('z-index',1);
												$('.products-descr').css('display','none');
												item.css('z-index', 3); 
												descr.slideToggle('slow'); 
											})");
$this->registerJs( "$('.products-descr').on('click', 	function() { 
												$(this).slideToggle('slow'); 
											})");
$this->registerJs( "$('.fa-list').attr('title', 'Описание');$('.fa-eye').attr('title', 'Обзор');$('.fa-shopping-basket').attr('title', 'Купить');");
//$this->registerJs( "$('.products-view').on('click', function() { var css = $(this).css('z-index'); alert('css: '+css)})");
?>
<div class="products-view">
	<div class="products-img"><?= Html::img('@web/uploads/'.$model->img, ['alt' => $model->title]) ?></div>
	<div class="products-title"><?= Html::encode($model->title) ?></div>
	<div class ="products-icons">
		<?= FAS::icon('list');?>&nbsp;&nbsp;
		<?=HTML::a(FAS::icon('eye'),['products/view', 'id'=>$model->id]);?>&nbsp;&nbsp;
		<?=FAS::icon('shopping-basket');?>
	</div>
	<div class="products-price">Цена: <?= $model->price ?> грн.</div>
	<div class="products-descr"><?= Html::encode($model->sdescr) ?></div>
</div>