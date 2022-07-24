<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Web Wanita, Web tentang Wanita, Web Bicara wanita, website tentang wanita, website wanita, website kesehatan, website gaya hidup, website ibu dan anak,bicara-wanita, Website, wanita bicara">
    <meta name="description" content="Bicara Wanita merupakan webiste yang membicarakan hal ehwal wanita secara menyeluruh. Mengadakan ceramah, latihan, bengkel, seminar dan sebagainya berkaitan wanita dan kewanitaan">
    <meta name="author" content="Ageng Subagja dan Faishol susilo permana">
    <title>Bicara Wanita</title> -->

    <!-- CSS Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <!-- CSS BOOSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- script jquery -->
    <!-- <script type="text/javascript" src="<?php echo base_url('jquery.js'); ?>"></script> -->

    <!--Sweet Alert -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>

    <!-- script podcast js -->
    <!-- <script type="text/javascript" src="<?php echo base_url('podcast.js'); ?>"></script> -->

    <!-- JS BOOSTRAP -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- link font roboto untuk font body -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- css icon navbar bawah -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- favicon
    <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" sizes="16x16" /> -->

    <!-- favicon -->
    <link rel="icon" href="<?php echo base_url('favicon.ico'); ?>" sizes="16x16" />



    <style>
        body {
            /* Font Roboto */
            font-family: 'Poppins', sans-serif;
        }

        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        .header-4-2 .modal-item.modal {
            top: 2rem;
        }

        .header-4-2 .navbar,
        .header-4-2 .hero {
            padding: 3rem 2rem;
        }

        .header-4-2 .navbar-light .navbar-nav .nav-link {
            font: 300 18px/1.5rem Poppins, sans-serif;
            color: #1d1e3c;
            transition: 0.3s;
        }

        .header-4-2 .navbar-light .navbar-nav .nav-link:hover {
            font: 600 18px/1.5rem Poppins, sans-serif;
            color: #1d1e3c;
            transition: 0.3s;
        }

        .header-4-2 .navbar-light .navbar-nav .active>.nav-link,
        .header-4-2 .navbar-light .navbar-nav .nav-link.active,
        .header-4-2 .navbar-light .navbar-nav .nav-link.show,
        .header-4-2 .navbar-light .navbar-nav .show>.nav-link {
            font-weight: 600;
            transition: 0.3s;
        }

        .header-4-2 .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='30' height='30' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(0, 0, 0, 1)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .header-4-2 .btn:focus,
        .header-4-2 .btn:active {
            outline: none !important;
        }

        .header-4-2 .btn-fill {
            font: 600 18px / normal Poppins, sans-serif;
            background-color: #27c499;
            border-radius: 12px;
            padding: 12px 32px;
            transition: 0.3s;
        }

        .header-4-2 .btn-fill:hover {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            transition: 0.3s;
        }

        .header-4-2 .btn-no-fill {
            font: 300 18px/1.75rem Poppins, sans-serif;
            color: #1d1e3c;
            padding: 12px 32px;
            transition: 0.3s;
        }

        .header-4-2 .modal-item .modal-dialog .modal-content {
            border-radius: 8px;
            transition: 0.3s;
        }

        .header-4-2 .responsive li a {
            padding: 1rem;
            transition: 0.3s;
        }

        .header-4-2 .text-caption {
            font: 600 0.875rem/1.625 Poppins, sans-serif;
            margin-bottom: 2rem;
            color: #27c499;
        }

        .header-4-2 .left-column {
            margin-bottom: 2.75rem;
            width: 100%;
        }

        .header-4-2 .right-column {
            width: 100%;
        }

        .header-4-2 .title-text-big {
            font: 600 2.25rem/2.5rem Poppins, sans-serif;
            margin-bottom: 2rem;
            color: #272e35;
        }

        .header-4-2 .btn-try {
            font: 600 1rem/1.5rem Poppins, sans-serif;
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
            background-color: #27c499;
            transition: 0.3s;
        }

        .header-4-2 .btn-try:hover {
            --tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
                0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000),
                var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
            transition: 0.3s;
        }

        .header-4-2 .btn-outline {
            font: 400 1rem/1.5rem Poppins, sans-serif;
            border: 1px solid #555b61;
            color: #555b61;
            padding: 1rem 1.5rem;
            border-radius: 0.75rem;
            background-color: transparent;
            transition: 0.3s;
        }

        .header-4-2 .btn-outline:hover {
            border: 1px solid #27c499;
            color: #27c499;
            transition: 0.3s;
        }

        .header-4-2 .btn-outline:hover div path {
            fill: #27c499;
            transition: 0.3s;
        }

        @media (min-width: 576px) {
            .header-4-2 .modal-item .modal-dialog {
                max-width: 95%;
                border-radius: 12px;
            }

            .header-4-2 .navbar {
                padding: 3rem 2rem;
            }

            .header-4-2 .hero {
                padding: 3rem 2rem 5rem;
            }

            .header-4-2 .title-text-big {
                font-size: 3rem;
                line-height: 1.2;
            }
        }

        @media (min-width: 768px) {
            .header-4-2 .navbar {
                padding: 3rem 4rem;
            }

            .header-4-2 .hero {
                padding: 3rem 4rem 5rem;
            }

            .header-4-2 .left-column {
                margin-bottom: 3rem;
            }
        }

        @media (min-width: 992px) {
            .header-4-2 .navbar-expand-lg .navbar-nav .nav-link {
                padding-right: 1.25rem;
                padding-left: 1.25rem;
            }

            .header-4-2 .navbar {
                padding: 3rem 6rem;
            }

            .header-4-2 .hero {
                padding: 3rem 6rem 5rem;
            }

            .header-4-2 .left-column {
                width: 50%;
                margin-bottom: 0;
            }

            .header-4-2 .right-column {
                width: 50%;
            }

            .header-4-2 .title-text-big {
                font-size: 3 rem;
                line-height: 1.2;
            }
        }
    </style>
    <!-- akhir css judul -->
</head>

<body>