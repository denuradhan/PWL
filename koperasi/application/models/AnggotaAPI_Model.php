<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AnggotaAPI_Model extends CI_Model
{
    public function getAnggota($id = null)
    {
        $this->db->where('level', 'user');
        if ($id === null) {
            return $this->db->get('anggota')->result_array();
        } else {
            return $this->db->get_where('anggota', ['id' => $id])->result_array();
        }
    }
    public function getOrdered($id = null)
    {
        $this->db->where('level', 'user');
        $this->db->where('isActive', 'Y');
        $this->db->order_by('saldo', 'desc');

        if ($id === null) {
            return $this->db->get('anggota')->result_array();
        } else {
            return $this->db->get_where('anggota', ['id' => $id])->result_array();
        }
    }
    public function login($uname, $pass)
    {
        return $this->db->get_where('anggota', ['username' => $uname, 'password' => $pass, 'isActive' => 'Y'])->result();
    }
}


/* End of file AnggotaAPI_Model.php */
