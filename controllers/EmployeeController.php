<?php

namespace app\controllers;

use app\models\Employee;
use yii\web\Response;

class EmployeeController extends \yii\web\Controller
{
    public $enableCsrfValidation = false;

    public function actionIndex()
    {
        echo 'test'; exit;
    }

    public function actionCreateEmployee()
    {
        \Yii::$app->response->format = Response::FORMAT_JSON;
        $employee = new Employee();
        $employee->scenario = Employee::SCENARIO_CREATE;
        $employee->attributes = \Yii::$app->request->post();

        if($employee->validate()) {
            return array('status' => true);
        } else {
            return array('status' => false, 'data' => $employee->getErrors());
        }
    }
}
