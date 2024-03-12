<?php

require "helper.php";

require "router.php";

// connect to the Database Using PDO (php Data Object)
$dsn = "mysql:host=localhost;port=3306;dbname=Demo;charset=utf8mb4"; //  data source name

$pdo  = new PDO($dsn, "root", "");

$query = $pdo->prepare('select * from Posts');    
$query->execute();
$posts = $query->fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post){
    echo "<li>" .$post['title']."</li>";
}

     