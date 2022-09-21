<!-- Buat Akun -->

<div class="container container-akun pt-5 pb-5">
    <div class="row text-light pt-3 pb-3">
        <div class="col-md">
            <h6>Buat Akun!</h6>
            <form>
            <div class="mb-3">
                <label class="name">Nama</label>
                <input type="text" class="form-control mt-2" id="name" aria-describedby="name">
            </div>
            <div class="mb-3">
                <label class="email">Email address</label>
                <input type="email" class="form-control mt-2" id="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label class="password">Password</label>
                <input type="password" class="form-control mt-2" id="password" aria-describedby="password">
            </div>
            <div class="mb-3">
                <label class="password2">Ulangi Password</label>
                <input type="password" class="form-control mt-2" id="password2" aria-describedby="password2">
            </div>
            <button type="submit" class="btn btn-light">Buat Akun</button>
            <a class="btn btn-buat-akun btn-light" href="<?= base_url('dashboard/login')?>">Kembali</a>
            </form>
        </div>
    </div>
</div>

<!-- End Buat Akun -->