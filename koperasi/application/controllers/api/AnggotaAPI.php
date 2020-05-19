<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class AnggotaAPI extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AnggotaAPI_Model', 'anggota');
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $anggota = $this->anggota->getAnggota();
        } else {
            $anggota = $this->anggota->getAnggota($id);
        }
        if ($anggota) {
            $this->response([
                'status' => true,
                'data' => $anggota
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => true,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function login_post()
    {
        $uname = $this->post('username');
        $pass = $this->post('password');
        if (!empty($uname) && !empty($pass)) {
            $user = $this->anggota->login($uname, $pass);
            if ($user) {
                $this->response([
                    'status' => true,
                    'data' => $user
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => false,
                    'data' => 'id not found'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        } else {
            $this->response([
                'status' => false,
                'message' => 'provide a data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}

/* End of file AnggotaAPI.php */
