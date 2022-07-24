  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <a href="index.html" class="logo d-flex align-items-center">
              <img src="<?= base_url() ?>assets/template_dashboard/assets/img/logo.png" alt="">
              <span>Privatin</span>
          </a>

          <nav id="navbar" class="navbar">
              <ul>
                  <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                  <li><a class="nav-link scrollto" href="#about">About</a></li>
                  <li><a class="nav-link scrollto" href="#services">Services</a></li>
                  <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                  <li><a class="nav-link scrollto" href="#team">Team</a></li> -->

                  <?php if ($this->session->userdata('nama')) { ?>

                      <li class="dropdown"><a href="#"><span><?php echo $this->session->userdata('nama') ?></span> <i class="bi bi-chevron-down"></i></a>
                          <ul>
                              <li><a href=""><?php echo $this->session->userdata('nama') ?></a></li>
                              <li><a href="">Siswa</a></li>
                              <hr>
                              <li><a href="<?php echo base_url('siswa/dashboard'); ?>">Panel siswa</a></li>
                              <li><a href="<?php echo base_url('auth/form_login/logoutsiswa') ?>">Logout</a></li>
                          </ul>
                      </li>

                  <?php } else { ?>

                      <li><a class="getstarted scrollto" href="<?php echo base_url('auth/register_siswa'); ?>">Daftar Sebagai Siswa</a></li>
                      <li><a class="getstarted scrollto" href="<?php echo base_url('auth/register'); ?>">Daftar Sebagai Pengajar</a></li>
                      <li><a class="getstarted scrollto" href="<?php echo base_url('auth/form_login/login'); ?>" style="background: #000;">Masuk</a></li>
                  <?php } ?>

                  <!-- <li><a href="blog.html">Blog</a></li>
                  <li class="dropdown"><a href="#"><span><?php echo $this->session->userdata('nama') ?></span> <i class="bi bi-chevron-down"></i></a>
                      <ul>
                          <li><a href="#">Drop Down 1</a></li>
                          <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                              <ul>
                                  <li><a href="#">Deep Drop Down 1</a></li>
                                  <li><a href="#">Deep Drop Down 2</a></li>
                                  <li><a href="#">Deep Drop Down 3</a></li>
                                  <li><a href="#">Deep Drop Down 4</a></li>
                                  <li><a href="#">Deep Drop Down 5</a></li>
                              </ul>
                          </li>
                          <li><a href="#">Drop Down 2</a></li>
                          <li><a href="#">Drop Down 3</a></li>
                          <li><a href="#">Drop Down 4</a></li>
                      </ul>
                  </li>
                  <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                  <li><a class="getstarted scrollto" href="#about">Daftar Sebagai Siswa</a></li>
                  <li><a class="getstarted scrollto" href="#about">Daftar Sebagai Pengajar</a></li>
                  <li><a class="getstarted scrollto" href="#about">Masuk</a></li> -->

              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->

      </div>
  </header><!-- End Header -->