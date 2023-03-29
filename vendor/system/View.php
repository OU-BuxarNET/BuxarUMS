<?php

namespace vendor\system;

class View
{
    public $route = [];
    public $view;
    public $layout;

    public function __construct($route, $layout = '', $view = '') // todo: params
    {
        $this->route  = Router::getElements();
        $this->layout = $layout ? : 'main';
        $this->view = $view ? : 'index';
    }

    public function render()
    {
        if ($this->route['controller'] == ''){
            $this->route['controller'] = 'main';
        }
        if ($this->route['method'] == ''){
            $this->route['method'] = 'index';
        }

        $file_view = "../views/{$this->route['controller']}/{$this->route['method']}.php";

        ob_start(); // буферизация
        if (is_file($file_view)){
            require $file_view;
        } else {
            echo "Файл вида не найден ({$file_view})";
        }

        $content = ob_get_clean(); // извлечение буфера в переменную

        $layout = "../views/layouts/{$this->layout}.php";

        if (is_file($layout)){
            require $layout;
        } else {
            echo "Не найден шаблон {$layout}";
        }
    }
}