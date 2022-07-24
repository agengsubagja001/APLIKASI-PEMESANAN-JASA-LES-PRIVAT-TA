<!-- head -->
<?php $this->load->view('admin/partial/head') ?>

<!-- navbar -->
<?php $this->load->view('admin/partial/navbar') ?>

<!-- sidebar -->
<?php $this->load->view('admin/partial/sidebar') ?>


<!-- konten -->
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
      <div class="col-lg-8">
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
                <h5 class="card-title">Siswa <span>|This Month</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-people"></i>
                    <!-- <i class="bi bi-cart"></i> -->
                  </div>
                  <div class="ps-3">
                    <h6><?php echo $jmlsiswa ?></h6>
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
                <h5 class="card-title">Les Privat <span>| This Month</span></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-cart"></i>
                    <!-- <i class="bi bi-currency-dollar"></i> -->
                  </div>
                  <div class="ps-3">
                    <h6><?php echo $jmllesprivat ?></h6>
                    <!-- <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span> -->

                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Revenue Card -->

          <!-- Customers Card -->
          <div class="col-xxl-4 col-xl-12">

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
                    <h6><?php echo $jmlpengajar ?></h6>
                    <!-- <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1"></span> -->

                  </div>
                </div>

              </div>
            </div>

          </div><!-- End Customers Card -->

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
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no = 1;
                    foreach ($show_pengajar as $pjr) : ?>
                      <tr>
                        <td scope="row"><?php echo $no++ ?></td>
                        <td>
                          <img src="<?php echo base_url() . 'assets/foto_pengajar/' . $pjr->gambar ?>" style="width:100px;" alt="">
                        </td>
                        <td><?php echo $pjr->nama ?></td>
                        <td><?php echo $pjr->alamat ?></td>
                        <td><?php echo $pjr->no_hp ?></td>
                        <td><?php echo $pjr->bidang ?></td>
                        <td><?php
                            if ($pjr->status == 'SETUJU') { ?>
                            <span class="badge bg-success">
                              <?php echo $pjr->status ?>
                            </span>
                          <?php } elseif ($pjr->status == 'PROGRES') { ?>
                            <span class="badge bg-primary">
                              <?php echo $pjr->status ?>
                            </span>
                          <?php } elseif ($pjr->status == 'TIDAK SETUJU') { ?>
                            <span class="badge bg-danger">
                              <?php echo $pjr->status ?>
                            </span>
                          <?php }
                          ?>
                        </td>
                      </tr>
                      <tr>
                      <?php endforeach ?>
                      <!-- <th scope="row">2</th>
                        <td>
                          <img src="<?= base_url() ?>assets/guru_cewe.png" style="width:100px;" alt="">
                        </td>
                        <td>Sintia agustina</td>
                        <td>Desa tunggulpayung jalan nusantara blok A Rt/Rw 03/02 kecataman lelea kabupaten indramayu</td>
                        <td>S1 Matematika</td>
                        <td>SMP</td>
                        <td>
                          <span class="badge bg-warning">Pending</span>
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

      <!-- Right side columns -->
      <div class="col-lg-4">

        <!-- Website Traffic -->
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

          <div class="card-body pb-0">
            <h5 class="card-title">Grafik Pengajar <span>| Today</span></h5>

            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

            <script>
              document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                  tooltip: {
                    trigger: 'item'
                  },
                  legend: {
                    top: '5%',
                    left: 'center'
                  },
                  series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                      show: false,
                      position: 'center'
                    },
                    emphasis: {
                      label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                      }
                    },
                    labelLine: {
                      show: false
                    },
                    data: [{
                        value: 1048,
                        name: 'SMP'
                      },
                      {
                        value: 735,
                        name: 'SD'
                      },
                      // {
                      //   value: 580,
                      //   name: 'Email'
                      // },
                      {
                        value: 484,
                        name: 'SMA'
                      },
                      // {
                      //   value: 300,
                      //   name: 'Video Ads'
                      // }
                    ]
                  }]
                });
              });
            </script>

          </div>
        </div><!-- End Website Traffic -->



      </div><!-- End Right side columns -->

    </div>
  </section>

</main><!-- End #main -->

<!-- sweetalert notif -->

<?php if ($this->session->flashdata('success')) : ?>
  <script>
    swal("Berhasil Login", "Selamat anda berhasil login ", "success");
  </script>
<?php endif; ?>

<!-- footer -->
<!-- <?php $this->load->view('admin/partial/footer') ?> -->