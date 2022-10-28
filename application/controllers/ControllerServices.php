<?php

namespace application\controllers;

use application\core\Controller;

class ControllerServices extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Услуги';
        $this->view->content_view = 'services.php';
        $this->view->render();
    }
}
