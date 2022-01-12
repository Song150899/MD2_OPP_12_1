<?php

class application
{
    private static $instance;
    private function __construct()
    {
    }

    /**
     * @return mixed
     */
    public static function getInstance()
    {
        if (self::$instance === null) {
            self::$instance = new application();
        }
        return self::$instance;
    }
}
