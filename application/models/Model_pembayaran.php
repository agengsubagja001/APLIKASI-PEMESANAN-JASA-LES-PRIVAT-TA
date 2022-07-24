<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pembayaran extends CI_Model
{

    // menampilkan reviews les
    public function show_pembayaran()
    {
        $id_akun = $this->session->userdata('id_akun');
        $data = $this->db->query("SELECT pembayaran.status, pembayaran.id_pembayaran, siswa.nama_siswa, pemesanan.kontrak, pemesanan.statuss, pengajar.nama_pengajar, pengajar.bidang FROM pembayaran LEFT JOIN pemesanan ON pemesanan.id_pesanan = pembayaran.id_pesanan LEFT JOIN pengajar ON pengajar.id_pengajar = pembayaran.id_pengajar LEFT JOIN siswa ON siswa.id_siswa = pembayaran.id_siswa WHERE siswa.id_akun = '$id_akun' AND pemesanan.statuss = 'SETUJU'");
        return $data;
    }

    // fungsi ubah data pembayaran
    function ubah($data, $id)
    {
        $this->db->where('id_pembayaran', $id);
        $this->db->update('pembayaran', $data);
        return TRUE;
    }
}
