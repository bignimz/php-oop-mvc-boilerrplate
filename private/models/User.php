<?php

class User extends Model
{
    public function validate($data)
    {
        $this->errors = [];

        // Check for first name
        if (empty($data['firstname'])) {
            $this->errors['firstname'] = "First name field cannot be empty";
        } elseif (!preg_match('/^[a-zA-Z]+$/', $data['firstname'])) {
            $this->errors['firstname'] = "Only letters allowed in first name";
        }

        // Check for last name
        if (empty($data['lastname'])) {
            $this->errors['lastname'] = "Last name field cannot be empty";
        } elseif (!preg_match('/^[a-zA-Z]+$/', $data['lastname'])) {
            $this->errors['lastname'] = "Only letters allowed in last name";
        }

        // Check for email
        if (empty($data['email'])) {
            $this->errors['email'] = "Email field cannot be empty";
        } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = "Email is not valid";
        }

        // Check for gender
        if (empty($data['gender'])) {
            $this->errors['gender'] = "Gender field cannot be empty";
        } elseif (!in_array($data['gender'], ['male', 'female'])) {
            $this->errors['gender'] = "Invalid gender selected";
        }

        // Check for role
        if (empty($data['role'])) {
            $this->errors['role'] = "Role field cannot be empty";
        } elseif (!in_array($data['role'], ['student', 'teacher', 'bursar', 'admin', 'superadmin'])) {
            $this->errors['role'] = "Invalid role selected";
        }

        // Check for password
        if (empty($data['password'])) {
            $this->errors['password'] = "Password field cannot be empty";
        } elseif ($data['password'] !== $data['password2']) {
            $this->errors['password'] = "The passwords do not match!";
        }

        return empty($this->errors);
    }
}
