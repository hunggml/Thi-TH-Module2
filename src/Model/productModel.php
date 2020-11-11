<?php

namespace test\Model;
class productModel
{
    protected $database;

    public function __construct()
    {
        $db = new connDB();
        $this->database = $db->connect();
    }

    public function getAll()
    {
        $sql = 'SELECT * FROM `products`';
        $stmt = $this->database->query($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $array = [];
        foreach ($data as $value) {
            $product = new product($value['productName'], $value['productType'], $value['price'], $value['quantity'], $value['dateAdd'], $value['description']);
            $product->setId($value['id']);
            array_push($array, $product);
        }
        return $array;
    }

    public function getProductId($id)
    {
        $sql = 'SELECT * FROM `products` WHERE `id` = :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $value = $stmt->fetch();
        $product = new product($value['productName'], $value['productType'], $value['price'], $value['quantity'], $value['dateAdd'], $value['description']);
        $product->setId($id);
        return $product;
    }

    public function addProduct($product)
    {
        $sql = 'INSERT INTO `products`(`productName`, `productType`, `price`, `quantity`, `dateAdd`, `description`) VALUES (:productName,:productType,:price,:quantity,:dateAdd,:description)';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':productName', $product->getProductName());
        $stmt->bindParam(':productType', $product->getProductType());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':quantity', $product->getQuantity());
        $stmt->bindParam(':dateAdd', $product->getDateAdd());
        $stmt->bindParam(':description', $product->getDescription());
        $stmt->execute();
    }

    public function editProduct($product)
    {
        $sql = 'UPDATE `products` SET `productName`= :productName,`productType`= :productType,`price`= :price,`quantity`= :quantity,`dateAdd`= :dateAdd,`description`= :description WHERE `id`= :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':productName', $product->getProductName());
        $stmt->bindParam(':productType', $product->getProductType());
        $stmt->bindParam(':price', $product->getPrice());
        $stmt->bindParam(':quantity', $product->getQuantity());
        $stmt->bindParam(':dateAdd', $product->getDateAdd());
        $stmt->bindParam(':description', $product->getDescription());
        $stmt->bindParam(':id', $product->getId());
        $stmt->execute();
    }

    public function deleteProduct($id)
    {
        $sql = 'DELETE FROM `products` WHERE `id`= :id';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }

    public function searchProduct($key)
    {
        $sql = 'SELECT * FROM `products` WHERE `productName` LIKE :key';
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':key', $key);
        $stmt->execute();
        $data = $stmt->fetchAll();
        $arr = [];
        foreach ($data as $value) {
            $infor = new product($value['productName'], $value['productType'], $value['price'], $value['quantity'], $value['dateAdd'], $value['description']);
            array_push($arr, $infor);
        }
        return $arr;
    }

}