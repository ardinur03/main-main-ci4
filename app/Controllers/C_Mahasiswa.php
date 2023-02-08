<?php

namespace App\Controllers;

use App\Models\M_Mahasiswa;

class C_Mahasiswa extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new M_Mahasiswa();
    }

    public function index()
    {
        $data =  [
            'name' => 'Muhamad Ardi Nur Insan',
            'title' => 'Mahasiswa'
        ];
        return view('mahasiswa/index', $data);
    }

    public function display()
    {
        $data = [
            'mahasiswa' => $this->model->getAll(),
            'title' => 'Mahasiswa'
        ];
        return view('mahasiswa/v_mahasiswa_display', $data);
    }

    public function detail($nim)
    {
        $data = [
            'mahasiswa' => $this->model->getMahasiswa($nim),
            'title' => 'Detail Mahasiswa'
        ];
        return view('mahasiswa/v_mahasiswa_detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Mahasiswa'
        ];
        return view('mahasiswa/v_mahasiswa_create', $data);
    }

    public function store()
    {
        if (!$this->validate([
            'nim' => [
                'label' => 'NIM',
                'rules' => 'required|numeric|min_length[9]|max_length[9]|is_unique[mahasiswa.nim]',
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
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi'
                ]
            ],
            'umur' => [
                'label' => 'Umur',
                'rules' => 'required|numeric',
                'errors' => [
                    'required' => '{field} harus diisi',
                    'numeric' => '{field} harus berupa angka'
                ]
            ]
        ])) {
            return view('/mahasiswa/v_mahasiswa_create', [
                'errors' => $this->validator->getErrors(),
                'title' => 'Store Mahasiswa Error !'
            ]);
        }
        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'umur' => $this->request->getPost('umur')
        ];

        $this->model->mahasiswa_store($data);
        return redirect()->to('/mahasiswa');
    }
}
