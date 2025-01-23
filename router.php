<?php

$routers = require ("routes.php");

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

function routeToController($uri, $routers) {
    if(array_key_exists($uri, $routers)){
        require $routers[$uri];
    } else {
        abort(404);
    }
}

function abort($code=404) {
    http_response_code($code);
    require "views/{$code}.php";
    die();
}

routeToController($uri, $routers);