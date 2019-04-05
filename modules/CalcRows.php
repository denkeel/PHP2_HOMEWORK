<?php
namespace App\modules;

trait CalcRows
{
    /**
     * Выполняет подсчет
     *
     * @param array $rows
     * @return int
     */
    public function calc(array $rows):int
    {
        return count($rows);
    }
}
