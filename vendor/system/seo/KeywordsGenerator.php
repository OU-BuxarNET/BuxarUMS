<?php

/**
 * Генерация ключевых слов
 */
class KeywordsGenerator
{
    public string $description;

    public function start()
    {
        $keys = explode(' ', $this->description);
        $result_string = '';

        foreach ($keys as $key){
            $result_string .= "{$key}, ";
        }

        return $result_string;
    }
}