<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\BonusModel;

class Databonus extends Controller
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
            'isi'         => 'admin/v_databonus',
            'title'     => 'Data Bonus',
            'pegawai' => $this->UserModel->get_pegawai(),
            'bonus' => $this->BonusModel->get_bonus(),
            'bonus2' => $this->BonusModel->get_bonus2(),
            'bonus3' => $this->BonusModel->get_bonus3(),
            'bonus4' => $this->BonusModel->get_bonus4(),
            'bonus5' => $this->BonusModel->get_bonus5(),
        ];
        return view('layout/v_sekaligus', $data);
    }
}
