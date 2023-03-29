<?php

/**
 * SEO модель
 */
class SeoModel
{
    public string $title;
    public string $description;
    public string $keywords;
    public string $author;
    public array  $schema;

    /**
     * @return string
     */
    public static function generateTags(): string
    {
        return '';
    }
}