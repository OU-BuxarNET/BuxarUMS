<?php

/**
 * Модуль файлового менеджера
 */
class Filem extends FilemModel
{
    /**
     * Сканирование
     *
     * @param $access_dir
     *
     * @return array|false
     */
    public function scan($access_dir)
    {
        return scandir($access_dir);
    }

    /**
     * Получение пути до файлового пространства пользователя
     *
     * @param $path
     */
    protected function myspace($path)
    {
        //User::getMySpace()
    }

    /**
     * Работа через api
     *
     * @param $method
     * @param $params
     *
     * @return bool
     */
    protected function api($method, $params)
    {
        return true;
    }
}