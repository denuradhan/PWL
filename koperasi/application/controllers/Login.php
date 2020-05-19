<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
        $this->load->model('AnggotaModel');
    }

    public function index()
    {
        $data['title'] = "Login - Web Koperasi";
        $this->load->view('Login/header', $data);
        $this->load->view('Login/index');
        // $this->load->view('template/footer');
    }


    public function auth()
    {
        $uname = htmlspecialchars($this->input->post('varUsername'));
        $pass = htmlspecialchars(md5($this->input->post('varPassword')));
        $cekLogin = $this->LoginModel->auth($uname, $pass);

        if ($cekLogin) {
            foreach ($cekLogin as $row) {
                $this->session->set_userdata('id', $row->id);
                $this->session->set_userdata('user', $row->username);
                if ($row->isActive == 'N') {
                    $this->session->set_flashdata('pesan', 'Username belum dikonfirmasi admin.');
                    redirect('Login');
                } else {
                    if ($row->level == 'admin') {
                        redirect('Anggota');
                    } else {
                        redirect('User');
                    }
                }
            }
        } else {
            $this->session->set_flashdata('pesan', 'Username atau Password salah.');
            redirect('Login');
        }
    }


    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Login');
    }

    public function register()
    {
        $data['title'] = "Register -  Web Koperasi";

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('nohp', 'nohp', 'required|numeric');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('password2', 'password2', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Login/header', $data);
            $this->load->view('Login/register');
        } else {
            if ($this->input->post('password') == $this->input->post('password2')) {
                $this->AnggotaModel->addAnggota();
                $this->session->set_flashdata('pesan', "Akun dibuat, Silahkan konfirmasi akun ke Admin Koperasi");
                redirect('Login');
            } else {
                $this->session->set_flashdata('pesan', "konfirmasi password salah");
                redirect('Login/register');
            }
        }
    }
}

/* End of file Controllername.php */
