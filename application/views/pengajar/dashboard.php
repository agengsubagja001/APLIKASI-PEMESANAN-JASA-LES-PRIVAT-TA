<!-- head -->
<?php $this->load->view('pengajar/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('pengajar/partial/navbar') ?>

<!-- sidebar -->
<?php $this->load->view('pengajar/partial/sidebar') ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Sales Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card sales-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Reviews Les <span>|This Month</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                    <!-- <i class="bi bi-cart"></i> -->
                  </div>
                  <div class="ps-3">
                    <h6><?php echo $showriviewsles ?></h6>
                    <!-- <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Sales Card -->

          <!-- Revenue Card -->
          <div class="col-xxl-4 col-md-6">
            <div class="card info-card revenue-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Request Les <span>| This Month</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                    <!-- <i class="bi bi-currency-dollar"></i> -->
                  </div>
                  <div class="ps-3">
                    <h6><?php echo $showrequestsiswa ?></h6>
                    <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <!-- <div class="col-xxl-4 col-xl-12">

            <div class="card info-card customers-card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body">
                <h5 class="card-title">Pengajar <span>| This Year</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                    <h6>12</h6>
                   

                  </div>
                </div>

              </div>
            </div>

          </div> -->
          <!-- End Customers Card -->

          <!-- Reports -->
          <div class="col-12">
            <div class="card">

              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>

                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li><a class="dropdown-item" href="#">This Month</a></li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>

              <div class="card-body mt-3" style="overflow-x:auto;">
                <h5 class="card-title">Permintaan Les Privat</h5>
                <!-- <h5 class="card-title">Datatables</h5>
          <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> -->

                <!-- Table with stripped rows -->
                <table class="table datatable">
                  <thead style="background: #f6f6fe;">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <!-- <th scope="col">No telepon</th> -->
                      <th scope="col">Alamat</th>
                      <th scope="col">jam</th>
                      <th scope="col">hari</th>
                      <th scope="col">kontrak</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($show_request as $request) : ?>
                      <tr>
                        <th scope="row"><?php echo $no++ ?></th>
                        <td><?php echo $request->nama ?></td>
                        <!-- <td><?php echo $request->no_hp ?></td> -->
                        <td><?php echo $request->alamat ?></td>
                        <td><?php echo $request->jam ?></td>
                        <td><?php echo $request->hari ?></td>
                        <td><?php echo $request->kontrak ?></td>
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
                      </tr>
                    <?php endforeach ?>
                    <!-- <tr>
                  <th scope="row">2</th>
                  <td>Sintia agustina</td>
                  <td>Desa tunggulpayung jalan nusantara blok A Rt/Rw 03/02 kecataman lelea kabupaten indramayu</td>
                  <td>SMA</td>
                  <td>
                    <span class="badge bg-warning">Pending</span>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#basicModal" title="Remove my profile image"><i class="bi bi-pencil-square"></i></a>
                    <div class="modal fade" id="basicModal" tabindex="-1">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title">Validasi Request</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Apakah anda akan menerima permintaan Les Privat tersebut ?
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tolak</button>
                            <button type="button" class="btn btn-primary">Setuju</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </td>
                </tr> -->
                  </tbody>
                </table>
                <!-- End Table with stripped rows -->

              </div>


            </div>
          </div><!-- End Reports -->





        </div>
      </div><!-- End Left side columns -->

    </div>
  </section>

</main><!-- End #main -->

<?php if ($this->session->flashdata('success')) : ?>
  <script>
    swal("Berhasil Login", "Selamat anda berhasil login ", "success");
  </script>
<?php endif; ?>


<!-- footer -->
<?php $this->load->view('pengajar/partial/footer') ?>