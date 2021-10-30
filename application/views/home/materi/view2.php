<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?= $title ?> </title>

    <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>css/flaticon.css" />
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>view_style.css">
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body id="grad1">
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">Sigmafia</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-play'></i>
            </li>

            <!-- yang di bawah ni di jadiin foreach dari tabel db "video_materi"  -->
            <!-- ====================================================================================== -->
            <li>
                <a href="#">
                    <i class='bx bx-circle'></i>
                    <span class="links_name">Link 1 pake Judul Video</span>
                </a>
                <span class="tooltip"><?= $data->judul_video; ?></span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-circle'></i>
                    <span class="links_name">Link 1 pake Judul Video</span>
                </a>
                <span class="tooltip"><?= $data->judul_video; ?></span>
            </li>
            <!-- ====================================================================================== -->

            <li class="profile">
                <a href="#">
                    <i class='bx bx-chevron-left'></i>
                    <span class="links_name">Kembali ke Home</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section" id>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-11">

                    <h1><?= $data->judul_materi; ?></h1>
                    <p><?= $data->judul_video; ?></p>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $data->link_video; ?>" allowfullscreen></iframe>
                    </div>
                    <p>Link video(<?= $data->link_video; ?>)</p>


                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url('assets/main/') ?>view_script.js"></script>

</body>

</html>