<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Pegawai extends Model
{
    protected $table            = 'pegawai';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;

    public function getAllPegawai()
    {
        return $this->db->query("SELECT * FROM {$this->table}")->getResultArray();
    }

    public function createPegawai($data)
    {
        return $this->db->query("INSERT INTO {$this->table} (nim, nama, gender, no_telepon, email, pendidikan) 
        VALUES ('{$data['nim']}', '{$data['naa']}', '{$data['gender']}', '{$data['no_telepon']}','{$data['email']}', '{$data['pendidikan']}')");
    }
}
