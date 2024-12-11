<?php
class Route {
    public static function start() {
        $controller_name = 'Main'; // Контроллер по умолчанию
        $action_name = 'index';
        $routes = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        // echo "$ routes  --- :" ;
        // print_r($routes);
        // echo "</br>";

        if (!empty($routes[0])) {
            $controller_name = ucfirst($routes[0]); // Например, "about" -> "About"
            // echo "Controller name: $controller_name<br>";
            // print_r($controller_name);
        }

        $controller_name = 'Controller_' . $controller_name;
        $controller_path = "Controllers/" . $controller_name . ".php";
        // echo "Controller Path: $controller_path<br>";

        if (file_exists($controller_path)) {
            include $controller_path;
            print_r($controller_path);
        } else {
            self::ErrorPage404();
            echo "Контроллер ПАС : $controller_path  не найден";
            return;
        }

        $controller = new $controller_name;
        $action = 'action_' . $action_name;

        if (method_exists($controller, $action)) {
            // print_r($controller_name);
            // echo "Controller : "; print_r($controller); echo "<br>";

            $controller->$action();
        } else {
            self::ErrorPage404();
        }
    }

    public static function ErrorPage404() {
        http_response_code(404);
        echo "404 Not Found</br>";
        echo "
            <div>
            <p>Вы будете перенаправлены на главную страницу через <span id='countdown'>5</span> секунд.</p>
            <script>
                let countdown = 5;
                const countdownElement = document.getElementById('countdown');
                const timer = setInterval(() => {
                countdown--;
                countdownElement.textContent = countdown;
                if (countdown <= 0) {
                    clearInterval(timer);
                    window.location.href = '/';
                }
            }, 1000);
            </script>
            </div>
            ";
    }

}
?>