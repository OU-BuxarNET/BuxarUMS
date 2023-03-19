<?php

/**
 * Базовая модель работы с базой данных
 *
 * @todo: логика - в базовой модели работы с БД будут основные методы - найти/положить. В зависимости от драйвера,
 *        данные далее будут переданы в отдельный файл (напр., MySQL)
 *
 *      + перевод в сам драйвер пути, таблицы и колонок
 */
class BaseDbModel
{
    // настройки
    public string $dbms                = 'MySQL';           // СУБД
    public string $type_bd             = 'local';           // тип хранения
    public array  $databases_addresses = ['localhost',];    // возможные адреса баз данных

    // базовые свойства
    public string $table;
    public array  $params;

    public static function createObject($type, array $params = [])
    {
        return true;
    }

    public static function find()
    {
        return self::createObject(self::helper(), [get_called_class()]);
    }

    public static function helper()
    {
        return true;
    }
}