<!-- head -->
<?php $this->load->view('admin/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('admin/partial/navbar') ?>

<!-- sidebar -->
<?php $this->load->view('admin/partial/sidebar') ?>

<!-- konten -->
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Validasi Pengajar</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Validasi Pengajar</li>
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

        <!-- <?php if ($this->session->flashdata('success')) : ?>
          <div class="alert alert-danger bg-danger text-light border-0 alert-dismissible fade show" role="alert">
            <?php echo $this->session->flashdata('success'); ?>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?> -->

        <div class="card">
          <div class="card-body mt-3" style="overflow-x:auto;">
            <h5 class="card-title">Permintaan Akun Pengajar</h5>
            <!-- <h5 class="card-title">Datatables</h5>
              <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead style="background: #f6f6fe;">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Foto</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">No.Hp</th>
                  <th scope="col">Pengajar</th>
                  <th scope="col">Tanggal</th>
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

                foreach ($show_pengajarval as $pjrval) :  $datetime = date('Y, H:i-m-d', strtotime($pjrval->tanggal));
                  // $tgl = date_create($datetime);
                  // $formatted_date = date_format($tgl, 'y H:i-m-d'); 
                ?>

                  <tr>
                    <td scope="row"><?php echo $no++ ?></td>
                    <td>
                      <img src="<?php echo base_url() . 'assets/foto_pengajar/' . $pjrval->gambar ?>" style="width:100px;" alt="">
                    </td>
                    <td><?php echo $pjrval->nama_pengajar ?></td>
                    <td><?php echo $pjrval->alamat ?></td>
                    <td><?php echo $pjrval->no_hp ?></td>
                    <td><?php echo $pjrval->bidang ?></td>
                    <td><?php echo tanggal_indo($datetime, true) ?></td>
                    <td><?php
                        if ($pjrval->status == 'SETUJU') { ?>
                        <span class="badge bg-success">
                          <?php echo $pjrval->status ?>
                        </span>
                      <?php } elseif ($pjrval->status == 'PROGRES') { ?>
                        <span class="badge bg-primary">
                          <?php echo $pjrval->status ?>
                        </span>
                      <?php } elseif ($pjrval->status == 'TIDAK SETUJU') { ?>
                        <span class="badge bg-danger">
                          <?php echo $pjrval->status ?>
                        </span>
                      <?php }
                      ?>
                    </td>
                    <td>
                      <!-- <a href="<?php echo base_url() . 'admin/proses_validasi?id=' . $pjrval->id_profil ?>" class="mt-1 btn btn-dark btn-sm" title="Remove my profile image"><i class="bi bi-gear"></i></a> -->

                      <a href="<?php echo base_url() . 'admin/validasi_pengajar/validasi/' . $pjrval->id_pengajar ?>" class="mt-1 btn btn-dark btn-sm" title="Validasi Akun Pengajar"><i class="bi bi-gear"></i></a>
                      <a href="<?php echo base_url() . 'admin/validasi_pengajar/hapus/' . $pjrval->id_pengajar ?>" onclick="javascript: return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="mt-1 btn btn-danger btn-sm" title="Hapus Akun"><i class="bi bi-trash"></i></a>

                      <!--awal modal validasi -->
                      <div class="modal fade" id="basicModal<?php $pjrval->id_pengajar ?>" tabindex="-1">
                        <div class="modal-dialog  modal-lg">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title">Validasi Request</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="<?= base_url('admin/validasi_pengajar/update_pengajar'); ?>" method="post">
                              <div class="modal-body">
                                <dl class="row">

                                  <input type="hidden" name="id_akun" value="<?php echo $pjrval->id_akun ?>">
                                  <input type="hidden" name="id_profil" value="<?php echo $pjrval->id_profil ?>">

                                  <dt class="col-sm-3">Nama</dt>
                                  <dd class="col-sm-9" name="nama" value="<?php echo $pjrval->nama ?>"><?php echo $pjrval->nama ?></dd>

                                  <dt class="col-sm-3">Alamat</dt>
                                  <dd class="col-sm-9">
                                    <p name="alamat" value="<?php echo $pjrval->alamat ?>"><?php echo $pjrval->alamat ?></p>
                                  </dd>

                                  <dt class="col-sm-3">No_hp</dt>
                                  <dd class="col-sm-9" name="no_hp" value="<?php echo $pjrval->no_hp ?>"><?php echo $pjrval->no_hp ?></dd>

                                  <dt class="col-sm-3 text-truncate">Pengajar</dt>
                                  <dd class="col-sm-9" name="bidang" value="<?php echo $pjrval->bidang ?>"><?php echo $pjrval->bidang ?></dd>

                                  <dt class="col-sm-3 text-truncate">Status</dt>
                                  <dd class="col-sm-9" name="bidang" value="<?php echo $pjrval->bidang ?>"><?php echo $pjrval->status ?></dd>

                                  <dt class="col-sm-3 text-truncate">Validasi Status</dt>
                                  <div class="col-sm-9">
                                    <select name="status" class="form-select" aria-label="Default select example">
                                      <option selected="">Pilih Validasi</option>
                                      <option value="SETUJU">SETUJU</option>
                                      <option value="TIDAK SETUJU">TIDAK SETUJU</option>
                                    </select>
                                  </div>
                                </dl>
                              </div>
                              <div class="modal-footer">
                                <a href="<?= base_url('admin/validasi_pengajar'); ?>"><button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button></a>
                                <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <!-- akhir modal validasi -->
                    </td>
                  </tr>
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

<!-- sweetalert hapus -->
<?php if ($this->session->flashdata('success')) : ?>
  <script>
    swal("Data tervalidasi", "Data berhasil di validasi!", "success");
  </script>
<?php endif; ?>
<!--akhir sweetalert -->

<!-- footer -->
<?php $this->load->view('admin/partial/footer') ?>