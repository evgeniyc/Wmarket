<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div id="product-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <div id="product-img"><?=Html::img('@web/uploads/'.$model->img, ['alt' => $model->title])?></div>
	<div id="product-descr"><span id="descr-descr">Описание:</span><br><?=$model->descr ?></div>
	<div id="product-price">Цена: <?=$model->price ?>грн.</div>
	<br>
	<div id="quant-form">
		<?php $form = ActiveForm::begin(['options' => ['class' => 'form-inline mb-auto']]); ?>
			<?= $form->field($order, 'quant') ?>&nbsp;
			<?= Html::submitButton('Купить', ['class' => 'btn btn-primary mb-2']) ?>
		<?php ActiveForm::end(); ?>
	</div>
	
	<div id="back-ref"><?= Html::a('Назад', Yii::$app->request->referrer) ?></div>
	<div class="clearfix"></div>
	
</div>
