<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Request extends CI_Controller
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

		// $data['show_request'] = $this->model_pengajar->show_requestsiswa();
		$data['show_request'] = $this->model_pengajar->cek()->result();
		// echo var_dump($data) . "<br>";
		// $data['show_request'] = $this->model_pengajar->Show_datarequest()->result();
		$data['showprofil'] = $this->model_pengajar->Show_profilpengajar()->result();
		$this->load->view('pengajar/request', $data);
	}

	public function validasi_les($id_pesanan)
	{
		// untuk menampilkan notif story
		// $data['notif_story'] = $this->model_dashboardd->notif_story();

		$data['showriviewsles'] = $this->model_dashboard->jml_riviewsles();
		$data['showrequestsiswa'] = $this->model_dashboard->jml_requestsiswa();


		$del = array('id_pesanan' => $id_pesanan);
		$data['showprofil'] = $this->model_pengajar->Show_profilpengajar()->result();
		$data['val_pengajar'] = $this->model_pengajar->validasi_les_siswa($del, 'pemesanan')->result();
		$this->session->set_flashdata('success', 'Action Completed');
		$this->load->view('pengajar/validasiles', $data);
	}

	// uplode siswa tervalidasi
	public function update_les()
	{
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
		$id_pembayaran = substr(str_shuffle($permitted_chars), 0, 6);

		$statusp = 'Belum Bayar';
		$id_pemesanan = $this->input->post('id_pesanan');


		$id_siswa = $this->input->post('id_siswa');
		$id_pengajar = $this->input->post('id_pengajar');
		$id_pesanan = $this->input->post('id_pesanan');
		$status = $this->input->post('status');
		$tanggal = $this->input->post('tanggal');

		$tanggal_validasi = date("Y-m-d H:i:s");

		$data = array(
			'statuss'       => $status,
			'id_siswa'       => $id_siswa,
			'id_pengajar'    => $id_pengajar,
			'create_ate'    => $tanggal,
			'update_ate'    => $tanggal_validasi,
		);

		$where = array(
			'id_pesanan' => $id_pesanan
		);

		$data2 = array(
			'id_pembayaran'  		=> $id_pembayaran,
			'id_siswa'       		=> $id_siswa,
			'id_pengajar'    		=> $id_pengajar,
			'id_pesanan'   		    => $id_pemesanan,
			'status'         		=> $statusp,
			// 'foto_pembayaran'       => $id_pengajar
			// 'create_ate'            => $tanggal

			// 'update_ate'    => $tanggal_validasi,
		);

		$this->model_pengajar->update_datales($where, $data, 'pemesanan');

		$this->model_pengajar->upload_pembayaran($data2, 'pembayaran');
		$this->session->set_flashdata('success', 'Action Completed');
		redirect('pengajar/request');
	}
}
