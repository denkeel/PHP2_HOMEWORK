<?php
namespace App\services;

interface IBD
{
    public function find(string $sql, array $params = []);

    /**
     * @param string $sql
     * @param array $params
     * @return mixed
     */
    public function findAll(string $sql, array $params = []);
}