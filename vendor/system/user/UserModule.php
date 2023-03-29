<?php

abstract class UserModule
{
    public int    $id;
    public int    $type;
    public int    $status;
    public string $username;
    public string $family;
    public string $patronymic;
    public string $birthday;
    public array  $data_arr;
    public int    $level;

    abstract protected function login();
}