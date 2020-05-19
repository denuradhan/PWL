<?php

defined('BASEPATH') or exit('No direct script access allowed');

class BarangModel extends CI_Model
{
    public function getBarang($id = null)
    {
        if ($id == null) {
            return $this->db->get('barang')->result_array();
        } else {
            return $this->db->get_where('barang', ['id' => $id])->row_array();
        }
    }

    public function addBarang($upload)
    {
        $data = [
            "nama_barang" => $this->input->post('nama_barang'),
            "harga" => $this->input->post('harga'),
            "gambar" => $upload['file']['file_name']

        ];
        $this->db->insert('barang', $data);
    }
    public function editBarang($upload)
    {
        $data = [
            "nama_barang" => $this->input->post('nama_barang', true),
            "harga" => $this->input->post('harga', true),
            "gambar" => $upload['file']['file_name']
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('barang', $data);
    }
    public function deleteBarang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('barang');
        $this->_deleteImage($id);
    }

    public function upload()
    {
        $config['upload_path'] = './uploads/barang/';
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }

    private function _deleteImage($id)
    {
        $barang = $this->getBarang($id);
        $filename = $barang['gambar'];
        unlink(FCPATH . "uploads/barang/" . $filename);
    }
}


/* End of fils BarangModel.php */
