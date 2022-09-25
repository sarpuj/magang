<div class="container-fluid pt-4">
    <div class="row justify-content-md-center">
        <section class="col-12 col-lg-6 col-md-4">
            <?php if (isset($validation)) : ?>
                <div class="alert alert-danger mt-2"><?= $validation->listErrors() ?></div>
            <?php endif; ?>
            <form action="<?= base_url('daftar/tambahUser') ?>" method="post" class="form-container bg-light mt-4">
                <h4 class="text-center">Daftar Akun</h4>
                <div class="form-group mb-3">
                    <label for="InputForNim" class="form-label">NIM</label>
                    <input type="text" name="nim" class="form-control" id="InputForNim" value="<?= set_value('nim') ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="InputForName" class="form-label">Nama Mahasiswa</label>
                    <input type="text" name="nama_mahasiswa" class="form-control" id="InputForName" value="<?= set_value('nama_mahasiswa') ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="InputForEmail" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="InputForEmail" value="<?= set_value('email') ?>">
                </div>
                <div class="form-group mb-3">
                    <label for="InputForPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="InputForPassword">
                </div>
                <div class="form-group mb-3">
                    <label for="InputForConfPassword" class="form-label">Confirm Password</label>
                    <input type="password" name="confpassword" class="form-control" id="InputForConfPassword">
                </div>
                <div class="d-grid gap-2 col-6 mx-auto mb-2">
                    <button type="submit" class="btn btn-primary" onclick="alert()">Daftar</button>
            </form>
        </section>
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
                <form method="post" action="<?= base_url('daftar/tambahUser') ?>">
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