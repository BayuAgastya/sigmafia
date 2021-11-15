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

<script>
    function deleteMateri(id){
        if (window.confirm('Yakin ingin menghapus data ??'))
        {
            $.ajax({
                url: "<?php echo base_url("admin_menu/m_materi/delete_materi");?>",
                type: "POST",
                cache: false,
                data :{
                    id_materi: id
                }
            }).done(function(){
                location.reload();
            });
        }
    }
</script>

<script>
    var i = 1;
    $(".add-new-link").click(function(){
        $(".add-new").append(`
                            <div class="row able-delete-`+i+`">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <input type="text" name="judul[]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-group">
                                        <input type="text" name="link[]" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <button type="button" class="btn btn-danger" onclick="deleteForm(`+i+`)" aria-label="Close">x</button>
                                    </div>
                                </div>
                            </div>`);
        i++;
    });
</script>

<script>
    function deleteForm(number){
        $(".able-delete-"+number+"").remove();
    }
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

<script>
    function getMateri(id){
        $.ajax({
                url: "<?php echo base_url("admin_menu/m_materi/get_materi");?>",
                type: "POST",
                cache: false,
                data :{
                    id_materi: id
                },
                success: function(data) {
                    var data = $.parseJSON(data);  

                    console.log(data);

                    $("#kelas-"+data.materi.kelas).attr("selected","selected");    
                    $("#id-materi").val(data.materi.id_materi);
                    $("#judul-materi").val(data.materi.judul_materi);
                    $("#deskripsi").val(data.materi.deskripsi);
                    $("#judul-video").val(data.video_materi[0].judul_video);
                    $("#link-video").val(data.video_materi[0].link_video);

                    $(".add-new").html('');

                    const count = Object.keys(data.video_materi).length;

                    console.log(count);
                    if(count > 1){
                        for(var i = 1; i<=count; i++){
                            $(".add-new").append(`
                                <div class="row able-delete-`+i+`">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input type="text" value="`+data.video_materi[i].judul_video+`" name="judul[]" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <input type="text" value="`+data.video_materi[i].link_video+`" name="link[]" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-1">
                                        <div class="form-group">
                                            <button type="button" class="btn btn-danger" onclick="deleteForm(`+i+`)" aria-label="Close">x</button>
                                        </div>
                                    </div>
                                </div>`);
                        }
                    }
                }
        });
    }
</script>

</body>

</html>