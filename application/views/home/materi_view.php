<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>materi-materi</h2>
                        <div class="page_link">
                            <a href="<?= base_url('home'); ?>">Home</a>
                            <a href="<?= base_url('materi'); ?>">Materi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================ Start Course Details Area =================-->
<div class="tab" style="align-content: center;">
    <div class="btn-group" style="width:100%">
        <button class="tablinks" onclick="openLesson(event, 'SD')" style="width:33.3%">SD</button>
        <button class="tablinks" onclick="openLesson(event, 'SMP')" style="width:33.3%">SMP</button>
        <button class="tablinks" onclick="openLesson(event, 'SMA')" style="width:33.3%">SMA</button>
    </div>
</div>

<section class="course_details_area" style="margin-bottom: 50px;">
    <div class="container">
        <div class="course_details_left">
            <div class="content_wrapper">

                <!-- ========================================== pembatas ========================================== -->

                <div id="SD" class="tabcontent">
                    <h4 class="title">Materi Matematika</h4>
                    <div class="content">
                        <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
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
                    </div>
                </div>

                <!-- ========================================== pembatas ========================================== -->

                <div id="SMP" class="tabcontent">
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
                                <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
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
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-fisika-smp" role="tabpanel" aria-labelledby="pills-fisika-smp-tab">
                            <h4 class="title">Materi Fisika</h4>
                            <div class="content">
                                <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
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
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-kimia-smp" role="tabpanel" aria-labelledby="pills-kimia-smp-tab">
                            <h4 class="title">Materi Kimia</h4>
                            <div class="content">
                                <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ========================================== pembatas ========================================== -->
                <div id="SMA" class="tabcontent">
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
                                <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
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
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="pills-fisika-sma" role="tabpanel" aria-labelledby="pills-fisika-sma-tab">
                            <h4 class="title">Materi Fisika</h4>
                            <div class="content">
                                <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
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
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="pills-kimia-sma" role="tabpanel" aria-labelledby="pills-kimia-sma-tab">
                            <h4 class="title">Materi Kimia</h4>
                            <div class="content">
                                <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========================================== pembatas ========================================== -->
    </div>
</section>