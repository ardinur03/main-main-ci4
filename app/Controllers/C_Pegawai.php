<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_Pegawai;

class C_Pegawai extends BaseController
{
    protected $model;
    public function __construct()
    {
        $this->model = new M_Pegawai();
    }

    public function index()
    {
        $data = [
            'title' => 'Pegawai',
            'pegawai' => $this->model->getAllPegawai()
        ];
        return view('pegawai/v_pegawai_display', $data);
    }

    public function new()
    {
        $data = [
            'title' => 'Tambah Pegawai'
        ];
        return view('pegawai/v_pegawai_create', $data);
    }

    public function create()
    {
        if (!$this->validate([
            'nim' => [
                'label' => 'NIM',
                'rules' => 'required|numeric|min_length[9]|max_length[9]|is_unique[pegawai.nim]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'numeric' => '{field} harus berupa angka',
                    'min_length' => '{field} harus berjumlah 9 karakter',
                    'max_length' => '{field} harus berjumlah 9 karakter',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'alpha_space' => '{field} harus berupa huruf'
                ]
            ],
            'gender' => [
                'label' => 'Jenis Kelamin',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'no_telepon' => [
                'label' => 'No Telepon',
                'rules' => 'required|numeric|min_length[11]|max_length[15]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'numeric' => '{field} harus berupa angka',
                    'min_length' => '{field} minimal harus berjumlah 11 karakter',
                    'max_length' => '{field} maximal harus berjumlah 15 karakter'
                ]
            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[pegawai.email]',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'valid_email' => '{field} tidak valid',
                    'is_unique' => '{field} sudah terdaftar'
                ]
            ],
            'pendidikan' => [
                'label' => 'Pendidikan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
        ])) {
            return view('/pegawai/v_pegawai_create', [
                'errors' => $this->validator->getErrors(),
                'title' => 'Tambah Pegawai Error !'
            ]);
        }

        $data_pegawai = $this->request->getVar(['nim', 'nama', 'gender', 'no_telepon', 'email', 'pendidikan']);

        $this->model->createPegawai($data_pegawai);
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan!');
        return redirect()->to('/pegawai');
    }
}
