<?php

/**
 * Модуль обработки и вывода ошибок
 */
class Debug
{
    public $data;

    public function __construct()
    {
        $this->data = debug_backtrace();
    }

    public static function trace()
    {
        return true;
    }

    /**
     * @return array
     */
    public function get_list(): array
    {
        return $this->data;
    }

    /**
     * @return array
     */
    public static function getPost(): array
    {
        return $_POST;
    }

    /**
     * @return array
     */
    public static function getGet(): array
    {
        return $_GET;
    }

    /**
     * @return array
     */
    public static function getFiles(): array
    {
        return $_FILES;
    }

    /**
     * @return array
     */
    public static function getServer(): array
    {
        return $_SERVER;
    }
}