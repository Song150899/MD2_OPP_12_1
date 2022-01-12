<?php
include_once "Services/ProductManager.php";
include_once "Models/Product.php";
use Services\ProductManager;
use Models\Product;
$productManager=new  ProductManager();
$productManager->add(new Product("Laptop"));
$productManager->add(new Product("Điện thoại"));
$productManager->add(new product("Tai nghe"));
$products= $productManager->getProducts();
foreach ($products as $product){
    echo $product->getName()."<br/>";
}