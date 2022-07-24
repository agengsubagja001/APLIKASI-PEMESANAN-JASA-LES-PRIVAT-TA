<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_pengajar2 extends CI_Controller
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

        // global $id_profil;
        // $id_profil = $_GET['id'];


        $data['show_datapengajar'] = $this->model_pengajar->Show_datapengajar()->result();
        $data['show_detail_pengajar'] = $this->model_detail_pengajar->detail_data()->result();
        $data['show_detail_siswa'] = $this->model_detail_pengajar->detail_datasiswa()->result();
        // $this->load->view('partial/navbar', $data);
        $this->load->view('detail_pengajar2', $data);
    }

    // untuk menambahkan pemesanan
    public function upload()
    {
        global $id;
        $id = $_GET['id'];

        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $id_pesanan = substr(str_shuffle($permitted_chars), 0, 6);

        $status = 'menunggu';
        $id_pengajar = $this->input->post('id_pengajar');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $hari = $this->input->post('hari');
        $id_siswa = $this->input->post('id_siswa');
        $jam = $this->input->post('jam');
        $kontrak = $this->input->post('kontrak');

        $data = array(

            'id_pesanan'         => $id_pesanan,
            'id_pengajar'          => $id_pengajar,
            'id_siswa'            => $id_siswa,
            'nama'               => $nama,
            'alamat'             => $alamat,
            'hari'               => $hari,
            'jam'                => $jam,
            'kontrak'            => $kontrak,
            'statuss'            => $status

        );


        // $data1 = array(
        // 	'isi_komentar'    => $komentar,

        // 	'id_komentar'     => $id_komentar

        // );

        // $data1['show_detail_blog'] = $this->model_detail_blog->detail_data()->result();
        // $this->model_komentar->input_data_komentar($data1, 'komentar');
        $this->model_detail_pengajar->upload_pemesanan($data, 'pemesanan');
        $this->session->set_flashdata('success', 'Action Completed');
        // var_dump($id_pengajar);
        redirect('detail_pengajar2?id=' . $id_pengajar);
    }
}
