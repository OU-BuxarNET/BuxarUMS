<?php

/**
 * Модуль файлового менеджера
 */
abstract class FilemModel
{
    /**
     * Сканирование переданной области.
     * Описывает логику предоставления пользователю информации о файлах внутри искомой директории
     *
     * @param $access_dir
     *
     * @return mixed
     */
    abstract protected function scan($access_dir);

    /**
     * Автоматизатор получения пути до файлового пространства (хранилища) пользователя
     *
     * @param $path
     *
     * @return mixed
     */
    abstract protected function myspace($path);

    /**
     * Описывает работу через api различных сервисов (напр., яндекс диск)
     *
     * @param $method
     * @param $params
     *
     * @return mixed
     */
    abstract protected function api($method, $params);
}