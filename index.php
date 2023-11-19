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
            [
                "name" => "Dark Matter",
                "author" => "DAny",
                "Url" => "https://example.com"
            ],
            [
                "name" => "Hail Mary",
                "author" => "Ali",
                "Url" => "https://example.com"
            ], [
                "name" => "Hail Mary",
                "author" => "Ali",
                "Url" => "https://example.com"
            ]
        ];

        function filter($books, $author){
            $filteredBook = [];
            foreach ($books as $book){
                if($book['author'] = $author){
                    $filteredBook = $book;
                }
            }
            return $filteredBook;
        }
    ?>

    <ul>
        <?php foreach (filter($books, "Ali") as $book) : ?>
                <li>
                    <a href="<?= $book['Url']?>">
                        <?= $book['name'] ?>
                    </a>
                </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>