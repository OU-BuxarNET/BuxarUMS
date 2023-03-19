<?php

use vendor\system\Controller;

/**
 * Интернет магазин
 */
class IndexController extends Controller
{
    public $layout = 'shop';

    /**
     * Главная страница магазина с товаром
     * @return void
     */
    public function actionIndex()
    {
        $products = [];

        echo 'Главная интернет магазина';

//        return $this->render('index', [
//            'products' => $products,
//        ]);
    }
}