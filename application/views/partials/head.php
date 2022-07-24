<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Privatin</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" sizes="16x16" />
    <link href="<?= base_url() ?>assets/template_dashboard/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/template_dashboard/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/template_dashboard/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/template_dashboard/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/template_dashboard/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/template_dashboard/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/template_dashboard/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!--Sweet Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <!-- Akhir sweetalert -->

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/template_dashboard/assets/css/style.css" rel="stylesheet">

    <style>
        .searchbar {
            margin-bottom: auto;
            margin-top: auto;
            height: 60px;
            background-color: #353b48;
            border-radius: 30px;
            padding: 10px;
        }

        .search_input {
            color: white;
            border: 0;
            outline: 0;
            background: none;
            width: 0;
            caret-color: transparent;
            line-height: 40px;
            transition: width 0.4s linear;
        }

        .searchbar:hover>.search_input {
            padding: 0 10px;
            width: 450px;
            caret-color: red;
            transition: width 0.4s linear;
        }

        .searchbar:hover>.search_icon {
            background: white;
            color: #e74c3c;
        }

        .search_icon {
            height: 40px;
            width: 40px;
            float: right;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            color: white;
            text-decoration: none;
        }



        /* awal untuk tampilan hp*/
        @media only screen and (max-width: 600px) {

            .searchbar:hover>.search_input {
                padding: 0 10px;
                width: 274px;
                caret-color: red;
                transition: width 0.4s linear;
            }

            .searchbar {
                margin-bottom: auto;
                margin-top: auto;
                height: 60px;
                background-color: #353b48;
                border-radius: 30px;
                padding: 10px;
                /* width: -webkit-fill-available; */
            }
        }
    </style>

</head>

<body>