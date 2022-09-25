<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Model_mahasiswa;

class Daftar extends Controller
{

    public function index()
    {
        //include helper form
        helper(['form', 'url']);
        $data['title'] = 'Daftar Akun';

        echo view('user/header', $data);
        echo view('user/daftar_akun');
        echo view('user/footer', $data);
    }

    public function tambahUser()
    {
        $request = \Config\Services::request();
        //include helper form
        helper(['form', 'url']);
        //set rules validation form
        $aturan = [
            'nim'          => 'required|min_length[3]|max_length[10]',
            'nama_mahasiswa' => 'required|min_length[6]|max_length[20]',
            'email'         => 'required|valid_email|is_unique[mahasiswa.email]',
            'password' => 'required|min_length[6]|max_length[200]',
            'confpassword'  => 'matches[password]'
        ];

        if ($this->validate($aturan)) {
            $model = new Model_mahasiswa;
            $data = [
                'nim'          => $request->getVar('nim'),
                'nama_mahasiswa' => $request->getVar('nama_mahasiswa'),
                'email'         => $request->getVar('email'),
                'password'      => password_hash($request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $model->saveMahasiswa($data);
            session()->setFlashdata('success', 'Register Berhasil');
            return redirect()->to('/user');
        } else {
            $data['validation'] = $this->validator;
            echo view('user/header', $data);
            echo view('user/daftar_akun', $data);
            echo view('user/footer', $data);
        }
    }

    //melakukan autentifikasi dan men set variable session jika autentifikasi valid
    public function login()
    {
        $request = \Config\Services::request();
        $session = session();
        $model = new Model_mahasiswa();
        $email = $request->getVar('email');
        $password = $request->getVar('password');
        $data = $model->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'nim'       => $data['nim'],
                    'nama_mahasiswa'     => $data['nama_mahasiswa'],
                    'email'    => $data['email'],
                    'login'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/user/dataMhs');
            } else {
                $session->setFlashdata('popup',  'Password Salah!!!');
                return redirect()->to('/user');
            }
        } else {
            $session->setFlashdata('popup', 'Email atau Akun tidak ditemukan !!!');
            return redirect()->to('/user');
        }
    }

    //menghancurkan variable session
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('user');
    }

    public function hapus($nim)
    {
        $model = new Model_mahasiswa();
        $model->hapusMahasiswa($nim);
        return redirect()->to('/user');
    }
}
