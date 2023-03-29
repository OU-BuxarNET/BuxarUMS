<?php

namespace vendor\system;

/**
 * Обработчик ошибок
 * @package vendor\system
 */
class ErrorHandler
{
    public int $state = 1;

    public function __construct()
    {
        ini_set('error_reporting', E_ALL);
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
    }

    public function start()
    {
        set_error_handler([
            $this,
            'errAnalysis',
        ]);
        register_shutdown_function([
            $this,
            'fatalErrAnalysis',
        ]);
        set_exception_handler([
            $this,
            'exceptionErrAnalysis',
        ]);
    }

    /**
     * Обработчик нефатальных ошибок
     *
     * @param $errno
     * @param $errstr
     * @param $errfile
     * @param $errline
     * @param $errcontext
     *
     * @return bool
     */
    public function errAnalysis($errno, $errstr, $errfile, $errline, $errcontext)
    {
        //echo '<pre>';
        //var_dump($errno);
        //var_dump($errstr);
        //var_dump($errfile);
        //var_dump($errline);
        //var_dump($errcontext);

        if (isset($errstr)) {
            $this->renderErrPage($errno, $errstr, $errfile, $errline);
        }

        return true;
    }

    /**
     * Обработчик фатальных ошибок
     */
    public function fatalErrAnalysis()
    {
        if (!empty($error = error_get_last()) and
            $error['type'] & (E_ERROR | E_PARSE | E_COMPILE_ERROR | E_CORE_ERROR)) {
            ob_get_clean();

            //            var_dump($error ['type']);
            //            var_dump($error['message']);
            //            var_dump($error['file']);
            //            var_dump($error['line']);

            $this->renderErrPage();
        }
    }

    /**
     * Обработчик исключений
     *
     * @param \Exception $e
     *
     * @return bool
     */
    public function exceptionErrAnalysis(\Exception $e)
    {
        $this->renderErrPage();

        return true;
    }

    /**
     * Отрисовка финальной страницы
     */
    public function renderErrPage($errno, $errstr, $errfile, $errline)
    {
        $cr_dir = dirname(__FILE__);
        include "{$cr_dir}/../../modules/debuger/views/main.php";
    }
}