<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PinjamModel extends CI_Model
{

    public function getAllPinjam($id = NULL)
    {

        if ($id == null) {
            $this->db->select('pinjam.*, anggota.nama, anggota.id');
            $this->db->join('anggota', 'pinjam.id_anggota = anggota.id');

            return $this->db->get('pinjam')->result_array();
        } else {
            return $this->db->get_where('pinjam', ['id_pinjam' => $id])->result_array();
        }
    }
    public function addPinjam()
    {
        $data = [
            "id_anggota" => $this->input->post('id', true),
            "nominal" => $this->input->post('nominal', true),
            "tanggal_pinjam" => $this->input->post('tanggal', true)
        ];
        $this->db->insert('pinjam', $data);
        $query = 'update anggota set saldo = saldo - ' . (int) $this->input->post('nominal') . ' where id = ' . $this->input->post('id');
        $this->db->query($query);
    }
    public function deletePinjam()
    {
        $this->db->empty_table('pinjam');
    }
}

/* End of file PinjamModel.php */
