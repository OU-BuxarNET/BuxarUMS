<?php

namespace vendor\system;

class Controller
{
    public $route = [];
    public $view;
    public $layout;

//    public function __construct($route, $layout = '', $view = '') // todo: params
//    {
//        $this->route = $route;
//        $this->view  = $route['action'];
//    }

    public function getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render();
    }

    /**
     * todo: удалить (?)
     */
    public function render()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render();
    }
}