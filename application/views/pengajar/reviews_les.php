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
        <form action="<?= base_url('pengajar/reviews/upload_les'); ?>" method="post">
            <div class="row">
                <div class="col-xl-7">
                    <div class="card">
                        <div class="card-body pt-3" style="overflow-x:auto; padding: 0 50px 50px 50px;">
                            <h5 class="card-title">Berikan Reviews</h5>

                            <?php foreach ($showprofil as $profil) : ?>

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <div class="row mb-3">
                                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Ulasan/Reviews</label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="reviews" type="text" class="form-control" style="height: 100px" placeholder="masukan ulasan reviews les privat"></textarea>

                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Tanggal Les</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="tanggal" type="date" class="form-control" id="Phone" placeholder="masukan tanggal" require>
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Pertemuan</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="pertemuan" placeholder="contoh (Pertemuan 1)" type="text" class="form-control" id="Phone" require>
                                        </div>
                                    </div>

                                    <hr>

                                    <h5 class="card-title" style="padding: 20px 0 15px 0; font-size: 18px; font-weight: 500;">Profil Pengajar</h5>


                                    <!-- <input type="hidden" name="id_pesanan" value="<?php echo $pjrval->id_pesanan ?>">
                                        <input type="hidden" name="tanggal" value="<?php echo $pjrval->create_ate ?>"> -->


                                    <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                        <div class="col-lg-3 col-md-4 label" style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">Nama Siswa</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $profil->nama_pengajar ?></div>
                                    </div>

                                    <!-- <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                        <div class="col-lg-3 col-md-4 label" style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">Alamat</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $profil->alamat ?></div>
                                    </div> -->

                                    <div class="row mb-5" style="margin-bottom: 20px; font-size: 15px;">
                                        <div class="col-lg-3 col-md-4 label" style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">Bidang</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $profil->bidang ?></div>
                                    </div>

                                    <a href="<?= base_url() ?>pengajar/reviews">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </a>

                                    <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>

                                </div>

                            <?php endforeach ?>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>

                <div class="col-xl-5">
                    <div class="card">
                        <div class="card-body pt-3" style="overflow-x:auto; padding: 0 50px 50px 50px;">
                            <h5 class="card-title">Profil Siswa les privat</h5>

                            <?php foreach ($val_pengajar as $pjrval) : ?>

                                <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                    <!-- <h5 class="card-title" style="padding: 20px 0 15px 0; font-size: 18px; font-weight: 500;">Profil Siswa les privat</h5> -->

                                    <!-- <input type="hidden" name="id_pengajar" value="<?php echo $pjrval->id_pengajar ?>">
                                        <input type="hidden" name="id_siswa" value="<?php echo $pjrval->id_siswa ?>">
                                        <input type="hidden" name="id_pesanan" value="<?php echo $pjrval->id_pesanan ?>">
                                        <input type="hidden" name="tanggal" value="<?php echo $pjrval->create_ate ?>"> -->

                                    <input type="hidden" name="id_pengajar" value="<?php echo $pjrval->id_pengajar ?>">
                                    <input type="hidden" name="id_siswa" value="<?php echo $pjrval->id_siswa ?>">


                                    <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                        <div class="col-lg-3 col-md-4 label " style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">Nama Siswa</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $pjrval->nama ?></div>
                                    </div>

                                    <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                        <div class="col-lg-3 col-md-4 label" style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">Alamat</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $pjrval->alamat ?></div>
                                    </div>

                                    <div class="row" style="margin-bottom: 20px; font-size: 15px;">
                                        <div class="col-lg-3 col-md-4 label" style="font-weight: 600; color: rgba(1, 41, 112, 0.6);">hari</div>
                                        <div class="col-lg-9 col-md-8"><?php echo $pjrval->hari ?></div>
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
                                    
                                </div>

                            <?php endforeach ?>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </form>
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