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
        // Lambda function
//        $filteredBooks = function ($books, $author){
//            $filteredBook = [];
//            foreach ($books as $book){
//                if($book['author'] === $author){
//                    $filteredBook = $book;
//                }
//            }
//            return $filteredBook;
//        };

        function filter ($items, $fn){
            $filteredBook = [];
            foreach ($items as $item){
                if($fn($item)){
                    $filteredBook = $item;
                }
            }
            return $filteredBook;
        }

        $filteredBooks = filter($books, function ($book){
            return $book['author'] === 'Ali';
        });

        $filteredBooks = array_filter($books, function ($book){
            return $book['author'] === 'Ali';
        });
    ?>

    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
                <li>
                    <a href="<?= $book['Url']?>">
                        <?= $book['name'] ?>
                    </a>
                </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>