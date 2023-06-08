<?php

require_once(LIBS.'DB/MysqliDb.php');
class DB
{
    protected $db;
    public function connect()
    {
        $database = new MysqliDb(HOST, USER, PASS, DBNAME);
        // $database->set_charset('utf8');
        if(!$database->connect()) {
            $this->db = $database;
            return  $this->db;
        } else {
            echo "error";
        }
    }

}
