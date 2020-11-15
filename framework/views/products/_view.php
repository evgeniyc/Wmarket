<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<?= Html::a('

<div class="items-view">
    
	<div class ="items-img">'.Html::img("uploads/products/".$model->img).'</div>
	<div class ="items-title">'.Html::encode($model->title).'</div>
	<div class ="items-price">Цена: '.$model->price.'</div>
</div>
', ['products/view', 'id'=>$model->id], ['class' => 'items-link']) ?>