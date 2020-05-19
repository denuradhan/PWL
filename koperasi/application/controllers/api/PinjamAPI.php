<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class PinjamAPI extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PinjamAPI_Model', 'pinjam');
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $pinjam = $this->pinjam->getPinjam();
        } else {
            $pinjam = $this->pinjam->getPinjam($id);
        }
        if ($pinjam) {
            $this->response([
                'status' => true,
                'data' => $pinjam
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
