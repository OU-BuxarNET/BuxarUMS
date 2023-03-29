<?php

/**
 * Модель пользователя
 */
class User extends UserModule
{
    public function login(): bool
    {
        return true;
    }

    public function getInfo(): array
    {
        return [];
    }
}