<?php

use modules\logger\LoggerModule;
use vendor\system\Controller;

/**
 * Стартовый контроллер
 */
class MainController extends Controller
{
    /**
     * Главная страница
     */
    public function actionIndex()
    {
        return $this->render();
    }

    /**
     * Информационная страница
     */
    public function actionInfo()
    {
        return $this->render();
    }
}