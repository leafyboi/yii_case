<?php

namespace app\controllers;

use app\models\User;
use yii\rest\Controller;
use yii\web\Response;

class UserController extends Controller
{
    public $enableCsrfValidation = false;

    public function actionCreateUser()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $user = new User();
        $user->scenario = User::SCENARIO_CREATE;
        $user->attributes = \Yii::$app->request->post();

        if($user->validate()) {
            return array('status' => true);
        } else {
            return array('status' => false);
        }
    }
}