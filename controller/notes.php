<?php

$config = require "config.php";
$db = new DataBase($config['database']);

$header = "Notes";

$notes = $db->query("SELECT * FROM note WHERE user_id = 1")->fetchAll();

include "views/notes.view.php";