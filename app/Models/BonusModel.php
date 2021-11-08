<?php

namespace App\Models;

use CodeIgniter\Model;

class BonusModel extends Model
{

    public function get_bonus()
    {
        return $this->db->table('bonus')
            ->join('user', 'user.id_user = bonus.id_user', 'left')
            ->orderBy('id_bonus', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function get_bonus2()
    {
        return $this->db->table('bonus_2')
            ->join('user', 'user.id_user = bonus_2.id_user', 'left')
            ->orderBy('id_bonus2', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function get_bonus3()
    {
        return $this->db->table('bonus_3')
            ->join('user', 'user.id_user = bonus_3.id_user', 'left')
            ->orderBy('id_bonus3', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function get_bonus4()
    {
        return $this->db->table('bonus_4')
            ->join('user', 'user.id_user = bonus_4.id_user', 'left')
            ->orderBy('id_bonus4', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function get_bonus5()
    {
        return $this->db->table('bonus_5')
            ->join('user', 'user.id_user = bonus_5.id_user', 'left')
            ->orderBy('id_bonus5', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function get_bonus_pegawai()
    {
        return $this->db->table('bonus')
            ->where('bonus.id_user', session()->get('id_user'))
            ->join('user', 'user.id_user = bonus.id_user', 'left')
            ->orderBy('id_bonus', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function get_bonus2_pegawai()
    {
        return $this->db->table('bonus_2')
            ->where('bonus_2.id_user', session()->get('id_user'))
            ->join('user', 'user.id_user = bonus_2.id_user', 'left')
            ->orderBy('id_bonus2', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function get_bonus3_pegawai()
    {
        return $this->db->table('bonus_3')
            ->where('bonus_3.id_user', session()->get('id_user'))
            ->join('user', 'user.id_user = bonus_3.id_user', 'left')
            ->orderBy('id_bonus3', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function get_bonus4_pegawai()
    {
        return $this->db->table('bonus_4')
            ->where('bonus_4.id_user', session()->get('id_user'))
            ->join('user', 'user.id_user = bonus_4.id_user', 'left')
            ->orderBy('id_bonus4', 'DESC')
            ->get()
            ->getResultArray();
    }

    public function get_bonus5_pegawai()
    {
        return $this->db->table('bonus_5')
            ->where('bonus_5.id_user', session()->get('id_user'))
            ->join('user', 'user.id_user = bonus_5.id_user', 'left')
            ->orderBy('id_bonus5', 'DESC')
            ->get()
            ->getResultArray();
    }


    public function input_bns($data)
    {
        $this->db->table('bonus')->insert($data);
    }

    public function input_bns2($data2)
    {
        $this->db->table('bonus_2')->insert($data2);
    }

    public function input_bns3($data3)
    {
        $this->db->table('bonus_3')->insert($data3);
    }

    public function input_bns4($data4)
    {
        $this->db->table('bonus_4')->insert($data4);
    }

    public function input_bns5($data5)
    {
        $this->db->table('bonus_5')->insert($data5);
    }





    public function delete_bns($id_bonus)
    {
        return $this->db->table('bonus')->delete(array('id_bonus' => $id_bonus));
    }

    public function delete_bns2($id_bonus2)
    {
        return $this->db->table('bonus_2')->delete(array('id_bonus2' => $id_bonus2));
    }

    public function delete_bns3($id_bonus3)
    {
        return $this->db->table('bonus_3')->delete(array('id_bonus3' => $id_bonus3));
    }

    public function delete_bns4($id_bonus4)
    {
        return $this->db->table('bonus_4')->delete(array('id_bonus4' => $id_bonus4));
    }

    public function delete_bns5($id_bonus5)
    {
        return $this->db->table('bonus_5')->delete(array('id_bonus5' => $id_bonus5));
    }
}
