<?php
namespace App\services;

use App\traits\TSingleton;

class BD implements IBD
{
    use TSingleton;

    private $connect;

    private $config = [
        'driver' => 'mysql',
        'host' => '127.0.0.1',
        'db' => 'gbphp',
        'user' => 'root',
        'pass' => '',
        'charset' => 'utf8',
    ];

    public function connect(){
    if (empty($this->connect)) {
        $this->connect =  new \PDO(
            $this->prepareDsn(),
            $this->config['user'],
            $this->config['pass']);
        $this->connect->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    }

    return $this->connect;
}

    public function find(string $sql, array $params = [])
    {
        $stm = $this->connect()->prepare($sql);
        $stm->execute($params);
        return $stm->fetchAll();
    }

    public function findAll(string $sql, array $params = [])
    {
        $stm = $this->connect()->prepare($sql);
        $stm->execute($params);
        return $stm->fetchAll();
    }

    public function queryObject(string $sql, array $params = [], $class)
    {
        $stm = $this->connect()->prepare($sql);
        $stm->execute($params);
        $stm->setFetchMode(\PDO::FETCH_CLASS, $class);
        return $stm->fetch();
    }

    public function queryObjects(string $sql, array $params = [], $class)
    {
        $stm = $this->connect()->prepare($sql);
        $stm->execute($params);
        $stm->setFetchMode(\PDO::FETCH_CLASS, $class);
        return $stm->fetchAll();
    }


    private function prepareDsn()
    {
        return sprintf('%s:host=%s;dbname=%s;charset=%s',
            $this->config['driver'],
            $this->config['host'],
            $this->config['db'],
            $this->config['charset']
        );
    }

}