<?php

namespace application\controllers;

use application\core\Controller;

class Controller404 extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Страница не найдена';
        $this->view->content_view = '404.php';
        $this->view->template_view = '404.php';
        $this->view->render();
    }
}