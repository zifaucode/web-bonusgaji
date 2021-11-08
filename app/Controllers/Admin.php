<?php

namespace App\Controllers;

use CodeIgniter\Controller;


class Admin extends BaseController
{

	public function index()
	{

		$data = [
			'isi'  => 'admin/v_admin',
			'title' => 'ADMIN',
		];
		return view('layout/v_sekaligus', $data);
	}


	public function tambah_user()
	{
		if ($this->validate([
			'email' => [
				'label' => 'E-mail',
				'rules' => 'required',
				'errors' => [
					'required' => '{field} Wajib Diisi !!'
				]

			],
			'nama' => [
				'label' => 'Nama',
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

			]
		])) {
			//jika berhasil
			$data = array(
				'nama' => $this->request->getPost('nama'),
				'email' => $this->request->getPost('email'),
				'password' => $this->request->getPost('password'),
				'level' => 2,
				'id_jabatan' => $this->request->getPost('id_jabatan'),
			);
			$this->Admku->tambah_mahasiswaku($data);
			session()->setFlashdata('pesan', 'Pendaftaran Berhasil');
			return redirect()->to(base_url('mahasiswalist'));
		} else {
			//jika gagal
			session()->setFlashdata('errors', \Config\Services::validation()->getErrors());
			return redirect()->to(base_url('mahasiswalist'));
		}
	}

	public function delete($id_user)
	{
		$this->Admku->delete_berkas($id_user);
		session()->setFlashdata('pesan', 'Data Berhasil Dihapus');
		return redirect()->to(base_url('dosenlist'));
	}



	public function edituser($id_user)
	{
		//jika berhasil
		$data = array(
			'id_user' => $id_user,
			'nama' => $this->request->getPost('nama'),
			'email' => $this->request->getPost('email'),
			'password' => $this->request->getPost('password'),
			'id_jabatan' => $this->request->getPost('id_jabatan'),
		);

		$this->Admku->editmhs($data);
		session()->setFlashdata('pesan', 'Data Berhasil Di update');
		return redirect()->to(base_url('mahasiswa/profile'));
	}
}
