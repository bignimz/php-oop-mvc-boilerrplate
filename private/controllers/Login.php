<?php

class Login extends Controller 
{
    public function index() 
    {
        $title = "ShuleMoja School Management System - Login";
        return $this->view('auth/login', ['title' => $title, 'showNavbar' => false, 'showFooter' => false]);
    }
}