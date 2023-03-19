<?php

namespace vendor\system;

/**
 * Система
 * @package system
 */
class System
{
    public static $classMap = [];
    public static $app;
    public static $aliases  = ['@system' => __DIR__];
    public static $container;

    /**
     * Запрос версии
     *
     * @return string
     */
    public static function getVersion()
    {
        return '0.0.4';
    }

    /**
     * Верблюжка
     *
     * @param $string
     *
     * @return mixed
     */
    public static function camelCase($string)
    {
        return str_replace(' ', '', ucwords(str_replace('-', ' ', $string)));
    }
}
