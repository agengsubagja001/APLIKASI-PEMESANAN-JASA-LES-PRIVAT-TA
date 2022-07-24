  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link collapsed" href="<?= base_url() ?>pengajar/dashboard">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li>
          <!-- End Dashboard Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="<?= base_url() ?>pengajar/Request">
                  <i class="bi bi-box-arrow-in-right"></i>
                  <span>Request Les <span class="badge bg-primary badge-number"><?php echo $showrequestsiswa ?></span></span>

              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="<?= base_url() ?>pengajar/Reviews">
                  <i class="bi bi-plus-square-fill"></i>
                  <span>Review Les <span class="badge bg-primary badge-number"><?php echo $showriviewsles ?></span></span>
              </a>
          </li>
          <!-- End F.A.Q Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="<?= base_url() ?>pengajar/profil">
                  <i class="bi bi-person"></i>
                  <span>Profil</span>
              </a>
          </li>
          <!-- End Profile Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="<?php echo base_url('auth/form_login/logoutpengajar') ?>">
                  <i class="bi bi-box-arrow-in-right"></i>
                  <span>Logout</span>
              </a>
          </li>
          <!-- End Login Page Nav -->

      </ul>

  </aside><!-- End Sidebar-->