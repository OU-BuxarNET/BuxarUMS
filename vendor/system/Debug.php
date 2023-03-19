<?php

class Debug
{
    public static function start()
    {
        echo '<pre>';
        var_dump(debug_backtrace());
    }

    /**
     * @param $point
     *
     * @return string
     */
    public static function checkpoint($point)
    {
        return "Test in point {$point} is ok";
    }

    /**
     * @param $data
     */
    public static function pvd($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '<pre>';
    }

    /**
     * @param $data
     */
    public static function pr($data)
    {
        echo '<pre>';
        print_r($data);
        echo '<pre>';
    }
}