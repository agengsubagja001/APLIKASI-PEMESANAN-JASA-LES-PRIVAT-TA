<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
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
		$this->load->view('auth/register_pengajar');
	}

	// untuk upload data daftar
	public function daftar()
	{
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
		$id_akun = substr(str_shuffle($permitted_chars), 0, 6);
		$id_pengajar = substr(str_shuffle($permitted_chars), 0, 6);

		if (isset($_POST['btn_submit'])) {
			$role_id = "3";
			$nama = $this->input->post('nama');
			$password = $this->input->post('password');
			$no_hp = $this->input->post('no_hp');
			$email = $this->input->post('email');
			$deskripsi = $this->input->post('deskripsi');
			$bidang = $this->input->post('bidang');
			$alamat = $this->input->post('alamat');
			$status = "PROGRES";

			// Size
			$ukuranSize = $_FILES['gambar']['size'];

			// Foto
			// blog
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
			// Cek Ukuran Foto
			// if ($ukuranFile > 4000000) {
			// 	echo "<script>
			// 	 alert('Gambar Terlalu Besar');
			// 	 </script>";
			// 	return false;
			// }

			// GENERAT NAME PHOTO 1\
			$encrypted = uniqid();
			$encrypted .= '.';
			$encrypted .= $ekstensiGambar;

			// Upload Icon Brand
			move_uploaded_file($icon_tmp, 'assets/foto_pengajar/' . $encrypted);


			$data = array(
				'id_akun'       => $id_akun,
				// 'email'         => $email,
				// 'no_hp'         => $no_hp,
				// 'deskripsi'     => $deskripsi,
				// 'bidang'        => $bidang,
				'role_id'       => $role_id,
				'nama'          => $nama,
				'password'      => $password
				// 'alamat'        => $alamat,
				// 'gambar'        => $encrypted,
				// 'status'        => $status
			);

			$dataa = array(
				'id_akun'       => $id_akun,
				'id_pengajar'     => $id_pengajar,
				'nama_pengajar' => $nama,
				'no_hp'         => $no_hp,
				'deskripsi'     => $deskripsi,
				'bidang'        => $bidang,
				'alamat'        => $alamat,
				'gambar'        => $encrypted,
				'status'        => $status
			);

			$this->model_pengajar->input_data($data, 'akun');
			$this->model_pengajar->input_datapengajar($dataa, 'pengajar');
			$this->session->set_flashdata('success', 'Action Completed');
			redirect('auth/form_login/login');
		} else {
		}
	}
}
