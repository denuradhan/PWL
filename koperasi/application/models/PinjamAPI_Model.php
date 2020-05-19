<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PinjamAPI_Model extends CI_Model
{
    public function getPinjam($id = NULL)
    {
        $this->db->select('pinjam.*, anggota.nama');
        $this->db->join('anggota', 'pinjam.id_anggota = anggota.id');
        if ($id == null) {
            return $this->db->get('pinjam')->result_array();
        } else {
            return $this->db->get_where('pinjam', ['id_anggota' => $id])->result_array();
        }
    }
}

/* End of file SimpanModel.php */
