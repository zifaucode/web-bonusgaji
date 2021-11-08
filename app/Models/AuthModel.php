<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{

    public function login($email, $password)
    {
        return $this->db->table('user')->where([
            'email' => $email,
            'password' => $password
        ])->get()->getRowArray();
    }

    public function loginadm($email, $password)
    {
        return $this->db->table('admin')->where([
            'email' => $email,
            'password' => $password
        ])->get()->getRowArray();
    }
}
