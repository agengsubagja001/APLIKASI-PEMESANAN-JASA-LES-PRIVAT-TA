<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reviews extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('role_id') != '3') {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Anda Belum Login!
				 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				 </button>
				</div>');
			redirect('auth/form_login/login');
		}
	}

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
		$data['showriviewsles'] = $this->model_dashboard->jml_riviewsles();
		$data['showrequestsiswa'] = $this->model_dashboard->jml_requestsiswa();

		$data['show_request'] = $this->model_pengajar->reviews()->result();
		$data['showprofil'] = $this->model_pengajar->Show_profilpengajar()->result();
		$this->load->view('pengajar/review', $data);
	}

	public function reviews_les($id_pesanan)
	{

		$data['showriviewsles'] = $this->model_dashboard->jml_riviewsles();
		$data['showrequestsiswa'] = $this->model_dashboard->jml_requestsiswa();

		$del = array('id_pesanan' => $id_pesanan);
		$data['showprofil'] = $this->model_pengajar->Show_profilpengajar()->result();

		$data['val_pengajar'] = $this->model_pengajar->pemberian_reviews($del, 'pemesanan')->result();
		$data['showprofil'] = $this->model_pengajar->Show_profilpengajar()->result();
		$this->session->set_flashdata('success', 'Action Completed');
		$this->load->view('pengajar/reviews_les', $data);
	}

	// untuk menambahkan reviews
	public function upload_les()
	{


		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
		$id_reviews = substr(str_shuffle($permitted_chars), 0, 6);


		$id_pengajar = $this->input->post('id_pengajar');
		$id_siswa = $this->input->post('id_siswa');
		$pertemuan = $this->input->post('pertemuan');
		$hasil_reviews = $this->input->post('reviews');
		$tanggal = $this->input->post('tanggal');

		$data = array(

			'id_reviews'         => $id_reviews,
			'id_pengajar'        => $id_pengajar,
			'id_siswa'           => $id_siswa,
			'pertemuan'          => $pertemuan,
			'hasil_review'       => $hasil_reviews,
			'tanggal'            => $tanggal

		);



		$this->model_pengajar->upload_reviews($data, 'review_les');
		$this->session->set_flashdata('success', 'Action Completed');
		// var_dump($id_pengajar);
		redirect('pengajar/reviews');
	}
}
