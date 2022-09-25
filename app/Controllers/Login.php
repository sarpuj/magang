<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_mahasiswa;

class Login extends Controller
{
    public function index()
    {
        helper(['form']);
    }
}
