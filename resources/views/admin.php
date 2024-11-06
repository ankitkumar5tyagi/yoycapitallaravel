<?php
// Get the requested URL path
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Define routes
$routes = [
    '/' => 'home.php',
    '/about' => 'about.php',
    '/contact' => 'contact.php',
];

// Check if the requested URI matches a route
if (array_key_exists($request_uri, $routes)) {
    include $routes[$request_uri];
} else {
    // If no route is matched, include a 404 page
    include '404.php';
}
?>
