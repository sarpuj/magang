<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Magang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('css/style.css'); ?>">
  </head>
  <body>
    <!-- Judul -->
    <div class="container">
        <div class="row pt-3 pb-3">
            <div class="col-3 logo">
                <a href="#">
                    <img src="<?= base_url('img/logo.png'); ?>" alt="Logo" width="100px">
                </a>
            </div>
            <div class="col title text-center align-self-center">
                <h2>Dinas Komunikasi Informatika dan Persandian</h2>
                <h4>Kota Yogyakarta</h4>
            </div>
        </div>
    </div>
    <!-- Akhir Judul -->

    <!-- Nav -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">E-Rekrut</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="<?= base_url('dashboard'); ?>">Home</a>
                    <a class="nav-link" href="https://docs.google.com/document/d/18MTJJ2lfO7cCuekA1WAfEjBX1N_RkzL7PqrJ4WFtMOE/edit">Panduan</a>
                    <a class="nav-link" href="<?= base_url('dashboard/login'); ?>">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Akhir Nav -->
    