<?php

use vendor\system\Controller;

class SystemSettingsController extends Controller
{
    public function actionIndex()
    {
        $this->layout = 'settings';

        return $this->render();
    }
}