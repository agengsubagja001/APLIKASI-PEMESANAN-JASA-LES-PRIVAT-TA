<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Validasi_pengajar extends CI_Controller
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
		$data['show_pengajarval'] = $this->model_pengajar->Show_pengajarval()->result();
		// $this->session->unset_flashdata('success');
		$this->load->view('admin/validasi_pengajar', $data);
	}

	// uplode update pengajar
	public function update_pengajar()
	{
		$id_akun = $this->input->post('id_akun');
		$id_pengajar = $this->input->post('id_pengajar');
		$status = $this->input->post('status');

		$data = array(
			'status'       => $status,
			'id_akun'    => $id_akun
		);

		$where = array(
			'id_pengajar' => $id_pengajar
		);

		$this->model_pengajar->update_data($where, $data, 'pengajar');
		$this->session->set_flashdata('success', 'Action Completed');
		redirect('admin/validasi_pengajar');
	}

	// hapus akun Pengajar
	public function hapus($id_pengajar)
	{
		$del = array('id_pengajar' => $id_pengajar);
		$this->model_pengajar->hapus_data($del, 'pengajar');
		$this->session->set_flashdata('Hapus', 'Action Completed');
		redirect('admin/validasi_pengajar');
	}

	// proses validasi pengajar
	public function validasi($id_pengajar)
	{
		// untuk menampilkan notif story
		// $data['notif_story'] = $this->model_dashboardd->notif_story();


		$del = array('id_pengajar' => $id_pengajar);
		$data['val_pengajar'] = $this->model_pengajar->val_data($del, 'pengajar')->result();
		$this->session->set_flashdata('success', 'Action Completed');
		$this->load->view('admin/proses_validasi', $data);
	}
}
