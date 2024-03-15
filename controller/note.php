<?php

$config = require "config.php";
$db = new DataBase($config['database']);

$header = "Note";
$currentUserId = 1;

$note = $db->query("SELECT * FROM note WHERE id = :id", [
    "id" => $_GET['id']
])->fetch();

if(! $note) {
    abort();
}

if($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}

include "views/note.view.php";