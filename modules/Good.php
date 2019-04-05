<?php
namespace App\modules;

class Good extends Model
{
    use CalcRows;

    public $id;
    public $name;
    public $price;

    public static function getTableName(): string
    {
        return 'goods';
    }

}