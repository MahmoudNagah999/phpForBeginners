<?php

$config = require "config.php";
$db = new DataBase($config['database']);

$header = "Note";

$note = $db->query("SELECT * FROM note WHERE id = :id", ["id" => $_GET['id']])->fetch();

include "views/note.view.php";