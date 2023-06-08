<?php

class Product extends DB
{
    private $table = "products";
    private $conn;
    public function __construct()
    {
        // var_dump($this->connect());
        $this->conn = $this->connect();
    }
    public function getAllProducts()
    {
        return $this->conn->get($this->table);
    }
    public function insertProduct($data)
    {
        return $this->conn->insert($this->table, $data);
    }
    // get product by id
    public function getProduct($id)
    {
        $db = $this->conn->where('id', $id);
        return $db->getOne($this->table);
    }
    // update product
    public function updateProduct($id, $data)
    {
        $db = $this->conn->where('id', $id);
        return $db->update($this->table, $data);

    }


    // delete product
    public function deleteProduct($id)
    {
        $db = $this->conn->where('id', $id);
        return $db->delete($this->table);
        // return $this->conn->delete($this->table, $id);

    }

}
