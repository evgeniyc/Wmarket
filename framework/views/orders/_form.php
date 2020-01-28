<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <?= $form->field($model, 'prod')->textInput() ?>

    <?= $form->field($model, 'quant')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

<<<<<<< HEAD
    <?= $form->field($model, 'date')->textInput() ?>
=======
    <?= $form->field($model, 'date')->textInput(['maxlength' => true]) ?>
>>>>>>> 830b0fa56b2e5222cd30bdc6f9347011e1a38209

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
