<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('BarangModel');
    }

    public function index()
    {
        $data['barang'] = $this->BarangModel->getBarang();
        $data['title'] = "Barang - Web Koperasi";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('Barang/index');
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['barang'] = $this->BarangModel->getBarang();
        $data['title'] = "Web Koperasi";
        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('Barang/tambah');
            $this->load->view('template/footer');
        } else {
            $upload = $this->BarangModel->upload();
            if ($upload['result'] == 'success') {
                $this->BarangModel->addBarang($upload);
                $this->session->set_flashdata('pesan', "Berhasil ditambah");
                redirect('Barang');
            } else {
                echo $upload['error'];
            }
        }
    }
    public function hapus($id)
    {
        $this->BarangModel->deleteBarang($id);
        $this->session->set_flashdata('pesan', "Berhasil dihapus");
        redirect('Barang');
    }
    public function edit($id)
    {
        $data['barang'] = $this->BarangModel->getBarang($id);
        $data['title'] = "Web Koperasi";
        $this->form_validation->set_rules('nama_barang', 'nama_barang', 'required');
        $this->form_validation->set_rules('harga', 'harga', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('Barang/edit');
            $this->load->view('template/footer');
        } else {
            $upload = $this->BarangModel->upload();
            if ($upload['result'] == 'success') {
                $this->BarangModel->editBarang($upload);
                $this->session->set_flashdata('pesan', "Berhasil diedit");
                redirect('Barang');
            } else {
                echo $upload['error'];
            }
        }
    }
}
