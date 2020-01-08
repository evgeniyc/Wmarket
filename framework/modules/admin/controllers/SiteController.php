<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
use app\models\User;

/**
 * Default controller for the `admin` module
 */
class SiteController extends Controller
{
	/*
     * Renders the index view for the module
     * @return string
     */
    public function actionLogin()
    {
        $model = new User();
		return $this->render('login', [
            'model' => $model,
        ]);
    }
}
