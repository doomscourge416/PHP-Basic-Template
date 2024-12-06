<?php
class Route {
    public static function start() {
        $controller_name = 'Main'; // Контроллер по умолчанию
        $action_name = 'index';
        $routes = explode('/', trim($_SERVER['REQUEST_URI'], '/'));

        if (!empty($routes[0])) {
            $controller_name = ucfirst($routes[0]); // Например, "about" -> "About"
        }

        $controller_name = 'Controller_' . $controller_name;
        $controller_path = "Controllers/" . $controller_name . ".php";

        if (file_exists($controller_path)) {
            include $controller_path;
        } else {
            self::ErrorPage404();
            return;
        }

        $controller = new $controller_name;
        $action = 'action_' . $action_name;

        if (method_exists($controller, $action)) {
            $controller->$action();
        } else {
            self::ErrorPage404();
        }
    }

    public static function ErrorPage404() {
        http_response_code(404);
        echo "404 Not Found";
    }
}
?>