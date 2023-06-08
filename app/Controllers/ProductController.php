<?php

class ProductController
{
    public function index()
    {
        # code...
        $db = new Product();
        $data['products'] = $db->getAllProducts();
        View::load("product/index", $data);
    }
    //get data from form and store product
    public function store()
    {
        if(isset($_POST['submit'])) {

            $name = $_POST["name"];
            $price = $_POST["price"];
            $description = $_POST["description"];
            $qty = $_POST["qty"];
            $data = array(
              "name"=>$name,
              "price"=>$price,
              "description"=>$description,
              "qty"=>$qty
            );
            $db = new Product();
            if($db->insertProduct($data)) {
                return View::load("product/add", [ "success"=>"Data Created Successfully"]);
            } else {
                return View::load("product/add");
            }
            // $db->store();
        }
    }
    public function show($id)
    {
        # code...
        // $db = new Product();
        // $data['product'] = $db->getProductById($id);
        // View::load("product/show", $data);
    }
    // add new product - view add page
    public function add()
    {

        $db = new Product();
        $data['products'] = $db->getAllProducts();
        View::load("product/add", $data);
    }
    // edit product + view edit page
    public function edit($id)
    {
        $db = new Product();
        if($db->getProduct($id)) {
            $data['product'] = $db->getProduct($id);
            View::load("product/edit", $data);
        } else {
            echo "error";
        }
    }
    // update product
    //get data from form and store product
    public function update($id)
    {
        if(isset($_POST['submit'])) {

            $name = $_POST["name"];
            $price = $_POST["price"];
            $description = $_POST["description"];
            $qty = $_POST["qty"];

            $dataInsert = array(
              "name"=>$name,
              "price"=>$price,
              "description"=>$description,
              "qty"=>$qty
            );

            $db = new Product();

            if($db->updateProduct($id, $dataInsert)) {
                return View::load("product/edit", [ "success"=>"Data Updated Successfully",'product' => $db->getProduct($id)]);
            } else {
                return View::load("product/edit", ['product' => $db->getProduct($id)]);
            }
            // $db->store();
        }
    }

    // delete product
    public function delete($id)
    {
        $db = new Product();
        if($db->deleteProduct($id)) {
            return View::load("product/delete");
        } else {
            echo "error";
        }
    }

}
