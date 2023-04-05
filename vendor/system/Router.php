<?php

namespace vendor\system;

/**
 * Маршрутизатор
 */
class Router
{
    protected static $routes   = [];
    protected static $route    = [];
    protected static $elements = [];

    /**
     * Запуск маршрутизатора
     * Правила выборки параметров из адреса
     *
     * @param $url
     *
     * @return mixed
     */
    public static function start()
    {
        $url = $_SERVER['QUERY_STRING'];
        $params = [];

        if (strpos($url, '&') !== false) {
            $url    = explode('&', $url);
            $params = $url[1];
            $url    = $url[0];
        }

        if (strpos($url, '/') !== false) {
            $url        = explode('/', $url);
            $controller = $url[0];
            $method     = $url[1];
        } else {
            $controller = $url;
            $method     = null;
        }

        self::$elements = [
            'controller' => $controller,
            'method'     => $method,
            'params'     => $params,
        ];

        return self::dispatch(self::$elements);
    }

    /**
     * Отработка контроллера / экшена по полученной информации
     *
     * @param $param_arr
     */
    private static function dispatch($param_arr)
    {
        if (!isset($param_arr['controller']) || $param_arr['controller'] == '') {
            $param_arr['controller'] = 'main';
        }
        if (!isset($param_arr['method']) || $param_arr['method'] == '') {
            $param_arr['method'] = 'index';
        }

        $full_controller_name = System::camelCase($param_arr['controller'] . 'Controller');

        spl_autoload_register(function ($full_controller_name) {
            $file = "../controllers/{$full_controller_name}.php";
            if (is_file($file)) {
                require_once($file);
            }
        });

        if (class_exists($full_controller_name)) {
            $controller = new $full_controller_name;
            $method     = "action" . ucfirst($param_arr['method']);

            if (method_exists($controller, $method)) {
                $controller->$method();
            } else {
                echo "Метод {$method} в контроллере {$full_controller_name} не найден"; // todo: в обработчик ошибок
            }
        } else {
            if (isset($param_arr['controller']) && is_dir('../modules/' . $param_arr['controller'])) {
                $ctrl_module_name = ucfirst($param_arr['method']);
                $module = '../modules/' . $param_arr['controller'] . "/controllers/{$ctrl_module_name}Controller";

                spl_autoload_register(function ($module) {
                    $file = $module . ".php";
                    if (is_file($file)) {
                        require_once($file);
                    }
                });


                var_dump($ctrl_module_name);
                var_dump($module);

                // todo: $controller->$method();


            } else {
                echo "Контроллер или модуль {$full_controller_name} не найден"; // todo: в обработчик ошибок
            }
        }
    }
}