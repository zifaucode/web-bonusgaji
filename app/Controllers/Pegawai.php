<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\BonusModel;

class Pegawai extends Controller
{
	public function __construct()
	{
		helper('form');
		$this->UserModel = new UserModel();
		$this->BonusModel = new BonusModel();
	}

	public function index()
	{

		$data = [
			'isi' 		=> 'pegawai/v_home',
			'title' 	=> 'mahasiswa',
			'bonus' => $this->BonusModel->get_bonus_pegawai(),
			'bonus2' => $this->BonusModel->get_bonus2_pegawai(),
			'bonus3' => $this->BonusModel->get_bonus3_pegawai(),
			'bonus4' => $this->BonusModel->get_bonus4_pegawai(),
			'bonus5' => $this->BonusModel->get_bonus5_pegawai(),
		];
		return view('layoutusr/v_sekaligususr', $data);
	}
}
