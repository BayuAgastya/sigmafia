<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            Selamat Datang <?= $this->session->userdata("user_name") ?>
        </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <a href="<?= base_url('admin_menu/dashboard/logout') ?>" type="submit" class="btn"><i class="fa fa-sign-out"></i> Logout</a>
    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= base_url('dashboard'); ?>" class="brand-link">
        <img src="<?= base_url('assets/admin/'); ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Sigmafia</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="<?= base_url('admin_menu/dashboard'); ?>" class="nav-link <?= $nav_dashboard ?>">
                        <i class="far fa fa-chart-bar nav-icon"></i>
                        <p>Dashboard</p>
                    </a>
                </li>

                <hr style="border: 0.5px solid white; min-width: 200px;">

                <li class="nav-item">
                    <a href="<?= base_url('admin_menu/m_video'); ?>" class="nav-link <?= $nav_video ?>">
                        <i class="far fa fa-video nav-icon"></i>
                        <p>Manage Video</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin_menu/m_soal'); ?>" class="nav-link <?= $nav_soal ?>">
                        <i class="fas fa-file-alt nav-icon"></i>
                        <p>Manage Soal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin_menu/m_materi'); ?>" class="nav-link <?= $nav_materi ?>">
                        <i class="fas fa-book-open nav-icon"></i>
                        <p>Manage Materi</p>
                    </a>
                </li>

                <hr style="border: 0.5px solid white; min-width: 200px;">

                <li class="nav-item">
                    <a href="<?= base_url('admin_menu/tryout/bank_soal'); ?>" class="nav-link <?= $nav_bank ?>">
                        <i class="far fa fa-bank nav-icon"></i>
                        <p>Bank Soal</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin_menu/tryout/tryout'); ?>" class="nav-link <?= $nav_tryout ?>">
                        <i class="far fa fa-tv nav-icon"></i>
                        <p>Tryout</p>
                    </a>
                </li>

                <hr style="border: 0.5px solid white; min-width: 200px;">

                <li class="nav-item">
                    <a href="<?= base_url('admin_menu/m_user'); ?>" class="nav-link <?= $nav_user ?>">
                        <i class="far fa fa-user nav-icon"></i>
                        <p>Manage User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin_menu/m_user'); ?>" class="nav-link disabled">
                        <i class="fas fa-chalkboard-teacher nav-icon"></i>
                        <p>Manage Guru</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin_menu/m_siswa'); ?>" class="nav-link <?= $nav_siswa ?>">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Data Murid</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('admin_menu/m_alumni'); ?>" class="nav-link <?= $nav_alumni ?>">
                        <i class="fas fa-user-graduate nav-icon"></i>
                        <p>Manage Alumni</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>