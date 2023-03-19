<?php

namespace vendor\system;

/**
 * @package vendor\system
 */
abstract class BaseModel
{
    abstract protected function settings();
    abstract protected function status($status);

    public function check() {
        return true;
    }
}