<?php

namespace App\Models;

use CodeIgniter\Model;

class Model_mahasiswa extends Model
{
    protected $primaryKey = 'nim';
    protected $table = 'mahasiswa';
    protected $useTimestamps = true;
    protected $allowedFields = ['nim', 'nama_mahasiswa', 'email', 'password', 'tgl_daftar'];

    //memanggil semua data yang akan ditampilkan pada view
    public function getMahasiswa($nim = false) //paramter $nim secara default false
    {
        //nim false maka akan kembalikan nilai semua data yang terdapat pada table
        if ($nim === false) {
            return $this->findAll();
        } else {
            //selain itu,jika $nim memiliki nilai/value maka kembalikan data berdasarkan value
            return $this->getWhere(['nim' => $nim]);
        }
    }

    //menyimpan databaru ke database
    public function saveMahasiswa($data)
    {
        $simpan = $this->db->table($this->table);
        return $simpan->insert($data);
    }

    public function hapusMahasiswa($nim)
    {
        $proses = $this->db->table($this->table);
        return $proses->delete(['nim' => $nim]);
    }
}
