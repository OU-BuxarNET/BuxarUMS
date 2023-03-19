<?php

/**
 * Очистка данных
 */
class DataClear
{
    /**
     * Строки
     * - html символы в спецсимволы + убирает боковые пробелы
     *
     * @param $string
     *
     * @return string
     */
    public static function string($string)
    {
        return htmlspecialchars(trim($string));
    }
}