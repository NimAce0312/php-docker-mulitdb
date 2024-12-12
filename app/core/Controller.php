<?php

class Controller
{
    protected $base_url;
    protected $functions;

    public function __construct()
    {
        $this->base_url = $GLOBALS['base_url'];
        $this->functions = new Functions();
    }

    public function model($model)
    {
        require_once '../models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        $base_url = $this->base_url;
        ob_start();
        require_once '../views/' . $view . '.php';
        $content = ob_get_clean();

        $title = ((isset($page_title) && $page_title != "") ? $page_title . " | " : "") . "MultiDB";
        require_once '../views/layout_front.php';
    }
}
