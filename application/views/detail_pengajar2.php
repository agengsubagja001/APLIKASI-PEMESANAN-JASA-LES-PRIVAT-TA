<!-- head -->
<?php $this->load->view('partials/head') ?>

<!-- navbar-->
<?php $this->load->view('partials/navbar') ?>

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" style="background: #fff;">
        <div class="container">

            <!-- <ol>
                <li><a href="index.html">Home</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li>Blog Single</li>
            </ol>
            <h2>Blog Single</h2> -->

        </div>
    </section><!-- End Breadcrumbs -->


    <?php foreach ($show_detail_pengajar as $detail) : $linkwa = 'https://wa.me/' . $detail->no_hp; ?>
        <!-- ======= Blog Single Section ======= -->
        <section id="blog" class="blog">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-8 entries">

                        <article class="entry entry-single">

                            <div class="entry-img">
                                <img src="<?= base_url() ?>assets/template_dashboard/assets/img/blog/baground.jpg" alt="" class="img-fluid">
                            </div>

                            <h2 class="entry-title">
                                <span><?php echo $detail->nama ?></span>
                            </h2>

                            <hr>

                            <div class="entry-meta">
                                <span>Deskrispi</span>
                                <!-- <ul>
                                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">John Doe</a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                                </ul> -->
                            </div>

                            <div class="entry-content">
                                <p>
                                    <?php echo $detail->deskripsi ?>
                                </p>

                            </div>


                            <div class="entry-meta">
                                <span>Alamat</span>
                            </div>
                            <div class="entry-content">
                                <p>
                                    <?php echo $detail->alamat ?>
                                </p>

                            </div>

                        </article><!-- End blog entry -->


                    </div><!-- End blog entries list -->

                    <div class="col-lg-4">

                        <div class="sidebar">

                            <h3 class="sidebar-title">Profil</h3>
                            <div class="sidebar-item recent-posts">
                                <div class="post-item clearfix">
                                    <img src="<?php echo base_url() . 'assets/foto_pengajar/' . $detail->gambar ?>" class="rounded-circle float-left" alt="">
                                    <h4><a href="blog-single.html"><?php echo $detail->nama ?></a></h4>
                                    <time datetime="2020-01-01"><?php echo $detail->bidang ?></time>
                                </div>
                            </div><!-- End sidebar recent posts-->


                            <div class="sidebar-item tags">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php if ($this->session->userdata('id_akun')) { ?>
                                            <button type="button" class="btn btn-primary" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Pesan Les
                                            </button>
                                        <?php } else { ?>
                                            <a class="" href="<?php echo base_url('auth/form_login/login'); ?>"><button type="button" class="btn btn-primary" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    Pesan Les
                                                </button></a>
                                        <?php } ?>
                                    </div>
                                    <div class="col-md-12 mt-3">

                                        <a class="" href="<?php echo $linkwa ?>"><button type="button" class="btn btn-dark" style="width: 100%;">
                                                Hubungi
                                            </button></a>

                                    </div>
                                </div>

                            </div><!-- End sidebar tags-->

                        </div><!-- End sidebar -->

                    </div><!-- End blog sidebar -->

                </div>

            </div>
        </section><!-- End Blog Single Section -->

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="col-12 text-center">
                        <h6 class="modal-title" id="exampleModalLabel" style="color:red; font:italic;">Sebelum Pesan Les privat Chat Terlebih Dahulu !</h6>
                    </div>
                    <form action="<?= site_url('detail_pengajar2/upload') ?>" method="post">
                        <div class="modal-body">

                            <?php foreach ($show_detail_siswa as $dtl) : ?>
                                <input type="hidden" name="id_siswa" value="<?php echo $dtl->id_siswa ?>">
                            <?php endforeach ?>


                            <input type="hidden" name="id_pengajar" value="<?php echo $detail->id_pengajar = $_GET['id']; ?>">
                            <!-- Vertical Form -->

                            <div class="col-12">
                                <label for="inputNanme4" class="form-label">Nama Siswa</label>
                                <input type="text" name="nama" class="form-control" id="inputNanme4" placeholder="Masukan Nama Siswa" required>
                            </div>
                            <div class="col-12 mt-2">
                                <label for="inputNanme4" class="form-label">Alamat Siswa</label>
                                <textarea class="form-control" name="alamat" style="min-width: 100%" placeholder="Masukan Alamat Siswa" cols="30" rows="8" required></textarea>
                            </div>
                            <div class="col-12 mt-2">
                                <label for="inputNanme4" class="form-label">Kontrak Les</label>
                                <input type="text" name="kontrak" class="form-control" id="inputNanme4" placeholder="Masukan Kontrak Les ( contoh: 1 Bulan )" required>
                            </div>

                            <div class="col-12 mt-2">
                                <label for="inputNanme4" class="form-label">Tanggal Les</label>
                                <input type="date" name="tanggalles" class="form-control" id="inputNanme4" placeholder="Masukan Kontrak Les ( contoh: 1 Bulan )" required>
                            </div>

                            <div class="col-12 mt-2">
                                <label for="inputNanme4" class="form-label">Masukan Jam</label>
                                <input type="time" name="jam" class="form-control" id="inputNanme4" placeholder="Masukan Jam Les Privat" required>
                            </div>
                            <div class="col-12 mt-2">
                                <label for="inputNanme4" class="form-label">Pilih Hari</label>
                                <div class="input-group mb-3">
                                    <select name="hari" class="form-select" id="inputGroupSelect01">
                                        <option selected>Pilih Hari</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jumat">Jumat</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Minggu">Minggu</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Vertical Form -->

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <?php endforeach ?>

</main><!-- End #main -->


<?php if ($this->session->flashdata('success')) : ?>
    <script>
        swal("Berhasil", "Pemesanan Berhasil ", "success");
    </script>
<?php endif; ?>


<!-- footer -->
<?php $this->load->view('partials/footer') ?>