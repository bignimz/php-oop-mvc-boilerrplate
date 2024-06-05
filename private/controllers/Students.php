<?php

/**
 * Students controller
 */

 class Students extends Controller
 {
    public function index($id = '')
    {
        $title = "Students";
        return $this->view('students', ['title' => $title, 'showNavbar' => true]);

    }
 }