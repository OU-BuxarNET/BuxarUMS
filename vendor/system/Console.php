<?php

namespace vendor\system;

/**
 * Class Console
 * @package vendor\system
 */
class Console
{
    /**
     * Получение запроса в формате {точка входа}/{запрос}
     *
     * @return mixed
     */
    public function getRequest()
    {
        return $_SERVER['argv'][1];
    }
}