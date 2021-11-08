<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\BonusModel;

class Bonus extends Controller
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
            'isi'         => 'admin/v_bonus',
            'title'     => 'Bonus',
            'pegawai' => $this->UserModel->get_pegawai(),
            'bonus' => $this->BonusModel->get_bonus(),
            'bonus2' => $this->BonusModel->get_bonus2(),
            'bonus3' => $this->BonusModel->get_bonus3(),
            'bonus4' => $this->BonusModel->get_bonus4(),
            'bonus5' => $this->BonusModel->get_bonus5(),
        ];
        return view('layout/v_sekaligus', $data);
    }


    public function input_bonus()
    {

        //jika berhasil
        $data = array(
            'id_user' => $this->request->getPost('id_user'),
            'hasilbonus' => $this->request->getPost('hasilbonus'),
        );
        $this->BonusModel->input_bns($data);

        $data2 = array(
            'id_user' => $this->request->getPost('id_user2'),
            'hasilbonus2' => $this->request->getPost('hasilbonus2'),
        );
        $this->BonusModel->input_bns2($data2);

        $data3 = array(
            'id_user' => $this->request->getPost('id_user3'),
            'hasilbonus3' => $this->request->getPost('hasilbonus3'),
        );
        $this->BonusModel->input_bns3($data3);

        $data4 = array(
            'id_user' => $this->request->getPost('id_user4'),
            'hasilbonus4' => $this->request->getPost('hasilbonus4'),
        );
        $this->BonusModel->input_bns4($data4);

        $data5 = array(
            'id_user' => $this->request->getPost('id_user5'),
            'hasilbonus5' => $this->request->getPost('hasilbonus5'),
        );
        $this->BonusModel->input_bns5($data5);
        session()->setFlashdata('pesan', 'Data Bonus Berhasil Di Tambahkan');
        return redirect()->to(base_url('Bonus'));
    }


    public function delete_bonus($id_bonus)
    {
        $this->BonusModel->delete_bns($id_bonus);
        session()->setFlashdata('pesan', 'Data Bonus Berhasil Dihapus');
        return redirect()->to(base_url('Databonus'));
    }

    public function delete_bonus2($id_bonus2)
    {
        $this->BonusModel->delete_bns2($id_bonus2);
        session()->setFlashdata('pesan', 'Data Bonus Berhasil Dihapus');
        return redirect()->to(base_url('Databonus'));
    }

    public function delete_bonus3($id_bonus3)
    {
        $this->BonusModel->delete_bns3($id_bonus3);
        session()->setFlashdata('pesan', 'Data Bonus Berhasil Dihapus');
        return redirect()->to(base_url('Databonus'));
    }

    public function delete_bonus4($id_bonus4)
    {
        $this->BonusModel->delete_bns4($id_bonus4);
        session()->setFlashdata('pesan', 'Data Bonus Berhasil Dihapus');
        return redirect()->to(base_url('Databonus'));
    }

    public function delete_bonus5($id_bonus5)
    {
        $this->BonusModel->delete_bns5($id_bonus5);
        session()->setFlashdata('pesan', 'Data Bonus Berhasil Dihapus');
        return redirect()->to(base_url('Databonus'));
    }
}
