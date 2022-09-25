<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <h1>E-Rekrut Magang</h1>
        <h2>Program ini memberikan kesempatan untuk mahasiswa dapat kesempatan bekerja dalam tim atau individu dalam mengerjakan projek tertentu</h2>
    </div>
</section>
<!-- End Hero -->
<!-- Kategori -->
<section id="kategori">
    <div class="container kategori">
        <div class="row row-judul">
            <h1>Kategori Magang</h1>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="nama-kategori">
                    <h2>Aplikasi</h2>
                    <img src="<?= base_url('assets/img/1.jpg'); ?>" alt="Aplikasi">
                </div>

            </div>
            <div class="col-md">
                <div class="nama-kategori">
                    <h2>Multimedia</h2>
                    <img src="<?= base_url('assets/img/1.jpg'); ?>" alt="Multimedia">
                </div>

            </div>
            <div class="col-md">
                <div class="nama-kategori">
                    <h2>Analis Data</h2>
                    <img src="<?= base_url('assets/img/1.jpg'); ?>" alt="Analis Data">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Kategori -->

<!-- Kriteria -->
<section id="kriteria">
    <div class="container-fluid kriteria border">
            <h1>Kriteria</h1>
            <div class="row aplikasi">
                <h3>Aplikasi</h3>
                <div class="col-md gambar border border-dark">
                    <img src="<?= base_url('assets/img/1.jpg'); ?>" alt="Aplikasi">
                </div>
                <div class="col-md keterangan">
                    <ul>
                        <li>Mahasiswa Semester 5 (D3) / 7 (S1)</li>
                        <li>Mahasiswa dari jurusan Sistem Informasi, teknik informatika, ....</li>
                        <li>Tidak sedang melaksanakan magang di tempat lain</li>
                        <li>Dapat menguasai CodeIgniter 4, HTML, CSS, ...</li>
                    </ul>
                </div>
            </div>
            <div class="row aplikasi">
                <h3>Aplikasi</h3>
                  
                <div class="col-md keterangan">
                    <ul>
                        <li>Mahasiswa Semester 5 (D3) / 7 (S1)</li>
                        <li>Mahasiswa dari jurusan Sistem Informasi, teknik informatika, ....</li>
                        <li>Tidak sedang melaksanakan magang di tempat lain</li>
                        <li>Dapat menguasai CodeIgniter 4, HTML, CSS, ...</li>
                    </ul>
                </div>
            </div>
    </div>
</section>
<!-- End Syarat -->

<div class="container pt-5">

    <div class="card">
        <div class="card-header bg-primary text-white">
            <h4 class="card-title" style="text-align: center;">Data Mahasiswa</h4>
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIM</th>
                            <th>Nama Mahasiswa</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($mahasiswa as $mahasiswa) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $mahasiswa['nim']; ?></td>
                                <td><?= $mahasiswa['nama_mahasiswa']; ?></td>
                                <td><?= $mahasiswa['email']; ?></td>
                                <td>
                                    <a href="<?= base_url('user/edit/' . $mahasiswa['nim']); ?>" class="btn btn-success" data-target="#editModal">
                                        Edit</a>
                                    <a href="<?= base_url('daftar/hapus/' . $mahasiswa['nim']); ?>" onclick="javascript:return confirm('Apakah Anda yakin ingin menghapus data mahasiswa?')" class="btn btn-danger">
                                        Hapus</a>
                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">LOGIN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php if (session()->getFlashdata('popup')) : ?>
                    <div class="alert alert-danger"><?= session()->getFlashdata('popup') ?>
                    </div>
                <?php endif ?>
                <form method="post" action="<?= base_url('daftar/login') ?>">
                    <div class="form-group mb-3">
                        <label for="InputForEmail" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="InputForEmail" placeholder="Masukkan email anda">
                    </div>
                    <div class="form-group mb-3">
                        <label for="InputForPassword" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="InputForPassword" placeholder="Masukkan Password anda">
                    </div>
            </div>
            <div class="d-grid gap-2 col-6 mx-auto mb-2">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
            </form>
            <h4 class="daftar text-center mb-2">Belum Daftar? <a href="<?= base_url('daftar') ?>">Daftar</a></h4>
        </div>
    </div>
</div>
</body>