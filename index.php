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

include "index.view.php";