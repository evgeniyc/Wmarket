<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<?= Html::a('

<div class="items-view">
    
	<div class ="items-img">'.Html::img("uploads/cats/$model->img").'</div>
	<div class ="items-title">'.Html::encode($model->name).'</div>
	
</div>',
['products/index', 'id'=>$model->id], ['class' => 'items-link']) ?>