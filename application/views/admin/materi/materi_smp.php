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

                <div class="tab-pane fade" id="fisika-smp7" role="tabpanel" aria-labelledby="fisika-smp7-tab">
                    fisika 7
                    <div class="container row">

                        <?php foreach ($smp_fisika7 as $i) : ?>
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

                <div class="tab-pane fade" id="kimia-smp7" role="tabpanel" aria-labelledby="kimia-smp7-tab">
                    kimia 7
                    <div class="container row">

                        <?php foreach ($smp_kimia7 as $i) : ?>
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

                <div class="tab-pane fade" id="fisika-smp8" role="tabpanel" aria-labelledby="fisika-smp8-tab">
                    fisika8
                    <div class="container row">

                        <?php foreach ($smp_fisika8 as $i) : ?>
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

                <div class="tab-pane fade" id="kimia-smp8" role="tabpanel" aria-labelledby="kimia-smp8-tab">
                    kimia 8
                    <div class="container row">

                        <?php foreach ($smp_kimia8 as $i) : ?>
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

                <div class="tab-pane fade" id="fisika-smp9" role="tabpanel" aria-labelledby="fisika-smp9-tab">
                    fisika 9
                    <div class="container row">

                        <?php foreach ($smp_fisika9 as $i) : ?>
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

                <div class="tab-pane fade" id="kimia-smp9" role="tabpanel" aria-labelledby="kimia-smp9-tab">
                    kimia 9
                    <div class="container row">

                        <?php foreach ($smp_kimia9 as $i) : ?>
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
        </div><!-- /kelas_8 -->



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