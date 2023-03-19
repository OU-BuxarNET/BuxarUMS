<?php

/**
 * Модель пользователя
 */
class User
{
    public $id;
    public $type;
    public $status;
    public $username;
    public $family;
    public $patronymic;
    public $birthday;
    public $data_arr = [];

    public function getInfo()
    {
        return [];
    }
}