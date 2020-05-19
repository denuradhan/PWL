<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SimpanAPI_Model extends CI_Model
{
    public function getSimpan($id = NULL)
    {
        $this->db->select('simpan.*, anggota.nama');
        $this->db->join('anggota', 'simpan.id_anggota = anggota.id');
        if ($id == null) {
            return $this->db->get('simpan')->result_array();
        } else {
            return $this->db->get_where('simpan', ['id_anggota' => $id])->result_array();
        }
    }
    public function createSimpan($data)
    {
        $this->db->insert('simpan', $data);
        $query = 'update anggota set saldo = saldo + ' . (int) $this->input->post('nominal') . ' where id = ' . $this->input->post('id_anggota');
        $this->db->query($query);
        return $this->db->affected_rows();
    }
}

/* End of file SimpanModel.php */
