<footer class="main-footer">
    <strong>Copyright &copy;<script>
            document.write(new Date().getFullYear());
        </script> Sigmafia.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0.0
    </div>
</footer>
</div>


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

</body>

</html>