<header class="header_area white-header">
    <div class="main_menu">
        <!--  <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between" method="" action="">
                    <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
                    <button type="submit" class="btn"></button>
                    <span class="ti-close" id="close_search" title="Close Search"></span>
                </form>
            </div>
        </div> -->

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand" href="<?= base_url('home'); ?>">
                    <img class="logo-2" href="<?= base_url('home'); ?>"><img src="<?= base_url('assets/main/'); ?>img/Logo2 Sigmafia 2020 with text Invers.png" alt="" style="height: 40px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item <?= $nav_home ?>">
                            <a class="nav-link" href="<?= base_url('home'); ?>">Home</a>
                        </li>
                        <li class="nav-item <?= $nav_howto ?>">
                            <a class="nav-link" href="<?= base_url('home/how_to'); ?>">How To</a>
                        </li>
                        <li class="nav-item <?= $nav_about ?>">
                            <a class="nav-link" href="<?= base_url('about'); ?>">About</a>
                        </li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Konten</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item <?= $nav_video ?>">
                                    <a class="nav-link" href="<?= base_url('video'); ?>">Video Pembelajaran</a>
                                </li>
                                <li class="nav-item <?= $nav_soal ?>">
                                    <a class="nav-link" href="<?= base_url('soal'); ?>">Soal-Soal</a>
                                </li>
                                <li class="nav-item <?= $nav_soal ?>">
                                    <a class="nav-link" href="<?= base_url('materi'); ?>">Materi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item <?= $nav_contact ?>">
                            <a class="nav-link" href="<?= base_url('contact'); ?>">Contact</a>
                        </li>
                        <?php if ($this->admin_model->is_role() == "user") { ?>
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $this->session->userdata("user_name") ?></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('profile'); ?>">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?= base_url('user/tryout/tryout_base'); ?>">Tryout</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="<?= base_url('home/logout') ?>" type="submit" class="nav-link">Logout</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url('login'); ?>">Login</a>
                            </li>
                        <?php } ?>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link search" id="search">
                                <i class="ti-search"></i>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>