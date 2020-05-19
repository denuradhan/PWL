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
            $anggota = $this->anggota->getUser();
        } else {
            $anggota = $this->anggota->getUser($id);
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
}

/* End of file AnggotaAPI.php */
