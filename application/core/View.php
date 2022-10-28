<?php

namespace application\core;

class View
{
    public $content_view;
    public $template_view;
    public $title;
    public $model;

    public function __construct($content_view, $template_view, $title, $model = null)
    {
        $this->content_view = $content_view;
        $this->template_view = $template_view;
        $this->title = $title;
        $this->model = $model;
    }

    public function render()
    {
        include 'application/views/' . $this->template_view;
    }
}