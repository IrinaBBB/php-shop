<?php


namespace app\controllers;
use yii\web\Controller;
use app\models\Good;

class GoodController extends Controller {

    public function actionIndex($name) {
        $good = new Good();
        $good = $good->getOneGood($name);
        $this->view->title =  'Суши Шоп | ' . $good['name'];
        return $this->render('index', compact('good'));
    }


}