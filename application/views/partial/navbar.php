        <!-- Navbar boostrap -->
        <nav class="navbar navbar-expand-lg" style=" box-shadow: 0 5px 10px rgb(73 84 100 / 5%); background-color: #FFFFFF;color:#3333;margin-bottom:20px; position: fixed; z-index: 20; width: 100%">
            <!-- <a class="navbar-brand" href="#"> <img class="logo" src="http://bootstrap-ecommerce.com/main/images/logo-white.png" height="40"> LOGO</a> -->
            <a class="navbar-brand" href="<?php echo base_url('halaman_utama'); ?>" style="font-style: normal; font-weight: normal; font-size: 1.25em; line-height: 20px;color:#27c499;">PRIVATIN</a>
            <button class="navbar-toggler" style="background-color:#27c499;" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar1">
                <ul class="navbar-nav ml-auto">
                    <!-- <li class="nav-item active">
                        <a class="nav-link" href="http://bootstrap-ecommerce.com">Home <span class="sr-only">(current)</span></a>
                    </li> -->
                    <?php if ($this->session->userdata('nama')) { ?>
                        <li class="nav-item dropdown pe-3">

                            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                                <!-- <img src="<?= base_url() ?>panel_pengajar/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle"> -->
                                <span class="d-none d-md-block dropdown-toggle ps-2" style="color:#000;"><?php echo $this->session->userdata('nama') ?></span>
                            </a>
                            <!-- End Profile Iamge Icon -->

                            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate3d(-16px, 54px, 0px);">
                                <li class="dropdown-header">
                                    <h6><?php echo $this->session->userdata('nama') ?></h6>
                                    <span>Siswa</span>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('siswa/dashboard'); ?>">
                                        <i class="bi bi-person"></i>
                                        <span>My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('siswa/dashboard'); ?>">
                                        <i class="bi bi-gear"></i>
                                        <span>Account Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('auth/form_login/logoutsiswa') ?>">
                                        <i class="bi bi-box-arrow-right"></i>
                                        <span>Sign Out</span>
                                    </a>
                                </li>

                            </ul>
                            <!-- End Profile Dropdown Items -->
                        </li>
                        <!-- End Profile Nav -->

                        <!-- <li class="nav-item">
                            <a class="navbar-brand" href="<?php echo base_url('siswa/dashboard'); ?>">
                                <div class="text-dark">Selamat Datang <?php echo $this->session->userdata('nama') ?></div>
                            </a>
                        </li> -->

                    <?php } else { ?>
                        
                        <li class="nav-item">
                            <a class="navbar-brand" href="<?php echo base_url('auth/form_login/login'); ?>"><button type="button" class="btn text-" style="background-color: #fff; border: 1px solid #27c499; border-radius: 10px; color:#27c499; ">Masuk</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="<?php echo base_url('auth/register_siswa'); ?>"><button type="button" class="btn text-white" style="border-radius: 10px; background-color: #27c499;">Daftar Sebagai Siswa</button></a>
                        </li>
                        <li class="nav-item">
                            <a class="navbar-brand" href="<?php echo base_url('auth/register'); ?>"><button type="button" class="btn text-white" style=" border-radius: 10px; background-color: #27c499;">Daftar Sebagai Pengajar</button></a>
                        </li>
                    <?php } ?>
                    <!-- <li class="nav-item">
                        <a class="navbar-brand" href="<?php echo base_url('login/cek'); ?>"><button type="button" class="btn text-white" style=" border-radius: 10px; background-color: #27c499;">Logout</button></a>
                    </li> -->
                </ul>
            </div>
        </nav>

        <!-- akhir navbar boostrap -->

        <!-- Navbar Baru -->

        <!-- Navbar Baru Akhir -->