<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_pengajar extends CI_Model
{


    // input data daftar pengajar
    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

     // input data daftar pengajar
     public function upload_pembayaran($data, $table)
     {
         $this->db->insert($table, $data);
     }
    

    // input data profil daftar pengajar
    public function input_datapengajar($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // input data daftar siswa
    public function input_datas($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // input data profil daftar siswa
    public function input_dataprofil($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // menampilkan data pengajar di halaman utama
    public function show_datapengajar()
    {
        $data = $this->db->query('SELECT akun.id_akun, akun.nama, pengajar.nama_pengajar, pengajar.alamat, pengajar.id_pengajar, pengajar.status, pengajar.gambar, pengajar.deskripsi, pengajar.bidang, pengajar.no_hp FROM akun INNER JOIN pengajar ON akun.id_akun = pengajar.id_akun WHERE pengajar.status = "SETUJU" ');
        return $data;
    }

    // menampilkan data pengajar
    // public function validasi_pengajar()
    // {
    //     $data = $this->db->query('SELECT akun.id_akun, akun.nama, profil_pengajar.alamat, profil_pengajar.id_profil, profil_pengajar.status, profil_pengajar.gambar, profil_pengajar.gambar, profil_pengajar.deskripsi, profil_pengajar.bidang, profil_pengajar.no_hp FROM akun INNER JOIN profil_pengajar ON akun.id_akun=profil_pengajar.id_akun WHERE profil_pengajar.id_profil');
    //     return $data;
    // }



    // menampilkan data pengajar yang belum di validasi
    public function show_pengajarval()
    {
        $data = $this->db->query('SELECT akun.id_akun, pengajar.nama_pengajar, pengajar.alamat, pengajar.id_pengajar, pengajar.status, pengajar.gambar, pengajar.tanggal, pengajar.deskripsi, pengajar.bidang, pengajar.no_hp FROM akun INNER JOIN pengajar ON akun.id_akun = pengajar.id_akun;');
        return $data;
    }

    // menampilkan data pengajar yang akan di validasi
    function val_data($del, $table)
    {
        return $this->db->get_where($table, $del);
    }


    // menampilkan data detail pengajar
    public function detail_pengajar()
    {
        $id_pengajar = $_GET['id'];

        $data = $this->db->query("SELECT akun.id_akun, akun.nama, pengajar.alamat, pengajar.id_pengajar, pengajar.status, pengajar.gambar, pengajar.gambar, pengajar.deskripsi, pengajar.bidang, pengajar.no_hp FROM akun INNER JOIN pengajar ON akun.id_akun = pengajar.id_akun WHERE pengajar.id_pengajar = '$id_pengajar'");
        return $data;
    }

    // update data profil pengajar yang di validasi
    function proses_validasi_pengajar($where, $status, $table)
    {
        // $this->db->where($where);
        // $this->db->update($table, $data);
        // $where = ['kdmobil' => $this->input->post('kdmobil')];

        $this->db->update('pengajar', $status, $where);
    }

    // update data pengajar yang di validasi
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // hapus data akun pengajar
    public function hapus_data($del, $table)
    {
        $this->db->where($del);
        $this->db->delete($table);
    }


    // menampilkan data request les
    public function show_datarequest()
    {
        $query = $this->session->userdata('id_akun');

        $data = $this->db->query("SELECT akun.id_akun, akun.nama, pemesanan.nama, pemesanan.kontrak, pemesanan.status, pemesanan.alamat, pemesanan.hari, pemesanan.jam, pengajar.alamat, pengajar.id_pengajar, pengajar.nama_pengajar, pengajar.no_hp, pengajar.status, pengajar.gambar, pengajar.gambar, pengajar.deskripsi, pengajar.bidang, pengajar.no_hp FROM akun INNER JOIN pengajar ON akun.id_akun = pengajar.id_akun INNER JOIN pemesanan ON pengajar.id_akun = pemesanan.id_pengajar WHERE pemesanan.id_pengajar = pengajar.id_akun = '$query'");
        return $data;
    }

    public function show_profilpengajar()
    {
        $query = $this->session->userdata('id_akun');

        $data = $this->db->query("SELECT akun.id_akun, akun.nama, pengajar.alamat, pengajar.id_pengajar, pengajar.nama_pengajar, pengajar.no_hp, pengajar.status, pengajar.gambar, pengajar.gambar, pengajar.deskripsi, pengajar.bidang, pengajar.no_hp FROM akun INNER JOIN pengajar ON akun.id_akun = pengajar.id_akun WHERE pengajar.id_akun = '$query'");
        return $data;
    }

    // menampilkan permintaan les siswa ke pengajar
    public function show_requestsiswa()
    {
        $id_akun = $this->session->userdata('id_akun');
        $this->db->select('*');
        $this->db->from('pemesanan');
        $this->db->join('siswa', 'siswa.id_akun = pemesanan.id_siswa', 'left');
        $this->db->join('pengajar', 'pengajar.id_pengajar = pemesanan.id_pengajar', 'left');
        $this->db->where('pengajar.id_akun', $id_akun);
        // $this->db->order_by('a.kode_atasan', 'asc');
        return $this->db->get()->result();
    }

    // menampilkan permintaan les siswa ke pengajar
    public function cek()
    {
        $id_akun = $this->session->userdata('id_akun');
        $data = $this->db->query("SELECT pemesanan.nama, pemesanan.create_ate, pemesanan.alamat, pemesanan.tanggal_les, pemesanan.hari, pemesanan.jam, pemesanan.id_pesanan, pemesanan.kontrak, pemesanan.statuss FROM pemesanan LEFT JOIN siswa ON siswa.id_akun = pemesanan.id_siswa LEFT JOIN pengajar ON pengajar.id_pengajar = pemesanan.id_pengajar WHERE pengajar.id_akun = '$id_akun'");
        return $data;
    }

    // menampilkan permintaan les siswa untuk di reviews pengajar
    public function reviews()
    {
        $id_akun = $this->session->userdata('id_akun');
        $data = $this->db->query("SELECT pemesanan.nama, pemesanan.alamat, pemesanan.create_ate, pemesanan.hari, pemesanan.jam, pemesanan.id_pesanan, pemesanan.kontrak, pemesanan.statuss, pemesanan.tanggal_les, pengajar.bidang  FROM pemesanan LEFT JOIN siswa ON siswa.id_akun = pemesanan.id_siswa LEFT JOIN pengajar ON pengajar.id_pengajar = pemesanan.id_pengajar WHERE pengajar.id_akun = '$id_akun' AND pemesanan.statuss ='SETUJU'");
        return $data;
    }

    // fungsi search
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('pengajar');
        $this->db->like('nama_pengajar', $keyword);
        $this->db->or_like('bidang', $keyword);
        $this->db->or_like('alamat', $keyword);
        return $this->db->get()->result();
    }

    // menampilkan data les privat yang akan di validasi
    function validasi_les_siswa($del, $table)
    {
        return $this->db->get_where($table, $del);
    }

    // menampilkan siswa yang akan di reviews les privat bta
    function pemberian_reviews($del, $table)
    {
        return $this->db->get_where($table, $del);
    }

    // update data les privat siswa yang di validasi
    function update_datales($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // upload data reviews les
    public function upload_reviews($data, $table)
    {
        $this->db->insert($table, $data);
    }

    // fungsi search
    function fetch_data($query)
    {
        $this->db->select('*');
        $this->db->from('pengajar');
        if ($query != '') {


            $this->db->like('nama_pengajar', $query);
            $this->db->or_like('bidang', $query);
            $this->db->or_like('alamat', $query);
        }
        $this->db->order_by('id_pengajar', 'DESC');
        return $this->db->get();
    }
}
