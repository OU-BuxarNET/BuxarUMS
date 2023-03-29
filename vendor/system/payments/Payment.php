<?php

/**
 * Модель оплаты
 */
class Payment extends PaymentModel
{
    /**
     * Валидация платежа
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
     * Отправка платежа
     *
     * @param $payment
     *
     * @return bool
     */
    public function send($payment)
    {
         return true;
    }
}