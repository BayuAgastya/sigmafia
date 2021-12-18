<section class="banner_area mb-3">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Materi SMA</h2>
                        <div class="page_link">
                            <a href="<?= base_url('home'); ?>">Home</a>
                            <a href="<?= base_url('materi'); ?>">Materi</a>
                            <a href="<?= base_url('materi/sma'); ?>">SMA</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================ Start Course Details Area =================-->
<div class="row mb-1 ml-0">
    <div class="btn-custom">
        <a href="<?= base_url('materi'); ?>"><span class="ti-angle-left"></span> Back </a>
    </div>
</div>

<?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
    <div class="container">
        <div class="row">
            <div class="tab" style="align-content: center;">
                <div class="btn-group" style="width:100%">
                    <button class="tablinks" onclick="openLesson(event, 'Kelas_10')">Kelas 10</button>
                    <button class="tablinks" onclick="openLesson(event, 'Kelas_11')">Kelas 11</button>
                    <button class="tablinks" onclick="openLesson(event, 'Kelas_12')">Kelas 12</button>
                </div>
            </div>
        </div>
    </div>

<?php } else if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() != "yes") { ?>
<?php } else { ?>
<?php } ?>



<section class="course_details_area mb-5 mt-3">
    <div class="container" style="padding: 0px;">
        <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
            <div class="course_details_left">
                <div class="content_wrapper">

                    <!-- ========================================== pembatas ========================================== -->

                    <div id="Kelas_10" class="tabcontent" style="padding: 0px;">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="kelas7-matik-tab" data-toggle="pill" href="#kelas7-matik" role="tab" aria-controls="kelas7-matik" aria-selected="true">Matematika</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="kelas7-fisika-tab" data-toggle="pill" href="#kelas7-fisika" role="tab" aria-controls="kelas7-fisika" aria-selected="false">Fisika</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="kelas7-kimia-tab" data-toggle="pill" href="#kelas7-kimia" role="tab" aria-controls="kelas7-kimia" aria-selected="false">Kimia</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="kelas7-matik" role="tabpanel" aria-labelledby="sma-kelas7-matik">

                                <h4 class="title">Materi Matematika</h4>
                                <div class="content row">

                                    <?php foreach ($sma_matik10 as $i) : ?>
                                        <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                            <a href="<?= base_url('viewmateriSMA/' . $i->id_materi) ?>" style="text-align: center;">
                                                <div id="item-category">
                                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                                    <p><?= $i->deskripsi ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="kelas7-fisika" role="tabpanel" aria-labelledby="kelas7-fisika">
                                <h4 class="title">Materi Fisika</h4>
                                <div class="content row">

                                    <?php foreach ($sma_fisika10 as $i) : ?>
                                        <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                            <a href="<?= base_url('viewmateriSMA/' . $i->id_materi) ?>" style="text-align: center;">
                                                <div id="item-category">
                                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                                    <p><?= $i->deskripsi ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="kelas7-kimia" role="tabpanel" aria-labelledby="kelas7-kimia">
                                <h4 class="title">Materi Kimia</h4>
                                <div class="content row">

                                    <?php foreach ($sma_kimia10 as $i) : ?>
                                        <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                            <a href="<?= base_url('viewmateriSMP/' . $i->id_materi) ?>" style="text-align: center;">
                                                <div id="item-category">
                                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                                    <p><?= $i->deskripsi ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ========================================== pembatas ========================================== -->

                    <div id="Kelas_11" class="tabcontent" style="padding: 0px;">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="sma-matik8-tab" data-toggle="pill" href="#sma-matik8" role="tab" aria-controls="sma-matik8" aria-selected="true">Matematika</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sma-fisika8-tab" data-toggle="pill" href="#sma-fisika8" role="tab" aria-controls="sma-fisika8" aria-selected="false">Fisika</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sma-kimia8-tab" data-toggle="pill" href="#sma-kimia8" role="tab" aria-controls="sma-kimia8" aria-selected="false">Kimia</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="sma-matik8" role="tabpanel" aria-labelledby="sma-matik8">

                                <h4 class="title">Materi Matematika</h4>
                                <div class="content row">

                                    <?php foreach ($sma_matik11 as $i) : ?>
                                        <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                            <a href="<?= base_url('viewmateriSMP/' . $i->id_materi) ?>" style="text-align: center;">
                                                <div id="item-category">
                                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                                    <p><?= $i->deskripsi ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="sma-fisika8" role="tabpanel" aria-labelledby="sma-fisika8">
                                <h4 class="title">Materi Fisika</h4>
                                <div class="content row">

                                    <?php foreach ($sma_fisika11 as $i) : ?>
                                        <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                            <a href="<?= base_url('viewmateriSMP/' . $i->id_materi) ?>" style="text-align: center;">
                                                <div id="item-category">
                                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                                    <p><?= $i->deskripsi ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="sma-kimia8" role="tabpanel" aria-labelledby="sma-kimia8">
                                <h4 class="title">Materi Kimia</h4>
                                <div class="content row">

                                    <?php foreach ($sma_kimia11 as $i) : ?>
                                        <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                            <a href="<?= base_url('viewmateriSMP/' . $i->id_materi) ?>" style="text-align: center;">
                                                <div id="item-category">
                                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                                    <p><?= $i->deskripsi ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ========================================== pembatas ========================================== -->
                    <div id="Kelas_12" class="tabcontent" style="padding: 0px;">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="sma-matik9-tab" data-toggle="pill" href="#sma-matik9" role="tab" aria-controls="sma-matik9" aria-selected="true">Matematika</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sma-fisika9-tab" data-toggle="pill" href="#sma-fisika9" role="tab" aria-controls="sma-fisika9" aria-selected="false">Fisika</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sma-kimia9-tab" data-toggle="pill" href="#sma-kimia9" role="tab" aria-controls="sma-kimia9" aria-selected="false">Kimia</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="sma-matik9" role="tabpanel" aria-labelledby="sma-matik9">

                                <h4 class="title">Materi Matematika</h4>
                                <div class="content row">

                                    <?php foreach ($sma_matik12 as $i) : ?>
                                        <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                            <a href="<?= base_url('viewmateriSMP/' . $i->id_materi) ?>" style="text-align: center;">
                                                <div id="item-category">
                                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                                    <p><?= $i->deskripsi ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="sma-fisika9" role="tabpanel" aria-labelledby="sma-fisika9">
                                <h4 class="title">Materi Fisika</h4>
                                <div class="content row">

                                    <?php foreach ($sma_fisika12 as $i) : ?>
                                        <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                            <a href="<?= base_url('viewmateriSMP/' . $i->id_materi) ?>" style="text-align: center;">
                                                <div id="item-category">
                                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="sma-kimia9" role="tabpanel" aria-labelledby="sma-kimia9">
                                <h4 class="title">Materi Kimia</h4>
                                <div class="content row">

                                    <?php foreach ($sma_kimia12 as $i) : ?>
                                        <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                            <a href="<?= base_url('viewmateriSMP/' . $i->id_materi) ?>" style="text-align: center;">
                                                <div id="item-category">
                                                    <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/' . $i->thumbnail_materi); ?>" alt="" style="width: auto; height: 150px;">
                                                    <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                                    <p><?= $i->deskripsi ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } else if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() != "yes") { ?>
            <div class="main_title">
                <h4 class="mb-3">Anda tidak memiliki ijin untuk mengakses konten ini!</h4>
                <img src="<?= base_url('assets/main/'); ?>img/features/no_access.png" alt="Login first" style="height: auto; max-width:50%">
                <button class="mt-3 btn btn-danger btn-block" data-toggle="modal" data-target="#modal-request">Request Akses</button>
            </div>
        <?php } else { ?>
            <div class="main_title">
                <h4 class="mb-3">Login terlebih dahulu dan request akses konten</h4>
                <img src="<?= base_url('assets/main/'); ?>img/features/login_first.png" alt="Login" style="height: auto; max-width:50%">
                <a class="mt-3 btn btn-warning btn-block" href="<?= base_url('login'); ?>">
                    <h4 class="mt-2 mb-2 text-white">LOGIN</h4>
                </a>
            </div>
        <?php } ?>

        <!-- ========================================== pembatas ========================================== -->
    </div>
    <!-- ========================================== pembatas ========================================== -->
    <!-- ========================================== pembatas ========================================== -->

</section>