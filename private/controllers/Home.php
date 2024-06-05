<?php

class Home extends Controller
{
    public function index()
    {
        $title = "ShuleMoja School Management System";
        return $this->view('home', ['title' => $title, 'showNavbar' => true]);
    }
}
