<?php

class BasicModule
{
    public $setting        = [];
    public $module_name    = 'Базовый модуль';
    public $module_version = '0.1';
    public $active         = 1;
    public $description    = 'Базовый модуль. Служит примером работы и интеграции модулей в систему, если абстрактных методов не достаточно';
    public $settings       = [
        'active' => 1,
    ];
}