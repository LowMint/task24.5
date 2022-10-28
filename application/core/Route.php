<?php

namespace application\core;

use application\controllers\ControllerMain;

class Route
{
    public static function start()
    {
        // контроллер и действие по умолчанию
        $controller_name = $_GET['page'] ?? 'Main';
        $action_name = 'actionIndex';

        // переобъявляем переменные контроллера
        $controller_name = 'application\controllers\\Controller' . ucfirst($controller_name);

        if (!class_exists($controller_name)) return self::errorPage404();

        // создаем объект класса контроллер
        $controller = new $controller_name;
        if (!method_exists($controller, $action_name)) return self::errorPage404();

        $controller->$action_name();
        return true;
    }

    public static function errorPage404()
    {
        header('Location:index.php?page=404');
        return false;
    }
}