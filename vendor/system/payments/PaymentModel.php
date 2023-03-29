<?php

/**
 * Общая абстрактная модель оплаты
 */
abstract class PaymentModel
{
    abstract protected function validate($payment);
    abstract protected function send($payment);
}