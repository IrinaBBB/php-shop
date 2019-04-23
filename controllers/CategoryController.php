<?php


namespace app\controllers;
use app\models\Good;
use yii\web\Controller;
use Yii;

class CategoryController extends Controller {
    public function actionIndex() {
        $this->view->title = 'Суши Шоп | Все товары';
        $goods = new Good();
        $goods = $goods->getAllGoods();
        return $this->render('index', compact('goods'));
    }

    public function actionView($id) {
        $goods = new Good();
        $goods = $goods->getGoodsCategories($id);
        $this->view->title =  'Суши Шоп | ' . $goods[0]['category'];
        return $this->render('view', compact('goods'));
    }

    public function actionSearch() {
        $search = Yii::$app->request->get('search');
        $search = htmlspecialchars(strip_tags($search), ENT_QUOTES);
        $goods = new Good();
        $this->view->title =  'Суши Шоп | Поиск';
        $goods = $goods->getSearchResults($search);
        return $this->render('search', compact('goods', 'search', 'title'));
    }

}