    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('materi'); ?>"></div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Materi SMP</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <button type="button" class="ion-plus btn btn-block btn-primary" data-toggle="modal" data-target="#modal-tambah-materi"> Tambah materi SMP</button>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="tab" style="align-content: center;">
                    <div class="btn-group" style="width:100%">
                        <button class="tablinks" onclick="openLesson(event, 'kelas_7')" id="defaultOpen">Kelas 7</button>
                        <button class="tablinks" onclick="openLesson(event, 'kelas_8')">Kelas 8</button>
                        <button class="tablinks" onclick="openLesson(event, 'kelas_9')">Kelas 9</button>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->



        <div id="kelas_7" class="tabcontent">

            <!-- Main content -->
            <ul class="nav nav-tabs" id="content-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="matematika-smp7-tab" data-toggle="pill" href="#matematika-smp7" role="tab" aria-controls="matematika-smp7" aria-selected="true">Matematika</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fisika-smp7-tab" data-toggle="pill" href="#fisika-smp7" role="tab" aria-controls="fisika-smp7" aria-selected="false">Fisika</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="kimia-smp7-tab" data-toggle="pill" href="#kimia-smp7" role="tab" aria-controls="kimia-smp7" aria-selected="false">Kimia</a>
                </li>
            </ul>
            <div class="tab-content" id="content-tab">

                <div class="tab-pane fade show active" id="matematika-smp7" role="tabpanel" aria-labelledby="matematika-smp7-tab">
                    matik 7
                    <div class="container row">

                        <?php foreach ($smp_matik7 as $i) : ?>
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

                <div class="tab-pane fade" id="fisika-smp7" role="tabpanel" aria-labelledby="fisika-smp7-tab">
                    fisika 7
                    <div class="container row">

                        <?php foreach ($smp_fisika7 as $i) : ?>
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

                <div class="tab-pane fade" id="kimia-smp7" role="tabpanel" aria-labelledby="kimia-smp7-tab">
                    kimia 7
                    <div class="container row">

                        <?php foreach ($smp_kimia7 as $i) : ?>
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
        </div><!-- /kelas_8 -->

        <div id="kelas_8" class="tabcontent">

            <!-- Main content -->
            <ul class="nav nav-tabs" id="content-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="matematika-smp8-tab" data-toggle="pill" href="#matematika-smp8" role="tab" aria-controls="matematika-smp8" aria-selected="true">Matematika</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fisika-smp8-tab" data-toggle="pill" href="#fisika-smp8" role="tab" aria-controls="fisika-smp8" aria-selected="false">Fisika</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="kimia-smp8-tab" data-toggle="pill" href="#kimia-smp8" role="tab" aria-controls="kimia-smp8" ariaselected="false">Kimia</a>
                </li>
            </ul>
            <div class="tab-content" id="content-tab">

                <div class="tab-pane fade show active" id="matematika-smp8" role="tabpanel" aria-labelledby="matematika-smp8-tab">
                    matik 8
                    <div class="container row">

                        <?php foreach ($smp_matik8 as $i) : ?>
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

                <div class="tab-pane fade" id="fisika-smp8" role="tabpanel" aria-labelledby="fisika-smp8-tab">
                    fisika8
                    <div class="container row">

                        <?php foreach ($smp_fisika8 as $i) : ?>
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

                <div class="tab-pane fade" id="kimia-smp8" role="tabpanel" aria-labelledby="kimia-smp8-tab">
                    kimia 8
                    <div class="container row">

                        <?php foreach ($smp_kimia8 as $i) : ?>
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
        </div><!-- /kelas_8 -->

        <div id="kelas_9" class="tabcontent">

            <!-- Main content -->
            <ul class="nav nav-tabs" id="content-tab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="matematika-smp9-tab" data-toggle="pill" href="#matematika-smp9" role="tab" aria-controls="matematika-smp9" aria-selected="true">Matematika</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="fisika-smp9-tab" data-toggle="pill" href="#fisika-smp9" role="tab" aria-controls="fisika-smp9" aria-selected="false">Fisika</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="kimia-smp9-tab" data-toggle="pill" href="#kimia-smp9" role="tab" aria-controls="kimia-smp9" aria-selected="false">Kimia</a>
                </li>
            </ul>
            <div class="tab-content" id="content-tab">

                <div class="tab-pane fade show active" id="matematika-smp9" role="tabpanel" aria-labelledby="matematika-smp9-tab">
                    matik 9
                    <div class="container row">

                        <?php foreach ($smp_matik9 as $i) : ?>
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

                <div class="tab-pane fade" id="fisika-smp9" role="tabpanel" aria-labelledby="fisika-smp9-tab">
                    fisika 9
                    <div class="container row">

                        <?php foreach ($smp_fisika9 as $i) : ?>
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

                <div class="tab-pane fade" id="kimia-smp9" role="tabpanel" aria-labelledby="kimia-smp9-tab">
                    kimia 9
                    <div class="container row">

                        <?php foreach ($smp_kimia9 as $i) : ?>
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
        </div><!-- /kelas_8 -->



    </div> <!-- /.Content Wrapper -->


    <div class="modal fade" id="modal-tambah-materi">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Materi SMP</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php if ($error !== null) : echo $error;
                    endif; ?>
                    <?= form_open_multipart(base_url('admin_menu/m_materi/upload2')) ?>
                    <input type="hidden" name="id_tingkat" class="form-control" required value="2">
                    <div class="row">
                        <div class="col-lg-6 border-right">
                            <div class="form-group">
                                <label>Kelas</label>
                                <select name="kelas" class="form-control" required>
                                    <option value="7">Kelas 7</option>
                                    <option value="8">Kelas 8</option>
                                    <option value="9">Kelas 9</option>
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
                    <h4 class="modal-title">Update Materi SMP</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- <div id="test"></div> -->
                    <?= form_open_multipart(base_url('admin_menu/m_materi/update_materi')) ?>
                    <input type="hidden" name="id_tingkat" class="form-control" required value="2">
                    <input type="hidden" id="id-materi" name="id_materi" class="form-control" required>
                    <div class="row">
                        <div class="col-lg-6 border-right">
                            <div class="form-group">
                                <label>Kelas</label>
                                <select name="kelas" class="form-control" required>
                                    <option value="7" id="kelas-4">Kelas 7</option>
                                    <option value="8" id="kelas-5">Kelas 8</option>
                                    <option value="9" id="kelas-6">Kelas 9</option>
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