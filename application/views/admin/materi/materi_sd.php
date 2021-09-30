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
        </div><!-- /SD -->

        <div id="Kelas_5" class="tabcontent">
            <!-- Main content -->
            <div class="container row">

                <?php foreach ($sd_matik5 as $i) : ?>
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
        </div><!-- /SMP -->

        <div id="Kelas_6" class="tabcontent">
            <!-- Main content -->
            <div class="container row">

                <?php foreach ($sd_matik6 as $i) : ?>
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
                    <?= form_open_multipart(base_url('admin_menu/m_materi/upload')) ?>
                    <div class="form-group">
                        <label>Tingkat</label>
                        <input name="id_tingkat" value="sd" readonly>
                    </div>
                    <div class="form-group">
                        <label>Materi</label>
                        <select name="materi" class="form-control" required>
                            <option value="matematika">Matematika</option>
                            <option value="fisika">Fisika</option>
                            <option value="kimia">Kimia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Judul Materi</label>
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