<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico" /> -->
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_template/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_template/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_template/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_template/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_template/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_template/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_template/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/login_template/css/main.css">
    <!--===============================================================================================-->

    <!-- favicon -->
    <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" sizes="16x16" />

</head>

<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <form class="login100-form validate-form p-l-55 p-r-55 p-t-178" method="post" action="<?php echo base_url('auth/form_login/login') ?>">
                    <span class=" login100-form-title" style="background-color: #074f97;">
                        Masuk
                    </span>

                    <?php echo $this->session->flashdata('pesan') ?>
                    <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                        <input class="input100" type="text" name="nama" placeholder="Username">
                        <span class="focus-input100"></span>
                        <?php echo form_error('nama', '<div class="text-danger small ml-2"', '</div>'); ?>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Please enter password">
                        <input class="input100" type="password" name="password" id="pass" placeholder="Password">
                        <span class="focus-input100"></span>
                        <?php echo form_error('password', '<div class="text-danger small ml-2"', '</div>'); ?>
                    </div>


                    <div class="text-left p-t-13 p-b-23 mb-4" style="padding: 7px;">
                        <input onclick="togglePasswordVisibility()" style="margin-right: 4px;" type="checkbox"><span>Show Password</span>
                    </div>
                    <!-- <div class="col-4 text-right p-t-13 p-b-23">
                            <span class="txt1">
                                Forgot
                            </span>

                            <a href="#" class="txt2">
                                Username / Password?
                            </a>
                        </div> -->

                    <div class="container-login100-form-btn mb-5" >
                        <button class="login100-form-btn" type="submit" style="background-color: #074f97;">
                            Login
                        </button>
                    </div>

                    <div class="flex-col-c p-t-17 p-b-40">
                        <span class="txt1 p-b-9">
                            Belum punya Akun ?
                        </span>

                        <a href="<?php echo base_url() . 'halaman_utama' ?>" class="txt3" style="color: #074f97;">
                            Daftar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- script untuk show password -->
    <script>
        const passwordInput = document.getElementById("pass");
        const togglePasswordVisibility = () => {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        };
    </script>


    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login_template/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login_template/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login_template/vendor/bootstrap/js/popper.js"></script>
    <script src="<?= base_url() ?>assets/login_template/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login_template/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login_template/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/login_template/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login_template/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?= base_url() ?>assets/login_template/js/main.js"></script>

</body>

</html>