<?php
class Router {
    private static $routes = array();

    public static function addRoute($route, $file) {
        self::$routes[$route] = $file;
    }

    public static function handleRequest() {    
        $requestedRoute = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestedRoute = rtrim($requestedRoute, '/');
        $requestedRoute = urldecode($requestedRoute); // To handle URL-encoded characters    

        // Define the base path
        $base_path = Init::base_path();

        // Adjust the requested route for base path
        if ($requestedRoute === $base_path) {
            $requestedRoute = '/';
        } elseif (strpos($requestedRoute, $base_path) === 0) {
            $requestedRoute = substr($requestedRoute, strlen($base_path));
        }

        if (isset(self::$routes[$requestedRoute])) {
            $file = self::$routes[$requestedRoute];
            if (file_exists($file)) {
                require_once($file);
                exit;
            }
        }

        self::show404Error();
    }

    private static function show404Error() {
        http_response_code(404);
        require_once(Init::errors_dir('404'));
        exit;
    }
}
