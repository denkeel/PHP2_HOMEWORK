<?php
namespace App\traits;

trait TSingleton
{
    private static $instance;

    private function __construct(){ }
    private function __clone(){ }
    private function __wakeup(){ }

    public static function getInstance()
    {
        if (empty(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

}