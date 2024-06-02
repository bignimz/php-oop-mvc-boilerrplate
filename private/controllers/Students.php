<?php

/**
 * Students controller
 */

 class Students extends Controller
 {
    public function index($id = '')
    {
        // Code...
        echo isset($id) && $id != '' ? "Students Controller working for ID ". $id : "Students Controller working!";

    }
 }