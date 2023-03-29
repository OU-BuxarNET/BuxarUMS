<?php

class DebuggerModule
{
    public $setting        = [];
    public $module_name    = 'Debugger - визуальная оболочка обработки ошибок';
    public $module_version = '0.1';
    public $active         = 1;
    public $debug_dettings = [
        'dev'       => 1,
        'full_view' => 1,
    ];
}