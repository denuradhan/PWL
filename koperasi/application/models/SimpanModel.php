<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SimpanModel extends CI_Model
{
    public function getAllSimpan($id = NULL)
    {
        if ($id == null) {
            $this->db->select('simpan.*, anggota.nama');
            $this->db->join('anggota', 'simpan.id_anggota = anggota.id');
            return $this->db->get('simpan')->result_array();
        } else {
            return $this->db->get_where('simpan', ['id_simpan' => $id])->result_array();
        }
    }
    public function addSimpan()
    {
        $data = [
            "id_anggota" => $this->input->post('id', true),
            "nominal" => $this->input->post('nominal', true),
            "tanggal_simpan" => $this->input->post('tanggal', true)
        ];
        $this->db->insert('simpan', $data);
        $query = 'update anggota set saldo = saldo + ' . (int) $this->input->post('nominal') . ' where id = ' . $this->input->post('id');
        $this->db->query($query);
    }

    public function deleteSimpan()
    {
        $this->db->empty_table('simpan');
    }
}

/* End of file SimpanModel.php */
