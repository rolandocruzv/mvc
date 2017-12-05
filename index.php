<!DOCTYPE html>
<html
    <head><title>Productos</title></head>
<body>

<?php
require_once 'controller/controller_products.php';
foreach ($products as $product) {
    
    echo $product["name"]. '-'.$product["description"].'<br>';
    
}

?>

    
</body>
</html>