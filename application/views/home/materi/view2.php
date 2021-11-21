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
<style>

</style>

<body id="grad1">
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">Sigmafia</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <?php
            $i = 1;
            foreach ($data->result() as $materi) {
            ?>
                <li>
                    <a class="click-materi" href="#" data-id="<?= $materi->id_video; ?>" data-judul="<?= $materi->judul_video; ?>" data-link="<?= $materi->link_video; ?>">
                        <i class='<?php if ($i < 2) {
                                        echo 'bx bx-play';
                                    } else {
                                        echo 'bx bx-circle';
                                    } ?> icon-materi' id="id-materi-<?= $materi->id_video; ?>"></i>
                        <span class="links_name"><?= $materi->judul_video; ?></span>
                    </a>
                    <span class="tooltip"><?= $materi->judul_video; ?></span>
                </li>
            <?php
                $i++;
            }
            ?>
            <li class="profile">
                <a href="<?= base_url($back); ?>">
                    <i class='bx bx-chevron-left'></i>
                    <span class="links_name">Kembali ke Home</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-11">
                    <?php $materi = $data->row(); ?>
                    <h1 class="judul-materi"><?= $materi->judul_video; ?></h1>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item video-materi" src="https://www.youtube.com/embed/<?= $materi->link_video; ?>" allowfullscreen></iframe>
                    </div>
                    <h5 class="mt-5">File Materi:</h5>
                    <div class="container">
                        <a href="<?= base_url('uploads/materi/file/' . $data2->file) ?>">
                            <img class="img-fluid" src="<?= base_url('uploads/materi/gambar/pdf.png'); ?>" alt="" style="width: auto; height: 80px;">
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="<?= base_url('assets/main/') ?>view_script.js"></script>
    <script src="<?= base_url('assets/main/'); ?>js/jquery-3.2.1.min.js"></script>
    <script>
        $(".click-materi").on('click', function() {
            try {
                $(".judul-materi").html($(this).data('judul'));
                $(".video-materi").attr('src', 'https://www.youtube.com/embed/' + $(this).data('link'));
                $(".icon-materi").attr('class', 'bx bx-circle icon-materi');
            } catch (e) {
                console.log(e);
            } finally {
                $("#id-materi-" + $(this).data('id')).attr('class', 'bx bx-play icon-materi');
            }
        });
    </script>

</body>

</html>