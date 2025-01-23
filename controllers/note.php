<?php

$config = require ("config.php");
$db = new Database($config['database']);

$pageHeading = "Note";
$currentUserId = 1;

$note = $db->query("SELECT * FROM notes where id = :id", [
    "id" => $_GET['id']
])->findOrFail();

authorize($note['user_id'] == $currentUserId);

if ($note['user_id'] != $currentUserId) {
    abort(Response::HTTP_FORBIDDEN);
}


require "views/note.view.php";
