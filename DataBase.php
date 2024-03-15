<?php
class DataBase 
{
    private $conn;
    
    public function __construct($config, $user = "root", $password = "")
    {
        $dsn ='mysql:' . http_build_query($config, "", ";");
        $this->conn  = new PDO($dsn, $user, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $param = [])
    {
        $statment = $this->conn->prepare($query); 
        $statment->execute($param);

        return  $statment;
    }
}