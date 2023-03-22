<?php

namespace vendor\system;

/**
 * Валидация данных
 * @package vendor\system
 */
class Validate
{
    /**
     * Очистка строки от лишних пробелов по бокам и тегов
     *
     * @param $string
     *
     * @return string
     */
    public static function clearString($string): string
    {
        return trim(strip_tags($string));
    }

    /**
     * Проверка пароля. Базовая версия - минимум 6 символов
     *
     * @param $password
     *
     * @return bool
     */
    public static function checkPassword($password): bool
    {
        if (mb_strlen($password, 'UTF-8') > 5) {
            return true;
        }

        return false;
    }

    /**
     * Проверка e-mail адреса
     *
     * @param $email
     *
     * @return bool
     */
    public static function checkEmail($email): bool
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Генерация временного токена (псевдорандомное число (9000000-9999999) + временная метка, обернутые в md5)
     * Служит для легковесного аналога csrf-токена
     *
     * @return string
     */
    public static function generateTempToken(): string
    {
        return md5(rand(9000000, 9999999) . time());
    }
}