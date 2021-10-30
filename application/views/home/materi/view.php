<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="<?= base_url('assets/main/'); ?>img/S logo.png" type="image/png" />
    <title><?= $title ?></title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>css/flaticon.css" />
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>css/themify-icons.css" />
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

</head>
<style>
    body {
        color: white;
    }

    #grad1 {
        height: 100%;
        /* For browsers that do not support gradients */
        background-color: rgba(0, 0, 0, 1) 0%;
        background-image: linear-gradient(to bottom right, rgba(0, 0, 0, 1) 0%, rgba(80, 80, 80, 1) 100%);
    }

    #body-row {
        margin-left: 0;
        margin-right: 0;
    }

    #sidebar-container {
        min-height: 100vh;
        background-color: #333;
        padding: 0;
    }


    .sidebar-expanded {
        width: 230px;
    }

    .sidebar-collapsed {
        width: 60px;
    }

    #sidebar-container .list-group a {
        height: 50px;
        color: white;
    }


    #sidebar-container .list-group .sidebar-submenu a {
        height: 45px;
        padding-left: 30px;
    }

    .sidebar-submenu {
        font-size: 0.9rem;
    }


    .sidebar-separator-title {
        background-color: #333;
        height: 35px;
    }

    .sidebar-separator {
        background-color: #333;
        height: 25px;
    }

    .logo-separator {
        background-color: #333;
        height: 60px;
    }


    #sidebar-container .list-group .list-group-item[aria-expanded="false"] .submenu-icon::after {
        content: " \f0d7";
        font-family: FontAwesome;
        display: inline;
        text-align: right;
        padding-left: 10px;
    }

    #sidebar-container .list-group .list-group-item[aria-expanded="true"] .submenu-icon::after {
        content: " \f0da";
        font-family: FontAwesome;
        display: inline;
        text-align: right;
        padding-left: 10px;
    }
</style>

<body id="grad1">

    <div class="row" id="body-row">
        <div id="sidebar-container" class="sidebar-expanded d-none d-md-block">
            <ul class="list-group">
                <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                    <a class="mt-4" href="<?= base_url('materi/sd'); ?>"><span class="fa fa-arrow-left mr-1"></span> Kembali ke Home</a>
                </li>
                <hr>
                <!-- <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-start align-items-center">
                        <span class="fa fa-play fa-fw mr-3"></span>
                        <span class="menu-collapsed">Link Video</span>
                    </div>
                </a>
                <div id='submenu1' class="collapse sidebar-submenu">
                    <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                        <span class="menu-collapsed"><?= $data->judul_video; ?></span>
                        <span class="menu-collapsed"><?= $data->link_video; ?></span>

                    </a>
                </div> -->
                <a href="#" style="padding-left: 10pt;">Link 1 pake Judul Video</a>
                <a href="#" style="padding-left: 10pt;">Link 2 pake Judul Video</a>


            </ul>
        </div> <!-- End Sidebar -->

        <!-- MAIN -->
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

    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/main/'); ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?= base_url('assets/main/'); ?>js/jquery.ajaxchimp.min.js"></script>
</body>

</html>