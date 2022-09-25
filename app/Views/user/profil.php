    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper pt-4">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Profil</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url('user/dataMhs')?>">Home</a></li>
                            <li class="breadcrumb-item active">Profil</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="<?= base_url('assets/img/default.jpg') ?>" class="img   rounded-circle" alt="">
                </div>
                <div class="col-md-3">
                    <label for="">NIM Mahasiswa</label>
                    <?php 
                        foreach ($mahasiswa as $mahasiswa) { ?>
                        
                                <?= $mahasiswa['nim']; ?>
                                <?= $mahasiswa['nama_mahasiswa']; ?>
                                <?= $mahasiswa['email']; ?>
                                
                                
                            
                        <?php
                        } ?>
                    <label for="">Nama Mahasiswa</label>
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required>
                    <button type="submit" class="btn btn-success btn-block">Ubah Password</button>

                </div>
            </div>

        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->