<?php

class Profile extends Controller 
{
    public function index() 
    {
        $title = "Profile";
        return $this->view('profile', ['title' => $title, 'showNavDash' => false, 'showFooter' => true]);
    }
}