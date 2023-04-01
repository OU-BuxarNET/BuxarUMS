<?php

/**
 * Модель оплаты
 */
class CryptoPayment extends CryptoModel
{
    /**
     * Валидация платежа / данных с api
     *
     * @param $payment
     *
     * @return bool
     */
    public function validate($payment): bool
    {
        if ($payment){
            return true;
        }

        return false;
    }

    /**
     * Обработка платежа
     *
     * @param $payment
     *
     * @return bool
     */
    public function send($payment)
    {
         return true;
    }

    /**
     * Модель оплаты криптовалютой
     *
     * @param $payment
     * @param $type
     *
     * @return bool
     */
    public function api($payment, $type)
    {
        return true;
    }
}