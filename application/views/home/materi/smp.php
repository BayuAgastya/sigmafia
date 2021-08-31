<section class="banner_area mb-3">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Materi SMP</h2>
                        <div class="page_link">
                            <a href="<?= base_url('home'); ?>">Home</a>
                            <a href="<?= base_url('materi'); ?>">Materi</a>
                            <a href="<?= base_url('materi/smp'); ?>">SMP</a>
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


<div class="container">
    <div class="row">
        <div class="tab" style="align-content: center;">
            <div class="btn-group" style="width:100%">
                <button class="tablinks" onclick="openLesson(event, 'Kelas_7')">Kelas 7</button>
                <button class="tablinks" onclick="openLesson(event, 'Kelas_8')">Kelas 8</button>
                <button class="tablinks" onclick="openLesson(event, 'Kelas_9')">Kelas 9</button>
            </div>
        </div>
    </div>
</div>



<section class="course_details_area mb-5 mt-3">
    <div class="container" style="padding: 0px;">
        <div class="course_details_left">
            <div class="content_wrapper">

                <!-- ========================================== pembatas ========================================== -->

                <div id="Kelas_7" class="tabcontent" style="padding: 0px;">
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
                        <div class="tab-pane fade show active" id="kelas7-matik" role="tabpanel" aria-labelledby="smp-kelas7-matik">

                            <h4 class="title">Materi Matematika</h4>
                            <div class="content row">

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

                        <div class="tab-pane fade" id="kelas7-fisika" role="tabpanel" aria-labelledby="kelas7-fisika">
                            <h4 class="title">Materi Fisika</h4>
                            <div class="content row">

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

                        <div class="tab-pane fade" id="kelas7-kimia" role="tabpanel" aria-labelledby="kelas7-kimia">
                            <h4 class="title">Materi Kimia</h4>
                            <div class="content row">

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
                </div>

                <!-- ========================================== pembatas ========================================== -->

                <div id="Kelas_8" class="tabcontent" style="padding: 0px;">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="smp-matik8-tab" data-toggle="pill" href="#smp-matik8" role="tab" aria-controls="smp-matik8" aria-selected="true">Matematika</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="smp-fisika8-tab" data-toggle="pill" href="#smp-fisika8" role="tab" aria-controls="smp-fisika8" aria-selected="false">Fisika</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="smp-kimia8-tab" data-toggle="pill" href="#smp-kimia8" role="tab" aria-controls="smp-kimia8" aria-selected="false">Kimia</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="smp-matik8" role="tabpanel" aria-labelledby="smp-matik8">

                            <h4 class="title">Materi Matematika</h4>
                            <div class="content row">

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

                        <div class="tab-pane fade" id="smp-fisika8" role="tabpanel" aria-labelledby="smp-fisika8">
                            <h4 class="title">Materi Fisika</h4>
                            <div class="content row">

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

                        <div class="tab-pane fade" id="smp-kimia8" role="tabpanel" aria-labelledby="smp-kimia8">
                            <h4 class="title">Materi Kimia</h4>
                            <div class="content row">

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
                </div>
                <!-- ========================================== pembatas ========================================== -->
                <div id="Kelas_9" class="tabcontent" style="padding: 0px;">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="smp-matik9-tab" data-toggle="pill" href="#smp-matik9" role="tab" aria-controls="smp-matik9" aria-selected="true">Matematika</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="smp-fisika9-tab" data-toggle="pill" href="#smp-fisika9" role="tab" aria-controls="smp-fisika9" aria-selected="false">Fisika</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="smp-kimia9-tab" data-toggle="pill" href="#smp-kimia9" role="tab" aria-controls="smp-kimia9" aria-selected="false">Kimia</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="smp-matik9" role="tabpanel" aria-labelledby="smp-matik9">

                            <h4 class="title">Materi Matematika</h4>
                            <div class="content row">

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

                        <div class="tab-pane fade" id="smp-fisika9" role="tabpanel" aria-labelledby="smp-fisika9">
                            <h4 class="title">Materi Fisika</h4>
                            <div class="content row">

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

                        <div class="tab-pane fade" id="smp-kimia9" role="tabpanel" aria-labelledby="smp-kimia9">
                            <h4 class="title">Materi Kimia</h4>
                            <div class="content row">

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
                </div>
            </div>
        </div>
        <!-- ========================================== pembatas ========================================== -->
    </div>
    <!-- ========================================== pembatas ========================================== -->
    <!-- ========================================== pembatas ========================================== -->

</section>