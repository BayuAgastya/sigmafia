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

<div class="container">
    <div class="row">
        <div class="tab" style="align-content: center;">
            <div class="btn-group" style="width:100%">
                <button class="tablinks" onclick="openLesson(event, 'SD')">Kelas 4</button>
                <button class="tablinks" onclick="openLesson(event, 'SMP')">Kelas 5</button>
                <button class="tablinks" onclick="openLesson(event, 'SMA')">Kelas 6</button>
            </div>
        </div>
    </div>
</div>
<section class="course_details_area mb-5">
    <div class="container">
        <div class="course_details_left">
            <div class="content_wrapper">

                <!-- ========================================== pembatas ========================================== -->

                <div id="SD" class="tabcontent">
                    <h4 class="title">Materi Matematika</h4>
                    <div class="content">
                        <table class="course_list">
                            <?php foreach ($matik_sd as $i) : ?>
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

                <!-- ========================================== pembatas ========================================== -->

                <div id="SMP" class="tabcontent">
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
                <!-- ========================================== pembatas ========================================== -->
                <div id="SMA" class="tabcontent">
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
            </div>
        </div>
        <!-- ========================================== pembatas ========================================== -->
    </div>
    <!-- ========================================== pembatas ========================================== -->
    <!-- ========================================== pembatas ========================================== -->

</section>