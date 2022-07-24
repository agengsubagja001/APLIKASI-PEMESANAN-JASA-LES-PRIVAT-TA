<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_detail_pengajar extends CI_Model
{
    // tampil detail blog
    public function detail_data()
    {
        $id_pengajar = $_GET['id'];

        $data = $this->db->query("SELECT akun.id_akun, akun.nama, pengajar.alamat, pengajar.id_pengajar, pengajar.status, pengajar.gambar, pengajar.deskripsi, pengajar.bidang, pengajar.no_hp FROM akun INNER JOIN pengajar ON akun.id_akun = pengajar.id_akun WHERE pengajar.id_pengajar = '$id_pengajar'");
        return $data;
    }


    public function detail_datasiswa()
    {
        $id_siswa = $this->session->userdata('id_akun');

        $data = $this->db->query("SELECT akun.id_akun, akun.nama, siswa.alamat, siswa.id_siswa, siswa.nama_siswa, siswa.no_hp FROM akun INNER JOIN siswa ON akun.id_akun = siswa.id_akun WHERE siswa.id_akun = '$id_siswa'");
        return $data;
    }


    // input data pemesanan pengajar
    public function upload_pemesanan($data, $table)
    {
        $this->db->insert($table, $data);
    }
}
