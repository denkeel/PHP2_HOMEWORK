<?php
namespace App\modules;

class User extends Model
{
    public $id;
    public $login;
    public $password;

    public static function getTableName(): string
    {
        return 'users';
    }
}