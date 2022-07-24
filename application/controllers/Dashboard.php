<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		error_reporting(0);
		$this->load->model('model_pengajar');
	}

	public function index()
	{
		$data['show_datapengajar'] = $this->model_pengajar->Show_datapengajar()->result();
		$this->load->view('dashboard2', $data);
	}


	public function search()
	{

		$keyword = $this->input->post('keyword');
		$data['show_datapengajar'] = $this->model_pengajar->Show_datapengajar()->result();
		$data['show_datapengajar'] = $this->model_pengajar->get_keyword($keyword);
		$this->load->view('dashboard2', $data);
	}

	function fetch()
	{
		$output = '';
		$query = '';
		$this->load->model('model_pengajar');
		if ($this->input->post('query')) {
			$query = $this->input->post('query');
		}
		$show_datapengajar = $this->model_pengajar->fetch_data($query);

		if ($show_datapengajar->num_rows() > 0) {
			foreach ($show_datapengajar->result() as $pjr) {
				$output .= '

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
					  <a href="' . base_url() . 'detail_pengajar2?id=' . $pjr->id_pengajar . '">
						<div class="member">
						  <div class="member-img">
							<img src="' . base_url() . 'assets/foto_pengajar/' . $pjr->gambar  . '" class="img-fluid" alt="">
						  </div>
						  <div class="member-info">
							<h4 style="text-transform: capitalize;">' . $pjr->nama_pengajar . '</h4>
							<span style="text-transform: uppercase;">' . $pjr->bidang . '</span>
							<p style="text-transform: capitalize;">' . $pjr->alamat . '</p>
						  </div>
						</div>
					  </a>
					</div>  
				';
			}
		} else {
			$output .= '<div class="alert alert-danger d-flex align-items-center" role="alert">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
							<path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
							</svg>
							<div>
							Data Pengajar yang anda cari tidak ada
							</div>
						</div>';
		}
		// $output .= 'www';
		echo $output;
	}
}
