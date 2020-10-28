<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Video Pembelajaran</h2>
                        <div class="page_link">
                            <a href="index.html">Home</a>
                            <a href="video.html">Video Pembelajaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================ Start Video Pembelajaran Area =================-->
<div class="tab" style="align-content: center;">
    <div class="btn-group" style="width:100%">
        <button class="tablinks" onclick="openLesson(event, 'SD')" style="width:33.3%">SD</button>
        <button class="tablinks" onclick="openLesson(event, 'SMP')" style="width:33.3%">SMP</button>
        <button class="tablinks" onclick="openLesson(event, 'SMA')" style="width:33.3%">SMA</button>
    </div>
</div>
<section class="course_details_area" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="container" style="text-align: center;">

        <div id="SD" class="tabcontent">
            <h1 class="title" style="text-align: left;">Matematika SD</h1>
            <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
                <div class="row gallery-item">
                    <?php foreach ($matik_sd as $i) : ?>
                        <div class="col-md-6" style="padding: 10px;">
                            <div class="card card-outline card-primary">
                                <div class="card-header">
                                    <h5 class="card-title"><?= $i->judul; ?></h5>
                                </div>
                                <div class="card-body">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $i->url; ?>" allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="card-footer" style="text-align: left;">
                                    <p>
                                        <?= $i->deskripsi; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
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
        </div>

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
                    <h1 class="title" style="text-align: left;">Matematika SMP</h1>
                    <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
                        <div class="row gallery-item">
                            <?php foreach ($matik_smp as $i) : ?>
                                <div class="col-md-6" style="padding: 10px;">
                                    <div class="card card-outline card-primary">
                                        <div class="card-header">
                                            <h5 class="card-title"><?= $i->judul; ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $i->url; ?>" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="text-align: left;">
                                            <p>
                                                <?= $i->deskripsi; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
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
                </div>
                <div class="tab-pane fade" id="pills-fisika-smp" role="tabpanel" aria-labelledby="pills-fisika-smp-tab">
                    <h1 class="title" style="text-align: left;">Fisika SMP</h1>
                    <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
                        <div class="row gallery-item">
                            <?php foreach ($fisika_smp as $i) : ?>
                                <div class="col-md-6" style="padding: 10px;">
                                    <div class="card card-outline card-primary">
                                        <div class="card-header">
                                            <h5 class="card-title"><?= $i->judul; ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $i->url; ?>" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="text-align: left;">
                                            <p>
                                                <?= $i->deskripsi; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
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
                </div>
                <div class="tab-pane fade" id="pills-kimia-smp" role="tabpanel" aria-labelledby="pills-kimia-smp-tab">
                    <h1 class="title" style="text-align: left;">Kimia SMP</h1>
                    <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
                        <div class="row gallery-item">
                            <?php foreach ($kimia_smp as $i) : ?>
                                <div class="col-md-6" style="padding: 10px;">
                                    <div class="card card-outline card-primary">
                                        <div class="card-header">
                                            <h5 class="card-title"><?= $i->judul; ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $i->url; ?>" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="text-align: left;">
                                            <p>
                                                <?= $i->deskripsi; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
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
                </div>
            </div>


        </div>

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
                    <h1 class="title" style="text-align: left;">Matematika SMA</h1>
                    <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
                        <div class="row gallery-item">
                            <?php foreach ($matik_sma as $i) : ?>
                                <div class="col-md-6" style="padding: 10px;">
                                    <div class="card card-outline card-primary">
                                        <div class="card-header">
                                            <h5 class="card-title"><?= $i->judul; ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $i->url; ?>" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="text-align: left;">
                                            <p>
                                                <?= $i->deskripsi; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
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
                </div>
                <div class="tab-pane fade" id="pills-fisika-sma" role="tabpanel" aria-labelledby="pills-fisika-sma-tab">
                    <h1 class="title" style="text-align: left;">Fisika SMA</h1>
                    <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
                        <div class="row gallery-item">
                            <?php foreach ($fisika_sma as $i) : ?>
                                <div class="col-md-6" style="padding: 10px;">
                                    <div class="card card-outline card-primary">
                                        <div class="card-header">
                                            <h5 class="card-title"><?= $i->judul; ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $i->url; ?>" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="text-align: left;">
                                            <p>
                                                <?= $i->deskripsi; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
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
                </div>
                <div class="tab-pane fade" id="pills-kimia-sma" role="tabpanel" aria-labelledby="pills-kimia-sma-tab">
                    <h1 class="title" style="text-align: left;">Kimia SMA</h1>
                    <?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
                        <div class="row gallery-item">
                            <?php foreach ($kimia_sma as $i) : ?>
                                <div class="col-md-6" style="padding: 10px;">
                                    <div class="card card-outline card-primary">
                                        <div class="card-header">
                                            <h5 class="card-title"><?= $i->judul; ?></h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $i->url; ?>" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="card-footer" style="text-align: left;">
                                            <p>
                                                <?= $i->deskripsi; ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
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
                </div>
            </div>
        </div>
    </div>
</section>