<?php

namespace application\controllers;

use application\core\Controller;
use application\core\View;
use application\models\ModelPortfolio;


class ControllerPortfolio extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Портфолио';
        $this->view->content_view = 'portfolio.php';
        $this->view->model = new ModelPortfolio();
        $this->view->render();
    }
}