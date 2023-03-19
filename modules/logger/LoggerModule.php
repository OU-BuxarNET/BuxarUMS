<?php

namespace modules\logger;

class LoggerModule
{
    public static function write($string)
    {
        $log = date('Y-m-d H:i:s') . $string;
        file_put_contents(__DIR__ . 'accesslog.txt', $log . PHP_EOL, FILE_APPEND);
    }
}