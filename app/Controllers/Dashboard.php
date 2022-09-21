<?php

namespace App\Controllers;

class Dashboard extends BaseController{

    public function index()
    {
        // $data['title'] = 'Magang';
        echo view('templates/header');
        echo view('home');
        echo view('templates/footer');
    }
    
    public function login()
    {
        echo view('templates/header');
        echo view('login');
        echo view('templates/footer');
    }
    
    public function buat_akun()
    {
        echo view('templates/header');
        echo view('buat-akun');
        echo view('templates/footer');
    }
    
}

?>