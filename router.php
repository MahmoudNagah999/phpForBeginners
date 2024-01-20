<?php
$uri = parse_url($_SERVER['REQUEST_URI']);

//if ($uri === '/'){
//    require  'controller/index.php';
//} else if ($uri === '/about'){
//    require  'controller/about.php';
//} else if ($uri === '/contact'){
//    require  'controller/contact.php';
//}


$routes = [
'/' => 'controller/index.php',
'/about' => 'controller/about.php',
'/contact' => 'controller/contact.php',
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