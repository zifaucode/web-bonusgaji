<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    public function get_pegawai()
    {
        return $this->db->table('user')->orderBy('id_user', 'DESC')->get()->getResultArray();
    }


    public function tambah_pegawai($data)
    {
        $this->db->table('user')->insert($data);
    }

    public function edit_pegawai($data)
    {
        return $this->db->table('user')
            ->where('id_user', $data['id_user'])
            ->update($data);
    }


    public function deletepegawai($id_user)
    {
        return $this->db->table('user')->delete(array('id_user' => $id_user));
    }
}
