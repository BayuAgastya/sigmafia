<section class="banner_area mb-3">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Materi SD</h2>
                        <div class="page_link">
                            <a href="<?= base_url('home'); ?>">Home</a>
                            <a href="<?= base_url('materi'); ?>">Materi</a>
                            <a href="<?= base_url('materi/sd'); ?>">SD</a>
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
                    <button class="tablinks" onclick="openLesson(event, 'Kelas_4')">Kelas 4</button>
                    <button class="tablinks" onclick="openLesson(event, 'Kelas_5')">Kelas 5</button>
                    <button class="tablinks" onclick="openLesson(event, 'Kelas_6')">Kelas 6</button>
                </div>
            </div>
        </div>
    </div>
<?php } else if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() != "yes") { ?>
<?php } else { ?>
<?php } ?>

<section class="course_details_area mb-5">
    <div class="container">
        <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
            <!-- ========================================== pembatas ========================================== -->

            <div id="Kelas_4" class="tabcontent">
                <h4 class="title">Materi Matematika</h4>
                <div class="content row">

                    <?php foreach ($sd_matik4 as $i) : ?>
                        <div class="col-lg-4 col-sm-6 col-12 mb-3">
                            <a href="<?= base_url('viewmateriSD/' . $i->id_materi) ?>" style="text-align: center;">
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

            <!-- ========================================== pembatas ========================================== -->

            <div id="Kelas_5" class="tabcontent">
                <h4 class="title">Materi Matematika</h4>
                <div class="content row">

                    <?php foreach ($sd_matik5 as $i) : ?>
                        <div class="col-lg-4 col-sm-6 col-12 mb-3">
                            <a href="<?= base_url('viewmateriSD/' . $i->id_materi) ?>" style="text-align: center;">
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
            <!-- ========================================== pembatas ========================================== -->
            <div id="Kelas_6" class="tabcontent">
                <h4 class="title">Materi Matematika</h4>
                <div class="content row">

                    <?php foreach ($sd_matik6 as $i) : ?>
                        <div class="col-lg-4 col-sm-6 col-12 mb-3">
                            <a href="<?= base_url('viewmateriSD/' . $i->id_materi) ?>" style="text-align: center;">
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
        <div class="course_details_left">
            <div class="content_wrapper">


            </div>
        </div>
        <!-- ========================================== pembatas ========================================== -->
    </div>
    <!-- ========================================== pembatas ========================================== -->
    <!-- ========================================== pembatas ========================================== -->

</section>