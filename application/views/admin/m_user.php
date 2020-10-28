    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Manage User</h1>

                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('user'); ?>"></div>

                        <a style="margin-top: 5px; margin-bottom:5px;" class="ion-card btn btn-primary" href="<?php echo base_url('admin_menu/m_user/requestPage') ?>"> Membership Request</a>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <button type="button" class="ion-plus btn btn-block btn-primary" data-toggle="modal" data-target="#modal-tambah-user"> Tambah User</button>
                            <button type="button" class="ion-plus btn btn-block btn-primary" data-toggle="modal" data-target="#modal-tambah-admin"> Tambah admin</button>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class=" card-body">
            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill" href="#custom-content-below-matematika" role="tab" aria-controls="custom-content-below-home" aria-selected="true">User</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill" href="#custom-content-below-fisika" role="tab" aria-controls="custom-content-below-profile" aria-selected="false">Admin</a>
                </li>
            </ul>
            <div class="tab-content" id="custom-content-below-tabContent">
                <div class="tab-pane fade show active" id="custom-content-below-matematika" role="tabpanel" aria-labelledby="custom-content-below-matematika-tab">

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar Tabel User</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body table-responsive p-0" style="height: 300px;">
                                    <table class="table table-head-fixed">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>id_murid</th>
                                                <th>Username</th>
                                                <th>role</th>
                                                <th>Membership</th>
                                                <th>End Date</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data_user as $i) : ?>
                                                <tr>
                                                    <td style="width:05%"><?php echo $i->user_id; ?></td>
                                                    <td style="width:10%"><?php echo $i->id_murid; ?></td>
                                                    <td style="width:10%"><?php echo $i->username; ?></td>
                                                    <td style="width:05%"><?php echo $i->role; ?></td>
                                                    <td style="width:10%"><?php echo $i->akses_konten; ?></td>
                                                    <td style="width:15%"><?php echo $i->endDate; ?></td>
                                                    <td style="width:30%">
                                                        <a href="<?= base_url('detailUser/' . $i->id_murid) ?>" type="button" class="btn btn-warning btn-circle">
                                                            <i class="fas fa-low-vision"></i>
                                                        </a>
                                                        <a href="<?= base_url('hapusUser/' . $i->user_id) ?>" type="button" class="btn btn-danger btn-circle" onclick="return confirm('Yakin ingin menghapus data ?')">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                        <a href="<?= base_url('editUserPage/' . $i->user_id) ?>" class="btn btn-info btn-circle">
                                                            <i class="fas fa-edit"></i>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="custom-content-below-fisika" role="tabpanel" aria-labelledby="custom-content-below-fisika-tab">

                    <div class="row" style="margin-top: 10px;">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Daftar Tabel Admin</h3>

                                    <div class="card-tools">
                                        <div class="input-group input-group-sm" style="width: 150px;">
                                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                            <div class="input-group-append">
                                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body table-responsive p-0" style="height: 300px;">
                                    <table class="table table-head-fixed">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>role</th>
                                                <th>Akses</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data_admin as $i) : ?>
                                                <tr>
                                                    <td style="width:05%"><?php echo $i->user_id; ?></td>
                                                    <td style="width:25%"><?php echo $i->username; ?></td>
                                                    <td style="width:20%"><?php echo $i->role; ?></td>
                                                    <td style="width:10%"><?php echo $i->akses_konten; ?></td>
                                                    <td style="width:30%">
                                                        <a href="<?= base_url('hapusUser/' . $i->user_id) ?>" type="button" class="btn btn-danger btn-circle" onclick="return confirm('Yakin ingin menghapus data ?')">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                        <a href="<?= base_url('editUserPage/' . $i->user_id) ?>" class="btn btn-info btn-circle">
                                                            <i class="fas fa-edit"></i>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-tambah-user">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah User</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('tambahUser'); ?>">
                        <div class="">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukan Password" required>
                        </div>
                        <!-- <div class="form-group" style="margin-top: 20px">
                            <label>Akses Konten : </label>
                            <input type="radio" id="yes" name="akses_konten" value="yes">
                            <label for="yes">Yes</label>
                            <input type="radio" id="no" name="akses_konten" value="no">
                            <label for="no">No </label>
                        </div> -->
                        <hr style="border:solid 1px">
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
                            </div>
                            <div class="col-sm-6">
                                <label>Asal Sekolah</label>
                                <input type="text" name="asal_sekolah" class="form-control" placeholder="Masukan Nama Asal Sekolah">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat Rumah</label>
                            <input type="text" name="alamat_rumah" class="form-control" placeholder="Masukan Alamat Rumah">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>ID Instagram</label>
                                <input type="text" name="instagram" class="form-control" placeholder="Masukan ID Instagram">
                            </div>
                            <div class="col-sm-6">
                                <label>ID Line</label>
                                <input type="text" name="line" class="form-control" placeholder="Masukan ID Line">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <label>Nomer Whatsaap</label>
                                <input type="text" name="whatsaap" class="form-control" placeholder="Masukan Nomer Whatsaap">
                            </div>
                            <div class="col-sm-6">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Masukan Alamat Email">
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary btn-block" style="margin-right: 0; margin-left:auto">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-tambah-admin">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah admin</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="<?= base_url('tambahAdmin'); ?>">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Masukan Username" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukan Password" required>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary btn-block" style="margin-right: 0; margin-left:auto">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>