<?php

namespace App\Models;

use CodeIgniter\Model as CodeIgniterModel;
use PHPUnit\Framework\MockObject\Stub\ReturnCallback;

class M_Mahasiswa extends CodeIgniterModel
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $returnType = 'array';

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function getAll()
    {
        $data = $this->db->query("SELECT * FROM {$this->table}");
        $this->db->close();
        return $data->getResultArray();
    }

    public function mahasiswa_store($data)
    {
        return $this->db->query("INSERT INTO {$this->table} (nim, nama, umur) VALUES ('{$data['nim']}', '{$data['nama']}', '{$data['umur']}')");
    }

    public function getMahasiswa($nim)
    {
        $data = $this->db->query("SELECT * FROM {$this->table} WHERE nim = '{$nim}'");
        $this->db->close();
        return $data->getRowArray();
    }
}
