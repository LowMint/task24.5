<?php

namespace application\controllers;

use application\core\Controller;

class ControllerContacts extends Controller
{
    public function actionIndex()
    {
        $this->view->title = 'Контакты';
        $this->view->content_view = 'contacts.php';
        $this->view->render();
    }
}