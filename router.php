<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
	"/" => "controllers/index.php",
	"/about" => "controllers/about.php",
	"/contact" => "controllers/contact.php"
];

function abort($code = 404) {
	http_response_code($code);
	require "views/{$code}.php";
	return die();
}

if (!array_key_exists($uri, $routes)) {
	abort();
}

require $routes[$uri];
