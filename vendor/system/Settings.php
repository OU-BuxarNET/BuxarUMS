<?php

namespace vendor\system;

/**
 * Базовые настройки
 * @package vendor\system
 */
class Settings
{
    const SYSTEM_STATUS = 1;                // система активна?
    const PROJECT_NAME  = 'Мой проект';     // название проекта

    public function __construct()
    {
        ini_set("display_errors", 1);   // отображать ошибки?
    }
}