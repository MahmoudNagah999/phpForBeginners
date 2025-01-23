<?php 

function dd($value) {
    echo "<pre>" . var_dump($value) . "</pre>";
    die();
}

function UrlIs($url) {
    return $_SERVER['REQUEST_URI'] === $url;
}

