<?php

namespace App\Controllers;

use App\Models\AuthModel;

class Auth extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->AuthModel = new AuthModel();
    }


    public function login()
    {
        $data = array(
            'title' => 'Login',

        );
        return view('auth/v_login', $data);
    }

    public function login_adm()
    {
        $data = array(
            'title' => 'Login',

        );
        return view('auth/v_loginadm', $data);
    }


    public function cek_login()
    {
        if ($this->validate([
            'email' => [
                'label' => 'email',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]

            ],

            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]

            ],
        ])) {
            //jika berhasil
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->AuthModel->login($email, $password);
            if ($cek) {
                //jika data syncron
                session()->set('log', true);
                session()->set('nama', $cek['nama']);
                session()->set('email', $cek['email']);
                session()->set('level', $cek['level']);
                session()->set('status', $cek['status']);
                session()->set('jabatan', $cek['jabatan']);
                session()->set('id_user', $cek['id_user']);

                return redirect()->to(base_url('Pegawai'));
            } else {

                //jika tidak syncron
                session()->setFlashdata('pesan', 'Login Gagal!, Email Ataau Password Salah');
                return redirect()->to(base_url('auth/login'));
            }
        } else {
            //jika gagal
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login'));
        }
    }




    public function cek_loginadm()
    {
        if ($this->validate([
            'email' => [
                'label' => 'E-mail',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]

            ],

            'password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Wajib Diisi !!'
                ]

            ],
        ])) {
            //jika berhasil
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $cek = $this->AuthModel->loginadm($email, $password);
            if ($cek) {
                //jika data syncron
                session()->set('log', true);
                session()->set('nama', $cek['nama']);
                session()->set('email', $cek['email']);
                session()->set('level', $cek['level']);
                session()->set('id_admin', $cek['id_admin']);


                return redirect()->to(base_url('Admin'));
            } else {

                //jika tidak syncron
                session()->setFlashdata('pesan', 'Login Gagal!, Email Ataau Password Salah');
                return redirect()->to(base_url('auth/login_adm'));
            }
        } else {
            //jika gagal
            session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
            return redirect()->to(base_url('auth/login_adm'));
        }
    }


    public function logout()
    {
        session()->remove('log');
        session()->remove('nama');
        session()->remove('level');
        session()->remove('email');
        session()->remove('id_user');
        session()->remove('id_jabatan');
        session()->setFlashdata('pesan', 'Anda Berhasil Logout');
        return redirect()->to(base_url('auth/login'));
    }


    public function logoutadm()
    {
        session()->remove('log');
        session()->remove('nama');
        session()->remove('level');
        session()->remove('email');
        session()->setFlashdata('pesan', 'Anda Berhasil Logout');
        return redirect()->to(base_url('auth/login_adm'));
    }
}
