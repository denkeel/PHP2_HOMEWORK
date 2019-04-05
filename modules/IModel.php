<?php
namespace App\modules;


interface IModel
{
    /**
     * Возвращает название таблицы
     *
     * @return string
     */
    public static function getTableName(): string;
}