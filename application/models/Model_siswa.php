<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_siswa extends CI_Model
{

    public function show_profilsiswa()
    {
        $query = $this->session->userdata('id_akun');

        $data = $this->db->query("SELECT akun.id_akun, akun.nama, siswa.alamat, siswa.id_akun, siswa.id_siswa, siswa.nama_siswa, siswa.no_hp FROM akun INNER JOIN siswa ON akun.id_akun = siswa.id_akun WHERE siswa.id_akun = '$query'");
        return $data;
    }


    // menampilkan reviews les
    public function show_hasilles()
    {
        $id_akun = $this->session->userdata('id_akun');
        $data = $this->db->query("SELECT review_les.tanggal, review_les.hasil_review, review_les.pertemuan, pengajar.nama_pengajar, pengajar.bidang FROM review_les LEFT JOIN pengajar ON pengajar.id_pengajar = review_les.id_pengajar LEFT JOIN siswa ON siswa.id_siswa = review_les.id_siswa WHERE siswa.id_akun = '$id_akun'");
        return $data;
    }


    // tampil jml data hasil les
    public function jml_hasilles()
    {

        $id_akun = $this->session->userdata('id_akun');
        $cek = $this->db->query("SELECT review_les.tanggal, review_les.hasil_review, review_les.pertemuan, pengajar.nama_pengajar, pengajar.bidang FROM review_les LEFT JOIN pengajar ON pengajar.id_pengajar = review_les.id_pengajar LEFT JOIN siswa ON siswa.id_siswa = review_les.id_siswa WHERE siswa.id_akun = '$id_akun'");
        if ($cek->num_rows() > 0) {
            return $cek->num_rows();
        } else {
            return 0;
        }
    }

    // tampil jml data hasil les
    public function status_pembayaran()
    {

        $id_akun = $this->session->userdata('id_akun');
        $cek = $this->db->query("SELECT pembayaran.status, pembayaran.id_pembayaran, siswa.nama_siswa, pemesanan.kontrak, pemesanan.statuss, pengajar.nama_pengajar, pengajar.bidang FROM pembayaran LEFT JOIN pemesanan ON pemesanan.id_pesanan = pembayaran.id_pesanan LEFT JOIN pengajar ON pengajar.id_pengajar = pembayaran.id_pengajar LEFT JOIN siswa ON siswa.id_siswa = pembayaran.id_siswa WHERE siswa.id_akun = '$id_akun' AND pemesanan.statuss = 'SETUJU'");
        if ($cek->num_rows() > 0) {
            return $cek->num_rows();
        } else {
            return 0;
        }
    }
}
