<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form_login extends CI_Controller
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
	// public function index()
	// {
	// 	$this->load->view('auth/form_login');
	// }

	public function login()
	{
		$fuser = $this->input->post('nama');
		$this->form_validation->set_rules('nama', 'Username', 'required', [
			'required'  => 'Username wajib diisi!'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required', [
			'required'  => 'Password wajib diisi!'
		]);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/form_login2');
		} else {



			$auth = $this->model_login->val_login();

			$query = $this->db->query("SELECT * FROM akun WHERE nama = '$fuser'");

			foreach ($query->result() as $row) {
				$v_id_akun = $row->id_akun;
			}

			if ($auth == FALSE) {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				 Username atau Password Anda Salah!
				 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				 </button>
				</div>');
				redirect('auth/form_login/login');
			} else {
				$this->session->set_userdata('id_akun', $v_id_akun);
				$this->session->set_userdata('nama', $auth->nama);
				$this->session->set_userdata('role_id', $auth->role_id);

				switch ($auth->role_id) {
					case 1:
						$this->session->set_flashdata('success', 'Action Completed');
						redirect('admin/dashboard');
						break;

					case 2:
						$this->session->set_flashdata('success', 'Action Completed');
						redirect('dashboard');
						break;

					case 3:
						$this->session->set_flashdata('success', 'Action Completed');
						redirect('pengajar/dashboard');
						break;
					default:
						break;
				}
			}
		}
	}

	// fungsi logout
	public function logoutsiswa()
	{
		$this->session->sess_destroy();
		redirect('dashboard');
	}

	// fungsi logout
	public function logoutpengajar()
	{
		$this->session->sess_destroy();
		redirect('auth/form_login/login');
	}

	// fungsi logout
	public function logoutadmin()
	{
		$this->session->sess_destroy();
		redirect('auth/form_login/login');
	}
}
