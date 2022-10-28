<?php
namespace application\core;

class Controller {
    public $view;

    public function __construct()
    {
        $this->view = new View('main.php', 'template.php', 'Главная страница');
    }
}