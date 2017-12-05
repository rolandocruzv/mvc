<?php

class ProductsModel{
    private $db;
    private $products;
    
    public function __construct(){
        require_once 'model/pdo.php';
        $this->db = MyPdo::connection();
        $this->products = array();
        
    }
    
    public function getProducts(){
        
        $sql = "SELECT * FROM products";
        $stmt = $this->db->prepare($sql);      
        $stmt->execute();
        //$query = $this->db->query();
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
            $this->products[] = $row;
        }
        
        return $this->products;
    }
    
    public function getProduct($id){
        
        return $this->products[$id];
    }
    
    
    
}


?>