<?php
$uri = parse_url($_SERVER['REQUEST_URI'])["path"];

//if ($uri === '/'){
//    require  'controller/index.php';
//} else if ($uri === '/about'){
//    require  'controller/about.php';
//} else if ($uri === '/contact'){
//    require  'controller/contact.php';
//}


$routes = [
'/phpForBeginners/' => 'controller/index.php',
'/phpForBeginners/notes' => 'controller/notes.php',
'/phpForBeginners/note' => 'controller/note.php',
'/phpForBeginners/about' => 'controller/about.php',
'/phpForBeginners/contact' => 'controller/contact.php',
];

function routeToController ($uri, $routes) {
    if(array_key_exists($uri, $routes)){
         require $routes[$uri];
    } else {
        abort();
    }
}

function abort ($code = 404) {
    http_response_code($code);
    require  "views/{$code}.php";
    die();
}

routeToController ($uri, $routes);