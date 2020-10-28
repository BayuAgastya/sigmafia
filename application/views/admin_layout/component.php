<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="<?= base_url('assets/main/'); ?>img/S logo.png" type="image/png" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>



<link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>plugins/fontawesome-free/css/all.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Tempusdominus Bbootstrap 4 -->
<link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
<!-- JQVMap -->
<link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>plugins/jqvmap/jqvmap.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>dist/css/adminlte.min.css">
<link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>dist/css/myCSS.css">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
<!-- Daterange picker -->
<link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>plugins/daterangepicker/daterangepicker.css">
<!-- summernote -->
<link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>plugins/summernote/summernote-bs4.css">
<!-- select2 -->
<link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>plugins/select2/css/select2.min.css">
<link rel="stylesheet" href="<?= base_url('assets/admin/'); ?>plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery -->
<script src="<?= base_url('assets/admin/'); ?>plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/admin/'); ?>plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/admin/'); ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/admin/'); ?>plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/admin/'); ?>plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/admin/'); ?>plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/admin/'); ?>plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/admin/'); ?>plugins/moment/moment.min.js"></script>
<script src="<?= base_url('assets/admin/'); ?>plugins/daterangepicker/daterangepicker.js"></script>

<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/admin/'); ?>plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/admin/'); ?>plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/admin/'); ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/admin/'); ?>dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url('assets/admin/'); ?>dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/admin/'); ?>dist/js/demo.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="<?= base_url('assets/'); ?>myscript.js"></script>

<!-- select2 -->
<script type="text/javascript" src="<?= base_url('assets/admin/'); ?>plugins/select2/js/select2.full.min.js"></script>


<!-- date picker -->
<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

<script>
    //Tabs Function
    document.getElementsByClassName('tablinks')[0].click()
    document.getElementById("defaultOpen").click();

    function openLesson(evt, lessonName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(lessonName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<script>
    $(function() {
        $("#datepicker-1").datepicker()
        //Initialize Select2 Elements
        $('.select2').select2()

        //Initialize Select2 Elements
        $('.select2bs4').select2({
            theme: 'bootstrap4'
        })
    });
</script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>