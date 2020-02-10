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
	<div id="product-descr"><span id="descr-descr">Описание:</span><br><?=$model->descr ?></div><br>
	<div id="product-price">Цена: <?=$model->price ?>грн.</div><br>
	<!--===============================================================================-->
	<div id="order-form">
		<?php if(!Yii::$app->user->isGuest) {
			$form = ActiveForm::begin([
				'action' => '../orders/create',
				'method' => 'post',
				'options' => ['class'=>'form-inline'],
			]);
				echo $form->errorSummary($order);
				echo $form->field($order, 'quant',['template' => "{label}\n{hint}\n{input}"])->textInput(['value' => 1, 'placeholder' => 1, 'size' => 3]),'&nbsp';
				echo $form->field($order, 'prod',['template' => "{input}"])->hiddenInput(['value' => $model->id]);
				echo $form->field($order, 'user',['template' => "{input}"])->hiddenInput(['value' => Yii::$app->user->id]);
				echo '<div class="form-group">';
					echo Html::submitButton('Купить', ['class' => 'btn btn-success']);
				echo '</div>';
			ActiveForm::end(); 
		} ?>
	</div>
	<div id="back-ref">
		<?= Html::tag('button', Html::a('Назад', Yii::$app->request->referrer), ['class' => 'btn btn-primary']) ?>
	</div>
	<!--===============================================================================-->
	<div class="clearfix"></div>
	
</div>
