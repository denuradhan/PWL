<?php

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';


class SimpanAPI extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SimpanAPI_Model', 'simpan');
    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $simpan = $this->simpan->getSimpan();
        } else {
            $simpan = $this->simpan->getSimpan($id);
        }
        if ($simpan) {
            $this->response([
                'status' => true,
                'data' => $simpan
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => true,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function index_post()
    {
        $data = [
            'id_anggota' => $this->post('id_anggota'),
            'nominal' => $this->post('nominal'),
            'tanggal_simpan' => $this->post('tanggal_simpan')
        ];
        if ($this->simpan->createSimpan($data) > 0) {
            $this->response([
                'status' => true,
                'message' => 'new penyimpanan has been created.'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status' => false,
                'message' => 'failed to create new data'
            ], REST_Controller::HTTP_CREATED);
        }
    }
}
/* End of file AnggotaAPI.php */
