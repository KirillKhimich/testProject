<?php


namespace Models;




class TagModel extends \Core\Db
{
    private $db;
    public function __construct()
    {
        $this -> db = new \Core\Db();

    }
    public function SelectAll(){
        $result =  $this->db->DbQuery("SELECT * FROM `tags`");

        $array = \Core\Db::arrayEnumeration($result);

        return $array;
    }
    public function Insert($name){
        $this->db->DbQuery("INSERT INTO `tags`(`id`,`tagsTitle`) VALUES (NULL,'$name')");
    }
}