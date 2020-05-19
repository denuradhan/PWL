<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AnggotaModel extends CI_Model
{

    public function getAllAnggota($id = null)
    {
        if ($id == null) {
            $this->db->where('level', 'user');
            $this->db->where('isActive', 'Y');

            return $this->db->get('anggota')->result_array();
        } else {
            return $this->db->get_where('anggota', ['id' => $id])->result_array();
        }
    }

    public function getAnggotaByIdUser($id_user)
    {
        return $this->db->get_where('anggota', ['id' => $id_user])->result_array();
    }


    public function addAnggota()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "gender" => $this->input->post('gender', true),
            "alamat" => $this->input->post('alamat', true),
            "nohp" => $this->input->post('nohp', true),
            "username" => $this->input->post('username', true),
            "password" => md5($this->input->post('password', true))

        ];
        $this->db->insert('anggota', $data);
    }


    public function deletePassiveUser()
    {
        $id = $this->input->post('varAkun');
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

    public function getPassiveUser()
    {
        return $this->db->get_where('anggota', ["isActive" => "N"])->result_array();
    }

    public function activateUser($id)
    {
        $this->db->where('id', $id);
        $this->db->update('anggota', ['isActive' => 'Y']);
    }

    public function deleteAnggota($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('anggota');
    }

    public function editAnggota()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "gender" => $this->input->post('gender', true),
            "alamat" => $this->input->post('alamat', true),
            "nohp" => $this->input->post('nohp', true)
        ];
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('anggota', $data);
    }


    public function getAnggotaById($id)
    {
        return $this->db->get_where('anggota', ['id' => $id])->row_array();
    }

    public function getPinjamByIdUser($id_user)
    {
        foreach ($this->getAnggotaByIdUser($id_user) as $a) {
            $this->db->select('pinjam.*, anggota.nama, anggota.id');
            $this->db->join('anggota', 'pinjam.id_anggota = anggota.id');
            $this->db->where('id_anggota', $a['id']);
            return $this->db->get('pinjam')->result_array();
        }
    }

    public function getSimpanByIdUser($id_user)
    {
        foreach ($this->getAnggotaByIdUser($id_user) as $a) {
            $this->db->select('simpan.*, anggota.nama, anggota.id');
            $this->db->join('anggota', 'simpan.id_anggota = anggota.id');
            $this->db->where('id_anggota', $a['id']);
            return $this->db->get('simpan')->result_array();
        }
    }
}
    
    /* End of file AnggotaModel.php */
