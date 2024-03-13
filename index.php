<?php

require "helper.php";

require "DataBase.php";

// require "router.php";

$db = new DataBase();
$posts = $db->query("select * from Posts")->fetchAll(PDO::FETCH_ASSOC);

foreach($posts as $post){
    echo "<li>" . $post['title'] . "</li>";
}

     