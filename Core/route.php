<?php

class Route {

    public static function start(){
        // controller and default action
        $controller_name = 'Main';
        $action_name = 'index';
        $routes = $_GET['url'] ?? '';

        // getting controller name
        if (!empty($routes)){
            $controller_name = $routes;
        }

        // adding prefixes
        $model_name = 'model_'.$controller_name;
        $controller_name = 'controller_'.$controller_name;
        $action_name = 'action_'.$action_name;
        // catching file with model class (there may be not a model file)
        $model_file = strtolower($model_name).'.php';
        $model_path = "application/models/".$model_file;

        if(file_exists($model_path)){
            include "application/controllers/".$controller_file;
        } else {
            Route::ErrorPage404();
        }

        // creating controller
        $controller = new $controller_name;
        $action = $action_name;
        if(method_exists($controller, $action)){
            // calling controller action
            $controller->$action();
        } else {
            Route::ErrorPage404();
        }

    }

    function ErrorPage404(){
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }

}

?>