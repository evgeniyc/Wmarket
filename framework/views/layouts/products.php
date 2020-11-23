<?php

/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\widgets\ListView;

?>
<?php $this->beginContent('@app/views/layouts/main.php'); ?>

<div class="row">
	<div class="col-sm-2">
		<div id="sidebar" class="products-index">
			<h1>Каталог</h1>

			<?= ListView::widget([
				'dataProvider' => Yii::$app->params['catalog'],
				'itemOptions' => ['class' => ''],
				'layout' => '{items}',
				'itemView' => function ($model, $key, $index, $widget) {
					return Html::a(Html::encode($model->name), ['index', 'id' => $key]);
				},
			]) ?>
			
		</div>
	</div>
	<div class="col-sm-10">
		<div id="main-content">
			<?= $content ?>
		</div>
	</div>
</div>

<?php $this->endContent(); ?>