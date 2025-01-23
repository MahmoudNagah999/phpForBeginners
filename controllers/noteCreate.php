<?php

$pageHeading = "Note - Create";

if($_SERVER['REQUEST_METHOD'] === "POST")
{
    dd($_POST['body']);
    $body = $_POST['body'];

    // $stmt = $pdo->prepare("INSERT INTO notes (body) VALUES (:body)");
    // $stmt->execute(['body' => $body]);

    // header("Location: /notes");
    // die();
}


require "views/noteCreate.view.php";
