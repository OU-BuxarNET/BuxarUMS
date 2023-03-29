<?php

/**
 * Языковая модель
 */
class LanguageModel
{
    public string $language;

    /**
     * Получение перевода
     *
     * @param $point
     *
     * @return false|mixed
     */
    public function getString($point)
    {
        if ($this->language = 'en')
        {
            return $point;
        }

        return false;
    }
}