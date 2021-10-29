    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('materi'); ?>"></div>
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Materi SD</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <button type="button" class="ion-plus btn btn-block btn-primary" data-toggle="modal" data-target="#modal-tambah-materi"> Tambah materi SD</button>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="tab" style="align-content: center;">
                    <div class="btn-group" style="width:100%">
                        <button class="tablinks" onclick="openLesson(event, 'Kelas_4')" id="defaultOpen">Kelas 4</button>
                        <button class="tablinks" onclick="openLesson(event, 'Kelas_5')">Kelas 5</button>
                        <button class="tablinks" onclick="openLesson(event, 'Kelas_6')">Kelas 6</button>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div id="Kelas_4" class="tabcontent">
            <!-- Main content -->
            <div class="container row">

                <?php foreach ($sd_matik4 as $i) : ?>
                    <div class="col-lg-4 col-sm-6 col-12 mb-3">

                        <div id="item-category" style="text-align: center;">
                            <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->file); ?>" alt="" style="width: auto; height: 150px;">
                            <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                            <p>tingkat: <?= $i->id_tingkat; ?></p>
                            <p>matpel: <?= $i->id_matpel; ?></p>
                            <p>kelas: <?= $i->kelas ?></p>
                            <a href="#" type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                            <a href="#" type="button" class="btn btn-info" onclick="return confirm('Yakin ingin menghapus data ?')">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </div>

                    </div>
                <?php endforeach; ?>

            </div>
        </div><!-- /SD -->

        <div id="Kelas_5" class="tabcontent">
            <!-- Main content -->
            <div class="container row">

                <?php foreach ($sd_matik5 as $i) : ?>
                    <div class="col-lg-4 col-sm-6 col-12 mb-3">
                        <div id="item-category" style="text-align: center;">
                            <img class="img-fluid" src="<?= base_url('assets/main/img/konten/sd.png'); ?>" alt="" style="width: auto;">
                            <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                            <p>tingkat: <?= $i->id_tingkat; ?></p>
                            <p>matpel: <?= $i->id_matpel; ?></p>
                            <p>kelas: <?= $i->kelas ?></p>
                            <a href="#" type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                            <a href="#" type="button" class="btn btn-info" onclick="return confirm('Yakin ingin menghapus data ?')">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div><!-- /SMP -->

        <div id="Kelas_6" class="tabcontent">
            <!-- Main content -->
            <div class="container row">

                <?php foreach ($sd_matik6 as $i) : ?>
                    <div class="col-lg-4 col-sm-6 col-12 mb-3">
                        <div id="item-category" style="text-align: center;">
                            <img class="img-fluid" src="<?= base_url('assets/main/img/konten/sd.png'); ?>" alt="" style="width: auto;">
                            <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                            <p>tingkat: <?= $i->id_tingkat; ?></p>
                            <p>matpel: <?= $i->id_matpel; ?></p>
                            <p>kelas: <?= $i->kelas ?></p>
                            <a href="#" type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">
                                <i class="fas fa-trash"></i> Delete
                            </a>
                            <a href="#" type="button" class="btn btn-info" onclick="return confirm('Yakin ingin menghapus data ?')">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div><!-- /SMA -->

    </div> <!-- /.Content Wrapper -->


    <div class="modal fade" id="modal-tambah-materi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Materi SD</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php if ($error !== null) : echo $error;
                    endif; ?>
                    <?= form_open_multipart(base_url('admin_menu/m_materi/upload2')) ?>
                    <input type="hidden" name="id_tingkat" class="form-control" required value="1">
                    <input type="hidden" name="id_matpel" class="form-control" required value="1">
                    <div class="row">
                        <div class="col-lg-6 border-right">
                            <div class="form-group">
                                <label>Kelas</label>
                                <select name="kelas" class="form-control" required>
                                    <option value="4">Kelas 4</option>
                                    <option value="5">Kelas 5</option>
                                    <option value="6">Kelas 6</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Judul Materi</label>
                                <input name="judul_materi" type="text" class="form-control" placeholder="Masukan Nama Materi" required>
                            </div>
                        </div>

                        <div class="col-lg-6 ">
                            <div class="form-group">
                                <div class="custom-file">
                                    <label>Thumnail Materi</label><br>
                                    <input name="thumbnail_materi" class="form-control" type="file" id="customFile" accept="image/png, image/jpeg, image/jpg, image/gif" required>
                                </div>
                            </div>
                            <div class="form-group" style="padding-top: 4px;">
                                <label>Deskripsi</label>
                                <input name="deskripsi" type="text" class="form-control" placeholder="Masukan Deskripsi materi" required>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="form-group">
                                <label for="link-youtube">URL Video</label>
                                <input type="text" name="link[]" class="form-control">
                            </div>
                            <div id="add-new-1"></div>
                        </div>
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label for="submit-link-youtube">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</label>
                                <a id="add-new-link" class="btn btn-primary btn-primary">Add</a>
                            </div>
                            <div id="add-new-2"></div>
                        </div>
                    </div>
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