<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    public function auth($uname, $pass)
    {
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->where(['username' => $uname, 'password' => $pass]);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return false;
        } else {
            return $query->result();
        }
    }
}

    /* End of file ModelName.php */
