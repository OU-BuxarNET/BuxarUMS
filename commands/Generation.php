<?php

use vendor\system\Console;

/**
 * Генератор моделей.
 * @todo: через консоль? или + веб-морда?
 */
class Generation extends Console
{
    public function model($model_name): bool
    {
        return true;
    }
}