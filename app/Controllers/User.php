<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_mahasiswa;

class User extends Controller
{

    public function index()
    {
        //membuat instance dari model model_mahasiswa sehingga dapat memnaggil semua function pada model
        $model = new Model_mahasiswa;
        $data['title'] = 'E-MAGANG';
        //memanggil function getMahasiswa pada model untuk membawa data yang terdapat pada variable data
        $data['mahasiswa'] = $model->getMahasiswa();

        echo view('user/header', $data);
        echo view('user/home', $data);
        echo view('user/footer', $data);
    }

    public function dataMhs()
    {
        //membuat instance dari model model_mahasiswa sehingga dapat memanggil semua function pada model
        $model = new Model_mahasiswa;
        $data['title'] = 'Mahasiswa';
        //memanggil function getMahasiswa pada model untuk membawa data yang terdapat pada variable data
        $data['mahasiswa'] = $model->getMahasiswa();

        echo view('templateMhs/header', $data);
        echo view('user/mahasiswa', $data);
        echo view('templateMhs/sidebar', $data);
        echo view('templateMhs/footer', $data);
    }

    public function profilMhs()
    {
        //membuat instance dari model model_mahasiswa sehingga dapat memanggil semua function pada model
        $model = new Model_mahasiswa;
        $data['title'] = 'Mahasiswa';
        //memanggil function getMahasiswa pada model untuk membawa data yang terdapat pada variable data
        $data['mahasiswa'] = $model->getMahasiswa();

        echo view('templateMhs/header', $data);
        echo view('user/profil', $data);
        echo view('templateMhs/sidebar', $data);
        echo view('templateMhs/footer', $data);
    }

    public function progressMhs()
    {
        //membuat instance dari model model_mahasiswa sehingga dapat memanggil semua function pada model
        $model = new Model_mahasiswa;
        $data['title'] = 'Mahasiswa';
        //memanggil function getMahasiswa pada model untuk membawa data yang terdapat pada variable data
        $data['mahasiswa'] = $model->getMahasiswa();

        echo view('templateMhs/header', $data);
        echo view('user/progress', $data);
        echo view('templateMhs/sidebar', $data);
        echo view('templateMhs/footer', $data);
    }

    public function laporanMhs()
    {
        //membuat instance dari model model_mahasiswa sehingga dapat memanggil semua function pada model
        $model = new Model_mahasiswa;
        $data['title'] = 'Mahasiswa';
        //memanggil function getMahasiswa pada model untuk membawa data yang terdapat pada variable data
        $data['mahasiswa'] = $model->getMahasiswa();

        echo view('templateMhs/header', $data);
        echo view('user/laporan', $data);
        echo view('templateMhs/sidebar', $data);
        echo view('templateMhs/footer', $data);
    }
}
