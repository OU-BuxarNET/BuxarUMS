<?php

/**
 * Тестовая модель в модуле-примере
 */
class TestBaseModel
{
    public $status;
    public $params = [];

    public function __construct()
    {
        $this->params = [
            'user_ip' => $_SERVER['REMOTE_ADDR'],
        ];
    }

    /**
     * @return string
     */
    public function getUserIp(): string
    {
        return $this->params['user_ip'];
    }
}