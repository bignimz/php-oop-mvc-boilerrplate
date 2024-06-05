<?php

/**
 * Home controller
 */

 class Controller {
    public function view($view, $data = [])
    {
        extract($data);

        if(file_exists("../private/views/" . $view . ".view.php"))
        {
            require("../private/views/" . $view . ".view.php");
        }else {
            require("../private/views/404.view.php");
        }
    }

    public function load_model($model)
    {
        if(file_exists("../private/models/" . ucfirst($model) . ".php"))
        {
            // Load the file
            require("../private/models/" . ucfirst($model) . ".php"); 
            // Instantiate it
            return $model = new $model();
        }
        return false;
    }

    protected function redirect($url)
    {
        header("Location: " . ROOT . "/".trim($url, "/"));
        die;
    }
 }