<?php

class Dashboard extends Controller 
{
    public function index() 
    {
        $title = "Dashboard";
        // $user = $this->load_model('User');
        // $data = [
        //     'first_name' => 'Peter',
        //     'last_name' => 'Jones',
        //     'created_date' => '2024-06-03 21:53:52',
        //     'user_id' => 'uuoduoeqjd',
        //     'gender' => 'Female',
        //     'school_id' => 'jnjnjnljio',
        //     'role' => 'Student'
        // ];

        // $updatedData = [
        //     'first_name' => 'John',
        //     'last_name' => 'Cena'
        // ];

        $user = new User();
        $data = $user->findAll();
        return $this->view('dashboard', ['title' => $title, 'rows' => $data]);
    }
}