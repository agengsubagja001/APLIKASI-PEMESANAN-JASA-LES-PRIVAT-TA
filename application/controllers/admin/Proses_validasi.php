<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Proses_validasi extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('role_id') != '1') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Anda Belum Login!
				 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				 </button>
				</div>');
			redirect('auth/form_login/login');
		}
	}


    public function index()
    {
        global $id_pengajar;
        $id_pengajar = $_GET['id'];

        $this->load->model('Model_pengajar');

        $data['val_pengajar'] = $this->model_pengajar->validasi_pengajar()->result();
        $this->load->view('admin/proses_validasi', $data);
    }
}
