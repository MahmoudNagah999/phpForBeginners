<?php

require "helper.php";
require "DataBase.php";
$config = require "config.php";
// require "router.php";

$db = new DataBase($config['database']);

$id = $_GET['id'];
$query = "select * from Posts where id = :id";

$posts = $db->query($query, [":id" => $id]);

dd($posts);