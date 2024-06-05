<?php

class Signup extends Controller 
{
    public function index() 
    {
        $title = "ShuleMoja School Management System - Add User";
        $errors = [];
        $data = [];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Populate $data only if form is submitted
            $data = [
                'first_name' => $_POST['first_name'] ?? '',
                'last_name' => $_POST['last_name'] ?? '',
                'email' => $_POST['email'] ?? '',
                'password' => $_POST['password'] ?? '',
                'password2' => $_POST['password2'] ?? '',
                'gender' => $_POST['gender'] ?? '',
                'role' => $_POST['role'] ?? ''
            ];

            $user = new User();

            if ($user->validate($data)) {
                $user->insert($data);
                $this->redirect('login');
            } else {
                $errors = $user->errors;
            }
        }

        return $this->view('auth/signup', ['title' => $title, 'errors' => $errors, 'data' => $data]);
    }
}
