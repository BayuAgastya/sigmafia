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
                            <button type="button" class="ion-plus btn btn-block btn-primary" data-toggle="modal" data-target="#modal-tambah-materi"> Tambah materi SMA</button>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                <div class="tab" style="align-content: center;">
                    <div class="btn-group" style="width:100%">
                        <button class="tablinks" onclick="openLesson(event, 'kelas_10')" id="defaultOpen">Kelas 7</button>
                        <button class="tablinks" onclick="openLesson(event, 'kelas_11')">Kelas 8</button>
                        <button class="tablinks" onclick="openLesson(event, 'kelas_12')">Kelas 9</button>
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
                                <a href="#" style="text-align: center;">
                                    <div id="item-category">
                                        <img class="img-fluid" src="<?= base_url('assets/main/img/konten/sd.png'); ?>" alt="" style="width: auto;">
                                        <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                        <p>tingkat: <?= $i->id_tingkat; ?></p>
                                        <p>matpel: <?= $i->id_matpel; ?></p>
                                        <p>kelas: <?= $i->kelas ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="tab-pane fade" id="fisika-sma10" role="tabpanel" aria-labelledby="fisika-sma10-tab">
                    fisika 10
                    <div class="container row">

                        <?php foreach ($sma_fisika10 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                <a href="#" style="text-align: center;">
                                    <div id="item-category">
                                        <img class="img-fluid" src="<?= base_url('assets/main/img/konten/sd.png'); ?>" alt="" style="width: auto;">
                                        <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                        <p>tingkat: <?= $i->id_tingkat; ?></p>
                                        <p>matpel: <?= $i->id_matpel; ?></p>
                                        <p>kelas: <?= $i->kelas ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="tab-pane fade" id="kimia-sma10" role="tabpanel" aria-labelledby="kimia-sma10-tab">
                    kimia 10
                    <div class="container row">

                        <?php foreach ($sma_kimia10 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                <a href="#" style="text-align: center;">
                                    <div id="item-category">
                                        <img class="img-fluid" src="<?= base_url('assets/main/img/konten/sd.png'); ?>" alt="" style="width: auto;">
                                        <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                        <p>tingkat: <?= $i->id_tingkat; ?></p>
                                        <p>matpel: <?= $i->id_matpel; ?></p>
                                        <p>kelas: <?= $i->kelas ?></p>
                                    </div>
                                </a>
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
                                <a href="#" style="text-align: center;">
                                    <div id="item-category">
                                        <img class="img-fluid" src="<?= base_url('assets/main/img/konten/sd.png'); ?>" alt="" style="width: auto;">
                                        <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                        <p>tingkat: <?= $i->id_tingkat; ?></p>
                                        <p>matpel: <?= $i->id_matpel; ?></p>
                                        <p>kelas: <?= $i->kelas ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="tab-pane fade" id="fisika-sma11" role="tabpanel" aria-labelledby="fisika-sma11-tab">
                    fisika 11
                    <div class="container row">

                        <?php foreach ($sma_fisika11 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                <a href="#" style="text-align: center;">
                                    <div id="item-category">
                                        <img class="img-fluid" src="<?= base_url('assets/main/img/konten/sd.png'); ?>" alt="" style="width: auto;">
                                        <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                        <p>tingkat: <?= $i->id_tingkat; ?></p>
                                        <p>matpel: <?= $i->id_matpel; ?></p>
                                        <p>kelas: <?= $i->kelas ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="tab-pane fade" id="kimia-sma11" role="tabpanel" aria-labelledby="kimia-sma11-tab">
                    kimia 11
                    <div class="container row">

                        <?php foreach ($sma_kimia11 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                <a href="#" style="text-align: center;">
                                    <div id="item-category">
                                        <img class="img-fluid" src="<?= base_url('assets/main/img/konten/sd.png'); ?>" alt="" style="width: auto;">
                                        <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                        <p>tingkat: <?= $i->id_tingkat; ?></p>
                                        <p>matpel: <?= $i->id_matpel; ?></p>
                                        <p>kelas: <?= $i->kelas ?></p>
                                    </div>
                                </a>
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
                                <a href="#" style="text-align: center;">
                                    <div id="item-category">
                                        <img class="img-fluid" src="<?= base_url('assets/main/img/konten/sd.png'); ?>" alt="" style="width: auto;">
                                        <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                        <p>tingkat: <?= $i->id_tingkat; ?></p>
                                        <p>matpel: <?= $i->id_matpel; ?></p>
                                        <p>kelas: <?= $i->kelas ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="tab-pane fade" id="fisika-sma12" role="tabpanel" aria-labelledby="fisika-sma12-tab">
                    fisika 12
                    <div class="container row">

                        <?php foreach ($sma_fisika12 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                <a href="#" style="text-align: center;">
                                    <div id="item-category">
                                        <img class="img-fluid" src="<?= base_url('assets/main/img/konten/sd.png'); ?>" alt="" style="width: auto;">
                                        <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                        <p>tingkat: <?= $i->id_tingkat; ?></p>
                                        <p>matpel: <?= $i->id_matpel; ?></p>
                                        <p>kelas: <?= $i->kelas ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>

                <div class="tab-pane fade" id="kimia-sma12" role="tabpanel" aria-labelledby="kimia-sma12-tab">
                    kimia 12
                    <div class="container row">

                        <?php foreach ($sma_kimia12 as $i) : ?>
                            <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                <a href="#" style="text-align: center;">
                                    <div id="item-category">
                                        <img class="img-fluid" src="<?= base_url('assets/main/img/konten/sd.png'); ?>" alt="" style="width: auto;">
                                        <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                        <p>tingkat: <?= $i->id_tingkat; ?></p>
                                        <p>matpel: <?= $i->id_matpel; ?></p>
                                        <p>kelas: <?= $i->kelas ?></p>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>
        </div><!-- /kelas_12 -->



    </div> <!-- /.Content Wrapper -->


    <div class="modal fade" id="modal-tambah-materi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Materi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php if ($error !== null) : echo $error;
                    endif; ?>
                    <?= form_open_multipart(base_url('admin_menu/m_materi/upload')) ?>
                    <div class="form-group">
                        <label>Tingkat</label>
                        <select name="tingkat" class="form-control">
                            <option value="sd">SD</option>
                            <option value="smp">SMP</option>
                            <option value="sma">SMA</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Materi</label>
                        <select name="materi" class="form-control">
                            <option value="matematika">Matematika</option>
                            <option value="fisika">Fisika</option>
                            <option value="kimia">Kimia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Materi</label>
                        <input name="judul" type="text" class="form-control" placeholder="Masukan Nama Materi" required>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input name="deskripsi" type="text" class="form-control" placeholder="Masukan Deskripsi materi" required>
                    </div>
                    <div class="custom-file">
                        <input name="file" type="file" id="customFile" required>
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