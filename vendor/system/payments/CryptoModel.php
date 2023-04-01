<?php

/**
 * Общая абстрактная модель оплаты криптой
 */
abstract class CryptoModel
{
    abstract protected function validate($payment);
    abstract protected function send($payment);
    abstract protected function api($payment, $type);
}