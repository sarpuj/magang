<!doctype html>
<html lang="en">

<head>
    <title>E-magang</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= ('/css/style.css') ?>">
    <link href="<?= base_url('/vendor/fontawesome-free/css/all.min.css') ?> " rel="stylesheet">
</head>

<body>
    <header id="header" class="fixed-top bg-success">
        <div class="container-fluid d-flex align-items-center">
            <a href="<?= base_url('user'); ?>" class="logo me-auto">
                <img src="<?= ('/assets/img/kominfo.png') ?>" alt="" width="80" height="90" class="d-inline-block align-text-center ms-2">
                E-REKRUT
            </a>


            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="<?= base_url('user'); ?>">Beranda</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="fas fa-user"></i> Login
            </button>
        </div>
    </header><!-- End Header -->