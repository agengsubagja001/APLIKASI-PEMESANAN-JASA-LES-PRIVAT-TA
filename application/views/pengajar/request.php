<!-- head -->
<?php $this->load->view('pengajar/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('pengajar/partial/navbar') ?>

<!-- sidebar -->
<?php $this->load->view('pengajar/partial/sidebar') ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1 Class="mt-3 mb-3">TABEL REQUEST LES</h1>
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
                  <th scope="col">Tanggal_les</th>
                  <!-- <th scope="col">Alamat</th> -->
                  <th scope="col">jam</th>
                  <!-- <th scope="col">hari</th> -->
                  <th scope="col">kontrak</th>
                  <th scope="col">Tanggal pemesanan</th>
                  <th scope="col">Status</th>
                  <th scope="col">Validasi</th>
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

                foreach ($show_request as $request) :  $datetime = date('Y, H:i-m-d', strtotime($request->create_ate));
                  $datetimee = date('Y-m-d', strtotime($request->tanggal_les)); ?>
                  <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <td><?php echo $request->nama ?></td>
                    <td><?php echo tanggal_indo($datetimee, true) ?></td>
                    <!-- <td><?php echo $request->alamat ?></td> -->
                    <td><?php echo $request->jam ?></td>
                    <!-- <td><?php echo $request->hari ?></td> -->
                    <td><?php echo $request->kontrak ?></td>
                    <td><?php echo tanggal_indo($datetime, true) ?></td>
                    <td><?php
                        if ($request->statuss == 'SETUJU') { ?>
                        <span class="badge bg-success">
                          <?php echo $request->statuss ?>
                        </span>
                      <?php } elseif ($request->statuss == 'menunggu') { ?>
                        <span class="badge bg-primary">
                          <?php echo $request->statuss ?>
                        </span>
                      <?php } elseif ($request->statuss == 'TIDAK SETUJU') { ?>
                        <span class="badge bg-danger">
                          <?php echo $request->statuss ?>
                        </span>
                      <?php }
                      ?>
                    </td>
                    <td>
                      <a href="<?php echo base_url() . 'pengajar/request/validasi_les/' . $request->id_pesanan ?>" class="mt-1 btn btn-dark btn-sm" title="Validasi Les Privat"><i class="bi bi-gear"></i></a>
                      <!-- <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-pencil-square"></i></a> -->
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
<?php if ($this->session->flashdata('success')) : ?>
  <script>
    swal("Data tervalidasi", "Data berhasil di validasi!", "success");
  </script>
<?php endif; ?>
<!--akhir sweetalert -->

<!-- footer -->
<?php $this->load->view('pengajar/partial/footer') ?>