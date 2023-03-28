<?php

class MysqlAdminModule
{
    public $setting        = [];
    public $module_name    = 'Модуль управления базой данных';
    public $module_version = '0.1';
    public $active         = 1;
    public $db_host        = '';
    public $db_port        = 3306;
    public $db_username    = '';
    public $db_password    = '';
    public $db_name        = '';
    public $settings       = [
        'active'     => 1,
        'admin_mode' => 1,
    ];

    public function connect()
    {
        return true;
    }
}

