<?php
namespace App\modules;

use App\services\BD;

abstract class Model implements IModel
{
    /**
     * @var BD
     */
    protected $bd;

    public function __construct()
    {
        $this->bd = BD::getInstance();
    }

    public static function find($id)
    {
        $table = static::getTableName();
        $sql = "SELECT * FROM {$table} WHERE id = :id";
        //var_dump(BD::getInstance()->queryObject($sql, ['id' => $id], get_called_class()));
        return BD::getInstance()->queryObject($sql, ['id' => $id], get_called_class());
    }

    public static function getAll()
    {
        $table = static::getTableName();
        $sql = "SELECT * FROM {$table} ";
        return BD::getInstance()->queryObjects($sql, [], get_called_class());
    }

    public function delete($id)
    {
        $sql = "DELETE FROM {$this->getTableName()} WHERE id = :id";
        $stm = $this->bd->connect()->prepare($sql);
        $stm->execute(['id' => $id]);
    }

    public function insert()
    {
        $params = [];
        $placeholders = [];
        foreach ($this as $key => $value){
            if ($key == 'bd'){
                continue;
            }
            $params[$key] = $value;
            $placeholders[] = ':' . $key;
        }
        $columns = implode(', ', array_keys($params));
        $queryPlaceholder = implode(', ', $placeholders);

        //INSERT INTO users (id, login, password) VALUES (:id, :login, :password);
        $sql = "INSERT INTO {$this->getTableName()} ({$columns}) VALUES ({$queryPlaceholder})";
        $stm = $this->bd->connect()->prepare($sql);
        $stm->execute($params);
        $this->id = $this->bd->connect()->lastInsertId();
    }

}