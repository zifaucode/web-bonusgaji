<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class User extends Controller
{

    public function __construct()
    {
        helper('form');
        $this->UserModel = new UserModel();
    }

    public function index()
    {

        $data = [
            'isi'         => 'admin/v_pegawai',
            'title'     => 'Pegawai',
            'pegawai' => $this->UserModel->get_pegawai(),
        ];
        return view('layout/v_sekaligus', $data);
    }

    public function tambah_pegawai()
    {
        if ($this->validate([
            'nama' => [
                'label' => 'Nama',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]

            ],
            'email' => [
                'label' => 'Email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]

            ]



        ])) {
            //jika berhasil
            $data = array(
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'jabatan' => $this->request->getPost('jabatan'),
                'status' => $this->request->getPost('status'),
                'level' => 2,
            );
            $this->UserModel->tambah_pegawai($data);
            session()->setFlashdata('pesan', 'Tambah Pegawai Berhasil');
            return redirect()->to(base_url('User'));
        } else {
            //jika gagal
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('User'));
        }
    }

    public function editpegawai($id_user)
    {

        //jika berhasil
        $data = array(
            'id_user' => $id_user,
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'jabatan' => $this->request->getPost('jabatan'),
            'status' => $this->request->getPost('status'),
        );
        $this->UserModel->edit_pegawai($data);
        session()->setFlashdata('pesan', 'Data Pegawai Berhasil Di update');
        return redirect()->to(base_url('User'));
    }


    public function delete_pegawai($id_user)
    {
        $this->UserModel->deletepegawai($id_user);
        session()->setFlashdata('pesan', 'Data Pegawai Berhasil Dihapus');
        return redirect()->to(base_url('User'));
    }
}
