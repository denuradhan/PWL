<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Peminjaman extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PinjamModel');
        $this->load->model('AnggotaModel');
    }

    public function index()
    {
        $data['peminjaman'] = $this->PinjamModel->getAllPinjam();
        $data['title'] = "Peminjaman - Web Koperasi";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('Peminjaman/index');
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
            $this->load->view('Peminjaman/tambah');
            $this->load->view('template/footer');
        } else {
            $this->PinjamModel->addPinjam();
            $this->session->set_flashdata('pesan', "Berhasil ditambah");
            redirect('Peminjaman');
        }
    }

    public function hapus()
    {
        $this->PinjamModel->deletePinjam();
        $this->session->set_flashdata('pesan', "Berhasil dihapus");

        redirect('Peminjaman');
    }
}

/* End of file Peminjaman.php */
