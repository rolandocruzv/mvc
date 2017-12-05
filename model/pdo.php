<?php

class MyPdo {

    public static function connection() {

        try {
            
            //$dsn = 'mysql:dbname=mvc;host=localhost;port=3306';
            $dsn = 'mysql:host=localhost;dbname=mvc';
            $connection = new PDO($dsn, 'root', '');
            //var_dump($connection);
            //$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //$connection->exec("SET CHARACTER SET UTF8");
        } catch (Exception $ex) {
            die("Error: " . $ex->getMessage());
        }

        return $connection;
    }
}
//$dsn = 'mysql:host=localhost;dbname=mvc;port=3306';
?>
