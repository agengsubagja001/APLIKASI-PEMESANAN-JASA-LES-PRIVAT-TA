<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembayaran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('role_id') != '2') {
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
		// $data['statusbayar'] = $this->pembayaran->status_pembayaran();
		$data['show_pembayaran'] = $this->model_pembayaran->show_pembayaran()->result();
		$this->load->view('siswa/pembayaran', $data);
	}

	public function aksi_pembayaran($id_pembayaran)
	{


		$del = array('id_pembayaran' => $id_pembayaran);

		$data['val_siswa'] = $this->model_pembayaran->proses_pembayaran($del, 'pembayaran')->result();

		// $data['show_pembayaran'] = $this->model_pembayaran->show_pembayaran2()->result();
		$this->session->set_flashdata('success', 'Action Completed');
		$this->load->view('siswa/aksi_pembayaran', $data);
	}



	// untuk upload data daftar
	public function upload2()
	{

		$foto_icon_brand = $_FILES['gambar']['name'];
		$icon_tmp = $_FILES['gambar']['tmp_name'];

		// Format
		// cek ekstensi foto
		$ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'webp'];
		$ekstensiGambar = explode('.', $foto_icon_brand);
		$ekstensiGambar = strtolower(end($ekstensiGambar));
		if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
			echo "<script>
				 alert('Salah Ekstensi');
				 </script>";
			return false;
		}


		// GENERAT NAME PHOTO 1\
		$encrypted = uniqid();
		$encrypted .= '.';
		$encrypted .= $ekstensiGambar;

		// Upload Icon Brand
		move_uploaded_file($icon_tmp, 'assets/foto_pembayaran/' . $encrypted);
		$id = $this->input->post('id_pembayaran');
		$nama = $this->input->post('nama');
		$kontrak = $this->input->post('kontrak');
		$status = "Sudah Bayar";

		$data = array(
			'nama_siswa'            => $nama,
			'status'                => $status,
			'kontrak'               => $kontrak,
			'foto_pembayaran'       => $encrypted
		);
		$this->model_pembayaran->ubah($data, $id);
		$this->session->set_flashdata('success', 'Action Completed');
		redirect('siswa/pembayaran');
	}
}
