<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_siswa extends CI_Controller
{

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
		$this->load->view('auth/register_siswa');
	}

	public function daftar_siswa()
	{

		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
		$id_akun = substr(str_shuffle($permitted_chars), 0, 6);
		$id_siswa = substr(str_shuffle($permitted_chars), 0, 6);

		$role_id = "2";
		$nama = $this->input->post('nama');
		$password = $this->input->post('password');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
		$status = "PROGRES";


		$data = array(
			'id_akun'       => $id_akun,
			// 'no_hp'         => $no_hp,
			'role_id'       => $role_id,
			'nama'          => $nama,
			'password'      => $password,
			// 'alamat'        => $alamat,
			// 'status'        => $status
		);

		$dataa = array(
			'id_siswa'       => $id_siswa,
			'nama_siswa'       => $nama,
			'id_akun'       => $id_akun,
			'no_hp'         => $no_hp,
			'alamat'        => $alamat,
		);
		$this->model_pengajar->input_datas($data, 'akun');
		$this->model_pengajar->input_dataprofil($dataa, 'siswa');
		$this->session->set_flashdata('success', 'Action Completed');
		redirect('auth/form_login/login');
	}
}
