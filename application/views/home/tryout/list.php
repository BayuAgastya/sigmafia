<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Tryout</h2>
                        <div class="page_link">
                            <a href="#">Home</a>
                            <a href="#">tryout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================ Start About Area =================-->
<section class="section_gap">
    <div class="container">
        <!-- <form class="mb-3">
            <label for="">Kode Tryout:</label>
            <input type="text">
            <button type="button" class="genric-btn primary-border text-uppercase">Tambah</button>
        </form> -->

        <a href="<?= base_url('user/tryout/tryout_base/riwayat'); ?>" type="button" class="genric-btn primary text-uppercase mb-3">Riwayat Nilai</a>


        <table class="table table-bordered table-head-fixed">
            <thead>
                <tr>
                    <th style="width:3%">ID</th>
                    <th style="width:7%">Tingkat</th>
                    <th style="width:15%">Matpel</th>
                    <th style="width:25%">Nama TO</th>
                    <th style="width:10%">Jumlah</th>
                    <th style="width:10%">Waktu</th>
                    <th style="width:10%">Jenis</th>
                    <th style="width:30%;text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_tryout->result() as $i) : ?>
                    <tr>
                        <td style="text-align: center;"><?= $i->id_tryout; ?></td>
                        <td style="text-align: center;"><?= $i->id_tingkat; ?></td>
                        <td><?= $i->matpel; ?></td>
                        <td><?= $i->nama_tryout; ?></td>
                        <td><?= $i->jumlah_soal; ?></td>
                        <td><?= $i->waktu; ?> Menit</td>
                        <td><?= $i->jenis; ?></td>
                        <td style=" text-align:center">
                            <!-- <a href="<?= base_url('prep/' . $i->id_tryout) ?>" type="button" class="genric-btn primary-border text-uppercase">
                                Ikuti Tryout
                            </a> -->
                            <a href="#" type="button" data-id="<?= $i->id_tryout; ?>" class="genric-btn primary-border text-uppercase ikuti-tryout" data-toggle="modal" data-target="#insertCode">
                                Ikuti Tryout
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>

<div class="modal fade" id="insertCode" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Masukan Kode Tryout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger" id="code-salah" role="alert">
                    Kode salah!
                </div>
                <div class="alert alert-warning" id="code-warning" role="alert">
                    Anda sudah mengikuti tryout!
                </div>
                <form action="" id="insertCodeValue">
                    <input type="text" id="codeValue" maxlength="5" style="text-align: center; width: 100%;">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="genric-btn primary-border text-uppercase" data-dismiss="modal">Tutup</button>
                <button type="button" id="submit-insert-code" class="genric-btn primary text-uppercase">Ok</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    function scriptInsertCode(id) {
        $.ajax({
            url: "<?php echo base_url("user/tryout/tryout_base/check_code"); ?>",
            type: "POST",
            cache: false,
            data: {
                id_tryout: id,
                code: $('#codeValue').val()
            },
            success: function(param) {
                var data = $.parseJSON(param);

                console.log(data.parameter);

                if (data.parameter == 202) {
                    $(location).attr('href', "<?= base_url('prep/'); ?>" + id);
                } else if(data.parameter == 200){
                    $("#code-warning").show();
                    $("#code-salah").hide();
                } else{
                    $("#code-warning").hide();
                    $("#code-salah").show();
                }
            }
        });
    }
</script>

<script>
    $('.ikuti-tryout').on('click', function() {
        // alert("test");
        $("#code-salah").hide();
        var id = $(this).data('id');
        console.log(id);
        $('#submit-insert-code').attr('onclick', 'scriptInsertCode(' + id + ')');
        $('#insertCode').modal('show');
    });
</script>