<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="<?= base_url('assets/main/'); ?>img/S logo.png" type="image/png" />
    <title><?= $title ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>css/mycss.css" />
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>css/flaticon.css" />
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>css/themify-icons.css" />
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>vendors/nice-select/css/nice-select.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>plugins/fontawesome-free/css/all.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="<?= base_url('assets/main/'); ?>css/style_ver2.css" />
    <style>
        .button {
            border-radius: 4px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 28px;
            padding: 20px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }

        .main {
            margin-left: 250px;
            /* Same as the width of the sidenav */
            font-size: 20px;
            /* Increased text to enable scrolling */
            padding: 0px 10px;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 90%;
        }

        row {
            border: 0px;
            margin-right: 0;
            margin-left: 0;
            max-width: 100%;
        }

        Ol li {
            margin-top: 50px;
            margin-bottom: 50px;
            padding: 10px;
            /* border: 2px solid orange; */
        }
    </style>
</head>

<body>