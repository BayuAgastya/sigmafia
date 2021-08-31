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
                <button class="tablinks" onclick="openLesson(event, 'SD')">Kelas 7</button>
                <button class="tablinks" onclick="openLesson(event, 'SMP')">Kelas 8</button>
                <button class="tablinks" onclick="openLesson(event, 'SMA')">Kelas 9</button>
            </div>
        </div>
    </div>
</div>



<section class="course_details_area mb-5 mt-3">
    <div class="container" style="padding: 0px;">
        <div class="course_details_left">
            <div class="content_wrapper">

                <!-- ========================================== pembatas ========================================== -->

                <div id="SD" class="tabcontent" style="padding: 0px;">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-matematika-smp-tab" data-toggle="pill" href="#pills-matematika-smp" role="tab" aria-controls="pills-matematika-smp" aria-selected="true">Matematika</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-fisika-smp-tab" data-toggle="pill" href="#pills-fisika-smp" role="tab" aria-controls="pills-fisika-smp" aria-selected="false">Fisika</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-kimia-smp-tab" data-toggle="pill" href="#pills-kimia-smp" role="tab" aria-controls="pills-kimia-smp" aria-selected="false">Kimia</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-matematika-smp" role="tabpanel" aria-labelledby="pills-matematika-smp-tab">

                            <h4 class="title">Materi Matematika</h4>
                            <div class="content row">

                                <?php foreach ($smp_matik as $i) : ?>
                                    <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                        <a href="#" style="text-align: center;">
                                            <div id="item-category">
                                                <img class="img-fluid" src="<?= base_url('assets/main/img/konten/sd.png'); ?>" alt="" style="width: auto;">
                                                <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                                <p>tingkat: <?= $i->id_tingkat; ?></p>
                                                <p>matpel: <?= $i->id_matpel; ?></p>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-fisika-smp" role="tabpanel" aria-labelledby="pills-fisika-smp-tab">
                            <h4 class="title">Materi Fisika</h4>
                            <div class="content row">

                                <?php foreach ($smp_fisika as $i) : ?>
                                    <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                        <a href="#" style="text-align: center;">
                                            <div id="item-category">
                                                <img class="img-fluid" src="<?= base_url('assets/main/img/konten/sd.png'); ?>" alt="" style="width: auto;">
                                                <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                                <p>tingkat: <?= $i->id_tingkat; ?></p>
                                                <p>matpel: <?= $i->id_matpel; ?></p>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-kimia-smp" role="tabpanel" aria-labelledby="pills-kimia-smp-tab">
                            <h4 class="title">Materi Kimia</h4>
                            <div class="content row">

                                <?php foreach ($smp_kimia as $i) : ?>
                                    <div class="col-lg-4 col-sm-6 col-12 mb-3">
                                        <a href="#" style="text-align: center;">
                                            <div id="item-category">
                                                <img class="img-fluid" src="<?= base_url('assets/main/img/konten/sd.png'); ?>" alt="" style="width: auto;">
                                                <h4 class="mt-3"><?= $i->judul_materi; ?></h4>
                                                <p>tingkat: <?= $i->id_tingkat; ?></p>
                                                <p>matpel: <?= $i->id_matpel; ?></p>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- ========================================== pembatas ========================================== -->

                <div id="SMP" class="tabcontent" style="padding: 0px;">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-matematika-smp-tab" data-toggle="pill" href="#pills-matematika-smp" role="tab" aria-controls="pills-matematika-smp" aria-selected="true">Matematika</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-fisika-smp-tab" data-toggle="pill" href="#pills-fisika-smp" role="tab" aria-controls="pills-fisika-smp" aria-selected="false">Fisika</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-kimia-smp-tab" data-toggle="pill" href="#pills-kimia-smp" role="tab" aria-controls="pills-kimia-smp" aria-selected="false">Kimia</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-matematika-smp" role="tabpanel" aria-labelledby="pills-matematika-smp-tab">

                            <h4 class="title">Materi Matematika</h4>
                            <div class="content">

                                <table class="course_list">
                                    <?php foreach ($matik_smp as $i) : ?>
                                        <tr>
                                            <td><?= $i->judul; ?></td>
                                            <td><?= $i->deskripsi; ?></td>
                                            <td style="text-align: end">
                                                <a class="genric-btn primary-border text-uppercase" href="<?= base_url('uploads/materi/matik/' . $i->materi) ?>"><span class="ti-download"></span> Download</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-fisika-smp" role="tabpanel" aria-labelledby="pills-fisika-smp-tab">
                            <h4 class="title">Materi Fisika</h4>
                            <div class="content">

                                <table class="course_list">
                                    <?php foreach ($fisika_smp as $i) : ?>
                                        <tr>
                                            <td><?= $i->judul; ?></td>
                                            <td><?= $i->deskripsi; ?></td>
                                            <td style="text-align: end">
                                                <a class="genric-btn primary-border text-uppercase" href="<?= base_url('uploads/materi/fisika/' . $i->materi) ?>"><span class="ti-download"></span> Download</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>

                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-kimia-smp" role="tabpanel" aria-labelledby="pills-kimia-smp-tab">
                            <h4 class="title">Materi Kimia</h4>
                            <div class="content">

                                <table class="course_list">
                                    <?php foreach ($kimia_smp as $i) : ?>
                                        <tr>
                                            <td><?= $i->judul; ?></td>
                                            <td><?= $i->deskripsi; ?></td>
                                            <td style="text-align: end">
                                                <a class="genric-btn primary-border text-uppercase" href="<?= base_url('uploads/materi/kimia/' . $i->materi) ?>"><span class="ti-download"></span> Download</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========================================== pembatas ========================================== -->
                <div id="SMA" class="tabcontent" style="padding: 0px;">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-matematika-sma-tab" data-toggle="pill" href="#pills-matematika-sma" role="tab" aria-controls="pills-matematika-sma" aria-selected="true">Matematika</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-fisika-sma-tab" data-toggle="pill" href="#pills-fisika-sma" role="tab" aria-controls="pills-fisika-sma" aria-selected="false">Fisika</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-kimia-sma-tab" data-toggle="pill" href="#pills-kimia-sma" role="tab" aria-controls="pills-kimia-sma" aria-selected="false">Kimia</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-matematika-sma" role="tabpanel" aria-labelledby="pills-matematika-sma-tab">
                            <h4 class="title">Materi Matematika</h4>
                            <div class="content">

                                <table class="course_list">
                                    <?php foreach ($matik_sma as $i) : ?>
                                        <tr>
                                            <td><?= $i->judul; ?></td>
                                            <td><?= $i->deskripsi; ?></td>
                                            <td style="text-align: end">
                                                <a class="genric-btn primary-border text-uppercase" href="<?= base_url('uploads/materi/matik/' . $i->materi) ?>"><span class="ti-download"></span> Download</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>

                            </div>
                        </div>

                        <div class="tab-pane fade show" id="pills-fisika-sma" role="tabpanel" aria-labelledby="pills-fisika-sma-tab">
                            <h4 class="title">Materi Fisika</h4>
                            <div class="content">

                                <table class="course_list">
                                    <?php foreach ($fisika_sma as $i) : ?>
                                        <tr>
                                            <td><?= $i->judul; ?></td>
                                            <td><?= $i->deskripsi; ?></td>
                                            <td style="text-align: end">
                                                <a class="genric-btn primary-border text-uppercase" href="<?= base_url('uploads/materi/fisika/' . $i->materi) ?>"><span class="ti-download"></span> Download</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>

                            </div>
                        </div>

                        <div class="tab-pane fade show" id="pills-kimia-sma" role="tabpanel" aria-labelledby="pills-kimia-sma-tab">
                            <h4 class="title">Materi Kimia</h4>
                            <div class="content">

                                <table class="course_list">
                                    <?php foreach ($kimia_sma as $i) : ?>
                                        <tr>
                                            <td><?= $i->judul; ?></td>
                                            <td><?= $i->deskripsi; ?></td>
                                            <td style="text-align: end">
                                                <a class="genric-btn primary-border text-uppercase" href="<?= base_url('uploads/materi/kimia/' . $i->materi) ?>"><span class="ti-download"></span> Download</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>

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