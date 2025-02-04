<?php

$config = require ("config.php");
$db = new Database($config['database']);

$pageHeading = "Note - Create";

if($_SERVER['REQUEST_METHOD'] === "POST")
{
    $errors = [];

    if(strlen($_POST['body']) === 0)
    {
        $errors['body'] = "Body is required";
    }

    if(strlen($_POST['body']) > 1000)
    {
        $errors['body'] = "Body is too long";
    }

    if(empty($errors))
    {
        $db->query("Insert into notes (body, user_id) values (:body, :user_id)",[
            "body" => $_POST['body'],
            "user_id" => 1
        ]);
    }
}


require "views/noteCreate.view.php";
