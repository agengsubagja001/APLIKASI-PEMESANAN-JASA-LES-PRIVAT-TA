<!-- head -->
<?php $this->load->view('siswa/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('siswa/partial/navbar') ?>

<!-- sidebar -->
<?php $this->load->view('siswa/partial/sidebar') ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1 Class="mt-3 mb-3">TABEL PEMBAYARAN</h1>
        <nav>
            <!-- <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol> -->
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body mt-3" style="overflow-x:auto;">
                        <!-- <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead style="background: #f6f6fe;">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <!-- <th scope="col">Tanggal_les</th> -->
                                    <!-- <th scope="col">Alamat</th> -->
                                    <!-- <th scope="col">jam</th> -->
                                    <!-- <th scope="col">hari</th> -->
                                    <th scope="col">kontrak</th>
                                    <th scope="col">Nama Pengajar</th>
                                    <th scope="col">Bidang</th>
                                    <!-- <th scope="col">Tanggal pemesanan</th> -->
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;

                                date_default_timezone_set('Asia/Jakarta');

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

                                foreach ($show_pembayaran as $request) :
                                    // $datetimee = date('Y-m-d', strtotime($request->tanggal_les)); 
                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $no++ ?></th>
                                        <td><?php echo $request->nama_siswa ?></td>
                                        <!-- <td><?php echo tanggal_indo($datetimee, true) ?></td> -->
                                        <!-- <td><?php echo $request->alamat ?></td> -->
                                        <!-- <td><?php echo $request->jam ?></td> -->
                                        <!-- <td><?php echo $request->hari ?></td> -->
                                        <td><?php echo $request->kontrak ?></td>
                                        <td><?php echo $request->nama_pengajar ?></td>
                                        <td><?php echo $request->bidang ?></td>
                                        <!-- <td><?php echo tanggal_indo($datetime, true) ?></td> -->
                                        <td><?php
                                                if ($request->status == 'Sudah Bayar') { ?>
                                                    <span class="badge bg-success">
                                                        <?php echo $request->status ?>
                                                    </span>
                                                <?php } elseif ( $request->status == 'Belum Bayar') { ?>
                                                    <span class="badge bg-danger">
                                                        <?php echo $request->status ?>
                                                    </span>
                                                <?php } elseif ($request->status == 'Belum apa') { ?>
                                                    <span class="badge bg-primary">
                                                        <?php echo $request->statuss ?>
                                                    </span>
                                                <?php }
                                            ?>
                                            
                                        </td>

                                        <td>
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal<?php echo $request->id_pembayaran ?>">
                                                <i class="bi bi-gear"></i>
                                            </button>
                                            <!-- <a href="#" class="mt-1 btn btn-dark btn-sm" title="pembayaran" data-toggle="modal" data-target="#basicModal"><i class="bi bi-gear"></i></a> -->
                                            <!-- <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-pencil-square"></i></a> -->
                                        </td>
                                    </tr>

                                    <!-- modal form -->
                                    <div class="modal fade" id="basicModal<?php echo $request->id_pembayaran ?>" tabindex="-1" aria-hidden="true" style="display: none;">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Upload Pembayaran</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <form action="<?php echo base_url('siswa/pembayaran/upload2') ?>" method="post" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="form-group">

                                                            <input type="hidden" name="id_pembayaran" value="<?php echo $request->id_pembayaran ?>">
                                                            <input type="hidden">
                                                            <input type="hidden">

                                                            <div class="col-12 mt-2">
                                                                <label for="inputNanme4" class="form-label">Upload Bukti Pembayaran</label>
                                                                <input type="file" name="gambar" class="form-control" id="inputNanme4" placeholder="Masukan Nama Siswa" required>
                                                            </div>

                                                            <div class="col-12 mt-2">
                                                                <label for="inputNanme4" class="form-label">Nama Siswa</label>
                                                                <input type="text" name="nama" class="form-control" id="inputNanme4" placeholder="Masukan Nama Siswa" required>
                                                            </div>
                                                            <div class="col-12 mt-2">
                                                                <label for="inputNanme4" class="form-label">Kontrak Les</label>
                                                                <input type="text" name="kontrak" class="form-control" id="inputNanme4" placeholder="Masukan Kontrak Les ( contoh: 1 Bulan )" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary" name="btn_submit">Kirim</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- akhir modal form upload -->

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

<?php if ($this->session->flashdata('success')) : ?>
    <script>
        swal("Berhasil", "Selamat upload pembayaran berhasil ", "success");
    </script>
<?php endif; ?>


<!-- footer -->
<?php $this->load->view('siswa/partial/footer') ?>