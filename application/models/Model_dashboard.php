<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_dashboard extends CI_Model
{
    // menampilkan permintaan data pengajar 
    public function show_pengajar()
    {
        $data = $this->db->query('SELECT akun.id_akun, akun.nama, pengajar.alamat, pengajar.id_pengajar, pengajar.status, pengajar.gambar, pengajar.deskripsi, pengajar.bidang, pengajar.no_hp FROM akun INNER JOIN pengajar ON akun.id_akun = pengajar.id_akun;');
        return $data;
    }

    // tampil data jml siswa
    public function jml_siswa()
    {
        $cek = $this->db->query("SELECT id_akun FROM akun WHERE akun.role_id = '2'");
        if ($cek->num_rows() > 0) {
            return $cek->num_rows();
        } else {
            return 0;
        }
    }

    // tampil data jml pengajar
    public function jml_pengajar()
    {
        $cek = $this->db->query("SELECT id_akun FROM akun WHERE akun.role_id = '3'");
        if ($cek->num_rows() > 0) {
            return $cek->num_rows();
        } else {
            return 0;
        }
    }


    // tampil data jml pemesanan les
    public function jml_requestsiswa()
    {

        // $id_akun = $this->session->userdata('id_akun');

        // $builder = $this->db->from('pemesanan');
        // $builder = $this->db->select('*');
        // $builder = $this->db->join('siswa', 'siswa.id_akun = pemesanan.id_siswa', 'left');
        // $builder = $this->db->join('pengajar', 'pengajar.id_pengajar = pemesanan.id_pengajar', 'left');
        // $builder = $this->db->where('pengajar.id_akun', $id_akun) ;
        // $query = $builder->count_all_results();
        // return $query;

        $id_akun = $this->session->userdata('id_akun');

        $cek = $this->db->query("SELECT pemesanan.nama, pemesanan.alamat, pemesanan.create_ate, pemesanan.hari, pemesanan.jam, pemesanan.id_pesanan, pemesanan.kontrak, pemesanan.statuss FROM pemesanan LEFT JOIN siswa ON siswa.id_akun = pemesanan.id_siswa LEFT JOIN pengajar ON pengajar.id_pengajar = pemesanan.id_pengajar WHERE pengajar.id_akun = '$id_akun' AND pemesanan.statuss ='menunggu'");
        if ($cek->num_rows() > 0) {
            return $cek->num_rows();
        } else {
            return 0;
        }
    }

    // tampil data jml reviews les
    public function jml_riviewsles()
    {
        $id_akun = $this->session->userdata('id_akun');

        $cek = $this->db->query("SELECT pemesanan.nama, pemesanan.alamat, pemesanan.create_ate, pemesanan.hari, pemesanan.jam, pemesanan.id_pesanan, pemesanan.kontrak, pemesanan.statuss FROM pemesanan LEFT JOIN siswa ON siswa.id_akun = pemesanan.id_siswa LEFT JOIN pengajar ON pengajar.id_pengajar = pemesanan.id_pengajar WHERE pengajar.id_akun = '$id_akun' AND pemesanan.statuss ='SETUJU'");
        if ($cek->num_rows() > 0) {
            return $cek->num_rows();
        } else {
            return 0;
        }
    }

    // tampil data jml les privat yang sudah berlangsung pada dashboard admin
    public function jml_lesprivat()
    {

        $cek = $this->db->query("SELECT pemesanan.nama, pemesanan.alamat, pemesanan.create_ate, pemesanan.hari, pemesanan.jam, pemesanan.id_pesanan, pemesanan.kontrak, pemesanan.statuss FROM pemesanan LEFT JOIN siswa ON siswa.id_akun = pemesanan.id_siswa LEFT JOIN pengajar ON pengajar.id_pengajar = pemesanan.id_pengajar WHERE pemesanan.statuss ='SETUJU'");
        if ($cek->num_rows() > 0) {
            return $cek->num_rows();
        } else {
            return 0;
        }
    }
}
