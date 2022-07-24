<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Halaman_utama extends CI_Controller
{
	// public function __construct()
	// {
	// 	parent::__construct();

	// 	if ($this->session->userdata('role_id') != '1') {
	// 		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
	// 			 Anda Belum Login!
	// 			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 			    <span aria-hidden="true">&times;</span>
	// 			 </button>
	// 			</div>');
	// 		redirect('dashboard');
	// 	} else {
	// 		redirect('dashboard');
	// 	}
	// }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['show_datapengajar'] = $this->model_pengajar->Show_datapengajar()->result();
		$this->load->view('dashboard', $data);
	}


	public function search()
	{
		
		$keyword = $this->input->post('keyword');
		$data['show_datapengajar'] = $this->model_pengajar->Show_datapengajar()->result();
		$data['show_datapengajar'] = $this->model_pengajar->get_keyword($keyword);
		$this->load->view('dashboard', $data);
		// $data['show_datapengajar'] = $this->model_pengajar->Show_datapengajar()->result();

		// $data['keyword'] = $this->input->get('keyword');
		// $this->load->model('article_model');

		// $data['search_result'] = $this->article_model->search($data['keyword']);

		// $this->load->view('dashboard', $data);
	}
}
