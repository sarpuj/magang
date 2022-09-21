<!-- Menu Login -->

<div class="container container-login pt-5 pb-5">
    <div class="row text-light pt-3 pb-3">
        <div class="col-md">
            <h6 class="login text-center ">LOGIN</h6>
            <form>
            <div class="mb-3">
                <label class="email">Email address</label>
                <input type="email" class="form-control mt-2" id="email" aria-describedby="email">
            </div>
            <div class="mb-3">
                <label class="password">Password</label>
                <input type="password" class="form-control mt-2" id="password" aria-describedby="password">
            </div>
            <button type="submit" class="btn btn-light">Login</button>
            <a class="btn-buat-akun" href="<?= base_url('dashboard/buat_akun')?>">Buat Akun</a>
            </form>
        </div>
    </div>
</div>

<!-- Menu Login End -->