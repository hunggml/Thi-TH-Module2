<?php

namespace test\Controller;

use test\Model\product;
use test\Model\productModel;

class productController
{
    protected $productModel;

    public function __construct()
    {
        $this->productModel = new productModel();
    }

    public function show()
    {
        $product = $this->productModel->getAll();
        include_once 'src/View/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'src/View/add.php';
        } else {
            $name = $_REQUEST['name'];
            $type = $_REQUEST['type'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $date = $_REQUEST['date'];
            $des = $_REQUEST['des'];

            $product = new product($name, $type, $price, $quantity, $date, $des);
            $this->productModel->addProduct($product);
            header('location:index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $product = $this->productModel->getProductId($id);
            include_once 'src/View/edit.php';
        } else {
            $id = $_REQUEST['id'];
            $product = $this->productModel->getProductId($id);

            $name = $_REQUEST['name'];
            $type = $_REQUEST['type'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $date = $_REQUEST['date'];
            $des = $_REQUEST['des'];

            $newProduct = new product($name, $type, $price, $quantity, $date, $des);
            $newProduct->setId($id);
            $this->productModel->editProduct($newProduct);
            header('location:index.php');
        }
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->productModel->deleteProduct($id);
        header('location:index.php');
    }

    public function search()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $search = "%" . $_REQUEST['search'] . "%";
            $input = $this->productModel->searchProduct($search);
            include_once 'src/View/searchlist.php';
        }
    }

}