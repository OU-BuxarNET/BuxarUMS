<?php

namespace vendor\system;

/**
 * Модуль сессий
 * @package vendor\system
 */
class Session
{
    /**
     * Конструктор - запуск работы с сессиями, назначение session_id
     */
    public function __construct()
    {
        session_start();
    }

    /**
     * Добавление
     *
     * @param $key
     * @param $value
     */
    public function add($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Обновление
     *
     * @param $key
     * @param $value
     */
    public function update($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Чтение
     *
     * @param $key
     *
     * @return string
     */
    public function read($key)
    {
        return $_SESSION[$key];
    }

    /**
     * Удаление
     *
     * @param $key
     */
    public function delete($key)
    {
        unset($_SESSION[$key]);
    }
}