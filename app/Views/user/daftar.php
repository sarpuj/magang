<div class="container-fluid pt-4">
    <div class="row justify-content-center">
        <section class="col-12 col-lg-6 col-md-4">
            <form action="" class="form-container bg-light mt-4">
                <h4 class="text-center">Daftar Akun</h4>
                <div class="form-group mb-3">
                    <h5>Kategori & Jenis Permohonan</h5>
                    <label class="control-label" for="kategori">Kategori :</label>
                    <select class="form-select">
                        <option selected disabled>Pilih Kategori Yang Sesuai Dengan Keahlian Anda</option>
                        <option value="multimedia">Multimedia</option>
                        <option value="aplikasi">Aplikasi</option>
                        <option value="analis">Data Analyst</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label class="control-label" for="jenis">Jenis :</label>
                    <select class="form-select">
                        <option selected disabled>Pilih Jenis Kegiatan</option>
                        <option value="individu">Individu</option>
                        <option value="kelompok">Kelompok</option>
                    </select>
                </div>
                <label class="radio mb-1">Jenis Permohonan (KP/Penelitian)</label>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Kerja Praktek
                    </label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Penelitian
                    </label>
                </div>

                <div class="d-grid gap-2 col-6 mx-auto mb-2">
                    <?php if (session()->getFlashdata('success')) { ?>
                        <div class="alert alert-success">
                            <?php echo session()->getFlashdata('success'); ?>
                            <button type="button" class="btn btn-primary" onclick="alert()">Lanjut</button>
                        </div>
                    <?php } ?>

                </div>
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
                <form method="post" action="<?= base_url('user/tambahUser') ?>">
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
                <button type="button" class="btn btn-primary">Login</button>
            </div>
            </form>
            <h4 class="daftar text-center mb-2">Belum Daftar? <a href="<?= base_url('user/daftar_akun') ?>">Daftar</a></h4>
        </div>
    </div>
</div>