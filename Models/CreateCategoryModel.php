<?php


namespace Models;


use Core\Db;

class CreateCategoryModel extends Db
{

    private $db;
    public function __construct()
    {
        $this -> db = new Db();

    }
    protected function Insert($name){
        $result = $this->db->DbQuery("INSERT INTO categories(id,categoryTitle) VALUES (NULL,'$name')");
        if ($result == false){
            throw new \Exception("Произошла ошибка при записи категорий в базу данных");
        }
    }

}