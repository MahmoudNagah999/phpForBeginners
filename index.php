<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body{
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>
<body>

    <h1> Recommended Book </h1>
    <?php
        $books = [
            "Dark Matter",
            "Hail Mary",
            "The langoliers"
        ];
    ?>

    <ul>
        <?php foreach ($books as $book) : ?>
            <li> <?= $book ?> </li>";
        <?php endforeach; ?>
    </ul>
</body>
</html>