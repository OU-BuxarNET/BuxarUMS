<?php

namespace modules\logger;

/**
 * Логирование
 * @package modules\logger
 */
class LoggerModule
{
    /**
     * @param $string
     */
    public static function write($string)
    {
        $log = date('Y-m-d H:i:s') . $string;
        file_put_contents(__DIR__ . 'accesslog.txt', $log . PHP_EOL, FILE_APPEND);
    }

    /**
     * @return bool
     */
    public static function check(): bool
    {
        if (is_file(__DIR__ . 'accesslog.txt')) {
            return true;
        }

        return false;
    }
}