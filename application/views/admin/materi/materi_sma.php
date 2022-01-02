    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('materi'); ?>"></div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Materi SMA</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <button type="button" class="ion-plus btn btn-block btn-primary" data-toggle="modal" data-target="#modal-tambah-materi"> Tambah materi SMA</button>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="tab" style="align-content: center;">
                    <div class="btn-group" style="width:100%">
                        <button class="tablinks" onclick="openLesson(event, 'kelas_10')" id="defaultOpen">Kelas 10</button>
                        <button class="tablinks" onclick="openLesson(event, 'kelas_11')">Kelas 11</button>
                        <button class="tablinks" onclick="openLesson(event, 'kelas_12')">Kelas 12</button>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->



        <div id="kelas_10" class="tabcontent">

            <!-- Main content -->
            <ul class="nav nav-tabs" id="content-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="matematika-sma10-tab" data-toggle="pill" href="#matematika-sma10" role="tab" aria-controls="matematika-sma10" aria-selected="true">Matematika</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fisika-sma10-tab" data-toggle="pill" href="#fisika-sma10" role="tab" aria-controls="fisika-sma10" aria-selected="false">Fisika</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="kimia-sma10-tab" data-toggle="pill" href="#kimia-sma10" role="tab" aria-controls="kimia-sma10" aria-selected="false">Kimia</a>
                </li>
            </ul>
            <div class="tab-content" id="content-tab">

                <div class="tab-pane fade show active" id="matematika-sma10" role="tabpanel" aria-labelledby="matematika-sma10-tab">
                    matik 10
                    <div class="container row">

                        <?php foreach ($sma_matik10 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">

                                <div id="item-category" style="text-align: center;">
                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                    <p>tingkat: <?= $i->id_tingkat; ?></p>
                                    <p>matpel: <?= $i->id_matpel; ?></p>
                                    <p>kelas: <?= $i->kelas ?></p>
                                    <a href="#" type="button" class="btn btn-danger" onclick="deleteMateri(<?= $i->id_materi; ?>);">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                    <a href="#" type="button" class="btn btn-info" onclick="getMateri(<?= $i->id_materi; ?>);" data-toggle="modal" data-target="#modal-update-materi">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="tab-pane fade" id="fisika-sma10" role="tabpanel" aria-labelledby="fisika-sma10-tab">
                    fisika 10
                    <div class="container row">

                        <?php foreach ($sma_fisika10 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">

                                <div id="item-category" style="text-align: center;">
                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                    <p>tingkat: <?= $i->id_tingkat; ?></p>
                                    <p>matpel: <?= $i->id_matpel; ?></p>
                                    <p>kelas: <?= $i->kelas ?></p>
                                    <a href="#" type="button" class="btn btn-danger" onclick="deleteMateri(<?= $i->id_materi; ?>);">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                    <a href="#" type="button" class="btn btn-info" onclick="getMateri(<?= $i->id_materi; ?>);" data-toggle="modal" data-target="#modal-update-materi">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="tab-pane fade" id="kimia-sma10" role="tabpanel" aria-labelledby="kimia-sma10-tab">
                    kimia 10
                    <div class="container row">

                        <?php foreach ($sma_kimia10 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">

                                <div id="item-category" style="text-align: center;">
                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                    <p>tingkat: <?= $i->id_tingkat; ?></p>
                                    <p>matpel: <?= $i->id_matpel; ?></p>
                                    <p>kelas: <?= $i->kelas ?></p>
                                    <a href="#" type="button" class="btn btn-danger" onclick="deleteMateri(<?= $i->id_materi; ?>);">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                    <a href="#" type="button" class="btn btn-info" onclick="getMateri(<?= $i->id_materi; ?>);" data-toggle="modal" data-target="#modal-update-materi">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div><!-- /kelas_10 -->

        <div id="kelas_11" class="tabcontent">

            <!-- Main content -->
            <ul class="nav nav-tabs" id="content-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="matematika-sma11-tab" data-toggle="pill" href="#matematika-sma11" role="tab" aria-controls="matematika-sma11" aria-selected="true">Matematika</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fisika-sma11-tab" data-toggle="pill" href="#fisika-sma11" role="tab" aria-controls="fisika-sma11" aria-selected="false">Fisika</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="kimia-sma11-tab" data-toggle="pill" href="#kimia-sma11" role="tab" aria-controls="kimia-sma11" ariaselected="false">Kimia</a>
                </li>
            </ul>
            <div class="tab-content" id="content-tab">

                <div class="tab-pane fade show active" id="matematika-sma11" role="tabpanel" aria-labelledby="matematika-sma11-tab">
                    matik 11
                    <div class="container row">

                        <?php foreach ($sma_matik11 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">

                                <div id="item-category" style="text-align: center;">
                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                    <p>tingkat: <?= $i->id_tingkat; ?></p>
                                    <p>matpel: <?= $i->id_matpel; ?></p>
                                    <p>kelas: <?= $i->kelas ?></p>
                                    <a href="#" type="button" class="btn btn-danger" onclick="deleteMateri(<?= $i->id_materi; ?>);">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                    <a href="#" type="button" class="btn btn-info" onclick="getMateri(<?= $i->id_materi; ?>);" data-toggle="modal" data-target="#modal-update-materi">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="tab-pane fade" id="fisika-sma11" role="tabpanel" aria-labelledby="fisika-sma11-tab">
                    fisika 11
                    <div class="container row">

                        <?php foreach ($sma_fisika11 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">

                                <div id="item-category" style="text-align: center;">
                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                    <p>tingkat: <?= $i->id_tingkat; ?></p>
                                    <p>matpel: <?= $i->id_matpel; ?></p>
                                    <p>kelas: <?= $i->kelas ?></p>
                                    <a href="#" type="button" class="btn btn-danger" onclick="deleteMateri(<?= $i->id_materi; ?>);">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                    <a href="#" type="button" class="btn btn-info" onclick="getMateri(<?= $i->id_materi; ?>);" data-toggle="modal" data-target="#modal-update-materi">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="tab-pane fade" id="kimia-sma11" role="tabpanel" aria-labelledby="kimia-sma11-tab">
                    kimia 11
                    <div class="container row">

                        <?php foreach ($sma_kimia11 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">

                                <div id="item-category" style="text-align: center;">
                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                    <p>tingkat: <?= $i->id_tingkat; ?></p>
                                    <p>matpel: <?= $i->id_matpel; ?></p>
                                    <p>kelas: <?= $i->kelas ?></p>
                                    <a href="#" type="button" class="btn btn-danger" onclick="deleteMateri(<?= $i->id_materi; ?>);">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                    <a href="#" type="button" class="btn btn-info" onclick="getMateri(<?= $i->id_materi; ?>);" data-toggle="modal" data-target="#modal-update-materi">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
        </div><!-- /kelas_11 -->

        <div id="kelas_12" class="tabcontent">

            <!-- Main content -->
            <ul class="nav nav-tabs" id="content-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="matematika-sma12-tab" data-toggle="pill" href="#matematika-sma12" role="tab" aria-controls="matematika-sma12" aria-selected="true">Matematika</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fisika-sma12-tab" data-toggle="pill" href="#fisika-sma12" role="tab" aria-controls="fisika-sma12" aria-selected="false">Fisika</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="kimia-sma12-tab" data-toggle="pill" href="#kimia-sma12" role="tab" aria-controls="kimia-sma12" aria-selected="false">Kimia</a>
                </li>
            </ul>
            <div class="tab-content" id="content-tab">

                <div class="tab-pane fade show active" id="matematika-sma12" role="tabpanel" aria-labelledby="matematika-sma12-tab">
                    matik 12
                    <div class="container row">

                        <?php foreach ($sma_matik12 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">

                                <div id="item-category" style="text-align: center;">
                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                    <p>tingkat: <?= $i->id_tingkat; ?></p>
                                    <p>matpel: <?= $i->id_matpel; ?></p>
                                    <p>kelas: <?= $i->kelas ?></p>
                                    <a href="#" type="button" class="btn btn-danger" onclick="deleteMateri(<?= $i->id_materi; ?>);">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                    <a href="#" type="button" class="btn btn-info" onclick="getMateri(<?= $i->id_materi; ?>);" data-toggle="modal" data-target="#modal-update-materi">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="tab-pane fade" id="fisika-sma12" role="tabpanel" aria-labelledby="fisika-sma12-tab">
                    fisika 12
                    <div class="container row">

                        <?php foreach ($sma_fisika12 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">

                                <div id="item-category" style="text-align: center;">
                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                    <p>tingkat: <?= $i->id_tingkat; ?></p>
                                    <p>matpel: <?= $i->id_matpel; ?></p>
                                    <p>kelas: <?= $i->kelas ?></p>
                                    <a href="#" type="button" class="btn btn-danger" onclick="deleteMateri(<?= $i->id_materi; ?>);">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                    <a href="#" type="button" class="btn btn-info" onclick="getMateri(<?= $i->id_materi; ?>);" data-toggle="modal" data-target="#modal-update-materi">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="tab-pane fade" id="kimia-sma12" role="tabpanel" aria-labelledby="kimia-sma12-tab">
                    kimia 12
                    <div class="container row">

                        <?php foreach ($sma_kimia12 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">

                                <div id="item-category" style="text-align: center;">
                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                    <p>tingkat: <?= $i->id_tingkat; ?></p>
                                    <p>matpel: <?= $i->id_matpel; ?></p>
                                    <p>kelas: <?= $i->kelas ?></p>
                                    <a href="#" type="button" class="btn btn-danger" onclick="deleteMateri(<?= $i->id_materi; ?>);">
                                        <i class="fas fa-trash"></i> Delete
                                    </a>
                                    <a href="#" type="button" class="btn btn-info" onclick="getMateri(<?= $i->id_materi; ?>);" data-toggle="modal" data-target="#modal-update-materi">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                </div>

                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div><!-- /kelas_12 -->



    </div> <!-- /.Content Wrapper -->


    <div class="modal fade" id="modal-tambah-materi">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Materi SMA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php if ($error !== null) : echo $error;
                    endif; ?>
                    <?= form_open_multipart(base_url('admin_menu/m_materi/upload2')) ?>
                    <input type="hidden" name="id_tingkat" class="form-control" required value="3">
                    <div class="row">
                        <div class="col-lg-6 border-right">
                            <div class="form-group">
                                <label>Kelas</label>
                                <select name="kelas" class="form-control" required>
                                    <option value="10">Kelas 10</option>
                                    <option value="11">Kelas 11</option>
                                    <option value="12">Kelas 12</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mata Pelajaran</label>
                                <select name="id_matpel" class="form-control" required>
                                    <option value="1">Matematika</option>
                                    <option value="2">Fisika</option>
                                    <option value="3">Kimia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <label>Thumnail Materi</label><br>
                                    <input name="thumbnail_materi" class="form-control" type="file" id="customFile" accept="image/png, image/jpeg, image/jpg, image/gif" required>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 ">
                            <div class="form-group">
                                <label>Judul Materi</label>
                                <input name="judul_materi" type="text" class="form-control" placeholder="Masukan Nama Materi" required>
                            </div>
                            <div class="form-group" style="padding-top: 4px;">
                                <label>Deskripsi</label>
                                <input name="deskripsi" type="text" class="form-control" placeholder="Masukan Deskripsi materi" required>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="title-youtube">Judul Video</label>
                                <input type="text" name="judul[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <label for="link-youtube">Link Youtube</label>
                                <input type="text" name="link[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <div class="form-group">
                                <label for="submit-link-youtube">&nbsp; &nbsp;</label>
                                <a class="btn btn-primary btn-primary add-new-link">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="add-new"></div>
                    <div class="form-group">
                        <div class="custom-file">
                            <label>File materi (optional)</label> <br>
                            <input name="file" type="file" id="customFile">
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-block" value="upload">Simpan</button>
                    <?= form_close(); ?>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <div class="modal fade" id="modal-update-materi">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Update Materi SMA</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <div id="test"></div> -->
                    <?= form_open_multipart(base_url('admin_menu/m_materi/update_materi')) ?>
                    <input type="hidden" name="id_tingkat" class="form-control" required value="3">
                    <input type="hidden" id="id-materi" name="id_materi" class="form-control" required>
                    <div class="row">
                        <div class="col-lg-6 border-right">
                            <div class="form-group">
                                <label>Kelas</label>
                                <select name="kelas" class="form-control" required>
                                    <option value="10" id="kelas-10">Kelas 10</option>
                                    <option value="11" id="kelas-11">Kelas 11</option>
                                    <option value="12" id="kelas-12">Kelas 12</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mata Pelajaran</label>
                                <select name="id_matpel" class="form-control" required>
                                    <option value="1">Matematika</option>
                                    <option value="2">Fisika</option>
                                    <option value="3">Kimia</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <div class="custom-file">
                                    <label>Thumbnail Materi</label><br>
                                    <input name="thumbnail_materi" class="form-control" type="file" id="customFile" accept="image/png, image/jpeg, image/jpg, image/gif">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 ">

                            <div class="form-group">
                                <label>Judul Materi</label>
                                <input name="judul_materi" id="judul-materi" type="text" class="form-control" placeholder="Masukan Nama Materi" required>
                            </div>
                            <div class="form-group" style="padding-top: 4px;">
                                <label>Deskripsi</label>
                                <input name="deskripsi" id="deskripsi" type="text" class="form-control" placeholder="Masukan Deskripsi materi" required>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="title-youtube">Judul Video</label>
                                <input type="text" id="judul-video" name="judul[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <label for="link-youtube">Link Youtube</label>
                                <input type="text" id="link-video" name="link[]" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <div class="form-group">
                                <label for="submit-link-youtube">&nbsp; &nbsp;</label>
                                <a class="btn btn-primary btn-primary add-new-link">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="add-new"></div>
                    <div class="form-group">
                        <div class="custom-file">
                            <label>File materi (optional)</label> <br>
                            <input name="file" type="file" id="customFile">
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-block" value="upload">Update</button>
                    <?= form_close(); ?>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>