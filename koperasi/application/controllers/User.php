<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('AnggotaModel');
        $this->load->model('SimpanModel');
        $this->load->model('PinjamModel');
    }

    public function index()
    {
        $data['title'] = "Dashboard - Web Koperasi";
        $data['anggota'] = $this->AnggotaModel->getAnggotaByIdUser($this->session->userdata('id'));
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebarUser');
        $this->load->view('Anggota/user');
        $this->load->view('template/footer');
    }

    public function pinjam()
    {
        $data['title'] = "Peminjaman - Web Koperasi";
        $data['anggota'] = $this->AnggotaModel->getAnggotaByIdUser($this->session->userdata('id'));
        $data['pinjam'] = $this->AnggotaModel->getPinjamByIdUser($this->session->userdata('id'));
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebarUser');
        $this->load->view('Anggota/pinjam');
        $this->load->view('template/footer');
    }

    public function simpan()
    {
        $data['title'] = "Penyimpanan - Web Koperasi";
        $data['anggota'] = $this->AnggotaModel->getAnggotaByIdUser($this->session->userdata('id'));
        $data['simpan'] = $this->AnggotaModel->getSimpanByIdUser($this->session->userdata('id'));
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebarUser');
        $this->load->view('Anggota/simpan');
        $this->load->view('template/footer');
    }
}

/* End of file User.php */
