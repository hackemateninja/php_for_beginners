<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/note.php',
    '/contact' => 'controllers/contact.php',
    '/learnvue' => 'views/learnvue.php',
];

function abort($code = 404)
{
    http_response_code($code);
    require "views/{$code}.php";

    return exit();
}

if (! array_key_exists($uri, $routes)) {
    abort();
}

require $routes[$uri];
