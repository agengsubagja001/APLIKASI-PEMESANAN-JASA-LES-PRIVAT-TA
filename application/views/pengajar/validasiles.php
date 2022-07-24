<!-- head -->
<?php $this->load->view('pengajar/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('pengajar/partial/navbar') ?>

<!-- sidebar -->
<?php $this->load->view('pengajar/partial/sidebar') ?>

<!-- konten -->
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Validasi Les Privat</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Validasi Les Privat</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- <div class="pagetitle">
    <h1 Class="mt-3 mb-3">TABEL VALIDASI PENGAJAR</h1>
    <nav>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
    </nav>
  </div> -->
    <!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body pt-3" style="overflow-x:auto; padding: 0 50px 50px 50px;">
                        <h5 class="card-title">Profil Siswa les privat</h5>

                        <?php

                        // fungsi untuk merubah tanggal indo
                        function tanggal_indo($tanggal, $cetak_hari = false)
                        {
                            $hari = array(
                                1 =>    'Senin',
                                'Selasa',
                                'Rabu',
                                'Kamis',
                                'Jumat',
                                'Sabtu',
                                'Minggu'
                            );

                            $bulan = array(
                                1 =>   'Januari',
                                'Februari',
                                'Maret',
                                'April',
                                'Mei',
                                'Juni',
                                'Juli',
                                'Agustus',
                                'September',
                                'Oktober',
                                'November',
                                'Desember'
                            );
                            $split     = explode('-', $tanggal);
                            $tgl_indo = $split[2] . ' ' . $bulan[(int)$split[1]] . ' ' . $split[0];

                            if ($cetak_hari) {
                                $num = date('N', strtotime($tanggal));
                                return $hari[$num] . ', ' . $tgl_indo;
                            }
                            return $tgl_indo;
                        }
                        // akhir fungsi merubah tanggal indo

                        foreach ($val_pengajar as $pjrval) : $datetimee = date('Y-m-d', strtotime($pjrval->tanggal_les)); ?>
                            <form action="<?= base_url('pengajar/request/update_les'); ?>" method="post">

                                <!-- <input type="hidden" name="id_pengajar" value="<?php echo $pjrval->id_pengajar ?>">
                                <input type="hidden" name="id_siswa" value="<?php echo $pjrval->id_siswa ?>"> -->


                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <!-- <p class="small fst-italic">Saya Merupakan seorang yang selalu ingin belajar dan mempunyai rasa keingin tahuan terhadap ilmu pengetahuan itu sangat besar sehingga saya rajin belajar</p> -->
                                    <!-- <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                        <div class="col-lg-3 col-md-4 label mb-4">
                                            <img src="<?php echo base_url() . 'assets/foto_pengajar/' . $pjrval->gambar ?>" alt="testi-user" style="height: 150px; widht: 150px;">
                                        </div>
                                        <div class="col-lg-6 col-md-8 small">
                                            <h5 class="" style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">Deskripsi</h5>
                                            <?php echo $pjrval->deskripsi ?>
                                        </div>

                                    </div> -->

                                    <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                        <!-- <h5 class="card-title" style="padding: 20px 0 15px 0; font-size: 18px; font-weight: 500;">Profil Siswa les privat</h5> -->

                                        <input type="hidden" name="id_pengajar" value="<?php echo $pjrval->id_pengajar ?>">
                                        <input type="hidden" name="id_siswa" value="<?php echo $pjrval->id_siswa ?>">
                                        <input type="hidden" name="id_pesanan" value="<?php echo $pjrval->id_pesanan ?>">
                                        <input type="hidden" name="tanggal" value="<?php echo $pjrval->create_ate ?>">


                                        <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                            <div class="col-lg-3 col-md-4 label " style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">Nama Lengkap</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $pjrval->nama ?></div>
                                        </div>

                                        <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                            <div class="col-lg-3 col-md-4 label" style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">Alamat</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $pjrval->alamat ?></div>
                                        </div>

                                        <!-- <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                            <div class="col-lg-3 col-md-4 label" style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">No.telepon</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $pjrval->no_hp ?></div>
                                        </div> -->

                                        <!-- <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                            <div class="col-lg-3 col-md-4 label" style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">hari</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $pjrval->hari ?></div>
                                        </div> -->

                                        <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                            <div class="col-lg-3 col-md-4 label" style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">Tanggal Les</div>
                                            <div class="col-lg-9 col-md-8"><?php echo tanggal_indo($datetimee, true) ?></div>
                                        </div>

                                        <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                            <div class="col-lg-3 col-md-4 label" style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">jam</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $pjrval->jam ?></div>
                                        </div>

                                        <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                            <div class="col-lg-3 col-md-4 label" style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">kontrak</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $pjrval->kontrak ?></div>
                                        </div>

                                        <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                            <div class="col-lg-3 col-md-4 label" style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">Status</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $pjrval->statuss ?></div>
                                        </div>

                                        <!-- <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                            <div class="col-lg-3 col-md-4 label">Bidang</div>
                                            <div class="col-lg-9 col-md-8"><?php echo $pjrval->bidang ?></div>
                                        </div> -->



                                        <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                            <div class="col-lg-3 col-md-4 label" style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">Validasi Status</div>
                                            <div class="col-lg-3 col-md-8">
                                                <select name="status" class="form-select" aria-label="Default select example" require>
                                                    <option value="MEMINTA" selected="">Pilih Validasi</option>
                                                    <option value="SETUJU">SETUJU</option>
                                                    <option value="TIDAK SETUJU">TIDAK SETUJU</option>
                                                </select>
                                            </div>

                                        </div>

                                        <a href="<?= base_url() ?>admin/validasi_pengajar">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </a>
                                        <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>

                                    </div>
                            </form>
                        <?php endforeach ?>
                        </tbody>
                        </table>
                        <!-- End Table with stripped rows -->


                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- sweetalert hapus -->
<?php if ($this->session->flashdata('Hapus')) : ?>
    <script>
        swal("Data terhapus", "Data berhasil di hapus!", "success");
    </script>
<?php endif; ?>
<!--akhir sweetalert -->

<!-- footer -->
<?php $this->load->view('pengajar/partial/footer') ?>