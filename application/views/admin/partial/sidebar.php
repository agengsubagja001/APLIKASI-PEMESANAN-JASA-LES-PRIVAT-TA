<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link collapsed<?php if ($this->uri->segment(1) == "dashboard") {
                                    echo "HELLO WORD";
                                  } ?>" href="<?= base_url() ?>admin/dashboard">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url() ?>admin/validasi_pengajar">
        <i class="bi bi-person-check"></i>
        <span>Validasi Pengajar</span>
      </a>
    </li>

    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url() ?>pengajar/Reviews">
          <i class="bi bi-plus-square-fill"></i>
          <span>Review Les</span>
        </a>
      </li> -->
    <!-- End F.A.Q Page Nav -->

    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url() ?>pengajar/profil">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li> -->
    <!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo base_url('auth/form_login/logoutadmin') ?>">
        <i class="bi bi-box-arrow-in-right"></i>
        <span>Logout</span>
      </a>
    </li>
    <!-- End Login Page Nav -->

  </ul>

</aside><!-- End Sidebar-->