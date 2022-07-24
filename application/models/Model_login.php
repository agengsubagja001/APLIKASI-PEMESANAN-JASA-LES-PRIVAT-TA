<?php

class Model_login extends CI_Model
{

    public function val_login()
    {
        $username = set_value('nama');
        $password = set_value('password');

        $result      = $this->db->where('nama', $username)
            ->where('password', $password)
            ->limit(1)
            ->get('akun');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
}
