<?php
class DataBase {
    private $conn;
    
    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=Demo;charset=utf8mb4"; //  data source name
        $this->conn  = new PDO($dsn, "root", "");
    }

    public function query($query)
    {
        $statment = $this->conn->prepare($query);    
        $statment->execute();
        return  $$statment;
    }
}