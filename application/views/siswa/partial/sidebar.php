  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">

          <li class="nav-item">
              <a class="nav-link collapsed" href="<?= base_url() ?>siswa/dashboard">
                  <i class="bi bi-grid"></i>
                  <span>Dashboard</span>
              </a>
          </li><!-- End Dashboard Nav -->

          <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url() ?>pengajar/Request">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Request Les</span>
        </a>
      </li> -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="<?= base_url() ?>siswa/reviews_les">
                  <i class="bi bi-box-arrow-in-right"></i>
                  <span>Hasil Review Les</span>
              </a>
          </li>
          <!-- End F.A.Q Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="<?= base_url() ?>siswa/pembayaran">
                  <i class="bi bi-cash-stack"></i>
                  <span>Pembayaran Les</span>
              </a>
          </li>

          <li class="nav-item">
              <a class="nav-link collapsed" href="<?= base_url() ?>siswa/profil">
                  <i class="bi bi-person"></i>
                  <span>Profile</span>
              </a>
          </li>
          <!-- End Profile Page Nav -->

          <li class="nav-item">
              <a class="nav-link collapsed" href="<?php echo base_url('auth/form_login/logoutsiswa') ?>">
                  <i class="bi bi-box-arrow-in-right"></i>
                  <span>Logout</span>
              </a>
          </li>
          <!-- End Login Page Nav -->

      </ul>

  </aside><!-- End Sidebar-->