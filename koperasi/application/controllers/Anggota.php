<?php

use Dompdf\Adapter\PDFLib;

defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AnggotaModel');
    }
    public function laporan_pdf()
    {
        $data['data'] = $this->AnggotaModel->getAllAnggota();
        $this->load->library('Pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Data-Anggota.pdf";
        $this->pdf->load_view('laporan_pdf', $data);
    }
    public function about()
    {
        $data['title'] = "about - Web Koperasi";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('Anggota/about');
        $this->load->view('template/footer');
    }
    public function index()
    {
        $data['anggota']  = $this->AnggotaModel->getAllAnggota();
        $data['title'] = "Anggota - Web Koperasi";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('Anggota/index');
        $this->load->view('template/footer');
    }

    public function tambah()
    {

        $data['anggota']  = $this->AnggotaModel->getAllAnggota();

        $data['title'] = "Web Koperasi";
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('nohp', 'nohp', 'required|numeric');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('Anggota/tambah');
            $this->load->view('template/footer');
        } else {
            $this->AnggotaModel->addAnggota();
            $this->session->set_flashdata('pesan', "Berhasil ditambah");
            redirect('Anggota');
        }
    }

    public function hapus($id)
    {
        $this->AnggotaModel->deleteAnggota($id);
        $this->session->set_flashdata('pesan', "Berhasil dihapus");
        redirect('Anggota');
    }

    public function hapusPassive()
    {
        $this->AnggotaModel->deletePassiveUser();
        $this->session->set_flashdata('pesan', "Berhasil dihapus");
        redirect('Anggota');
    }

    public function edit($id)
    {
        $data['anggota']  = $this->AnggotaModel->getAnggotaById($id);
        $data['title'] = "Web Koperasi";
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('nohp', 'nohp', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('Anggota/edit');
            $this->load->view('template/footer');
        } else {
            $this->AnggotaModel->editAnggota();
            $this->session->set_flashdata('pesan', "Berhasil diedit");
            redirect('Anggota');
        }
    }
    public function konfirmasi()
    {
        $data['anggota']  = $this->AnggotaModel->getPassiveUser();
        $data['title'] = "Konfirmasi - Web Koperasi";
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('Anggota/konfirmasi');
        $this->load->view('template/footer');
    }
    public function aktivasi($id)
    {
        $data['anggota']  = $this->AnggotaModel->getAnggotaById($id);
        $this->AnggotaModel->activateUser($id);
        $this->session->set_flashdata('pesan', "Berhasil dikonfirmasi");
        redirect('Anggota');
    }
}

/* End of file Anggota.php */
