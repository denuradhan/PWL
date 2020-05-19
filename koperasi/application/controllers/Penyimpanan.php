<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Penyimpanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SimpanModel');
        $this->load->model('AnggotaModel');
    }

    public function index()
    {
        $data['penyimpanan'] = $this->SimpanModel->getAllSimpan();
        $data['title'] = "Penyimpanan - Web Koperasi";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('Penyimpanan/index');
        $this->load->view('template/footer');
    }
    public function tambah()
    {
        $data['anggota'] = $this->AnggotaModel->getAllAnggota();
        $data['title'] = "Web Koperasi";
        $this->form_validation->set_rules('id', 'id', 'required');
        $this->form_validation->set_rules('nominal', 'nominal', 'required|numeric');
        $this->form_validation->set_rules('tanggal', 'tanggal', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('Penyimpanan/tambah');
            $this->load->view('template/footer');
        } else {
            $this->SimpanModel->addSimpan();
            $this->session->set_flashdata('pesan', "Berhasil ditambah");
            redirect('Penyimpanan');
        }
    }
    public function hapus()
    {
        $this->SimpanModel->deleteSimpan();
        $this->session->set_flashdata('pesan', "Berhasil dihapus");
        redirect('Penyimpanan');
    }
}

/* End of file Peyimpanan.php */
