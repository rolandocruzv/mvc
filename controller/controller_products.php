<?php
require_once 'model/model_products.php';
//require_once '../view/view_products.php';

$productsModel = new ProductsModel();
$products = $productsModel->getProducts();

    



?>