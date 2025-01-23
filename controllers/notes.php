<?php
$config = require ("config.php");
$db = new Database($config['database']);

$pageHeading = "My Notes";
$currentUserId = 1;


$notes = $db->query("SELECT * FROM notes where user_id = :userId",[
    "userId" => $currentUserId
])->get();

require "views/notes.view.php";
