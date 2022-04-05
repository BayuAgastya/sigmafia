<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Buat Tryout</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <?php echo form_open_multipart(base_url('admin_menu/tryout/tryout/save_murid')) ?>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="p-3 bg-gray">

                                <div class="form-group col-sm-12">
                                    <label>Tryout</label>
                                    <select name="id_tryout" id="id_tryout" class="custom-select" required>
                                        <option value="" selected>>> Pilih Tryout</option>
                                        <?php foreach ($data_tryout->result() as $g) : ?>
                                            <option value="<?= $g->id_tryout; ?>"><?= $g->nama_tryout; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-between w-75">
                                <h5 class="pt-2">Pilih Murid</h5>
                                <div class="form-group">
                                    <input type="text" id="search-student" class="form-check-input w-25" placeholder="Cari Murid">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card-body table-responsive p-0" style="height: 400px;">
                                <table class="table table-bordered table-head-fixed">
                                    <thead>
                                        <tr>
                                            <th>Pilih</th>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Asal</th>
                                        </tr>
                                    </thead>
                                    <tbody id="table-body-modify" class="form-group">
                                        <?php foreach ($data_murid->result() as $i) : ?>
                                            <tr id="tr-<?= $i->id_murid; ?>">
                                                <td style="width:1%">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input murid-checkbox" name="murid[]" value="<?= $i->id_murid; ?>">
                                                    </div>
                                                </td>
                                                <td style="width:1%"><?= $i->id_murid; ?></td>
                                                <td style="width:60%; text-align:center"><?= $i->nama; ?></td>
                                                <td style="width:38%"><?= $i->asal_sekolah; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group pull-right">
                                <a href="<?= base_url('admin_menu/tryout/tryout') ?>" class="btn btn-flat btn-default"><i class="fa fa-arrow-left"></i> Batal</a>
                                <button type="submit" id="submit" class="btn btn-primary bg-purple"><i class="fa fa-save"></i> Buat</button>
                            </div>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    $('#id_tryout').on('change', function() {
        var id_tryout = this.value;
        console.log(id_tryout);
        $.ajax({
            url: "<?= base_url('admin_menu/tryout/tryout/get_tryout'); ?>",
            type: "POST",
            cache: false,
            data: {
                tryout: id_tryout
            },
            success: function(result) {
                var murid = $.parseJSON(result);

                let data = $(".form-check-input").val();

                $('#table-body-modify').html('');
                $.each(murid, function(index, value) {
                    console.log(value.id_tryout);
                    $('#table-body-modify').append(`
                        <tr id="tr-`+value.id_murid+`">
                            <td style="width:1%">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="murid[]" value="` + value.id_murid + `">
                                </div>
                            </td>
                            <td style="width:1%">` + value.id_murid + `</td>
                            <td style="width:60%; text-align:center">` + value.nama + `</td>
                            <td style="width:38%">` + value.asal_sekolah + `</td>
                        </tr>
                    `);
                });
            }
        });
    });
</script>

<script>
    $('#search-student').on('keyup',function(){
        var arr = [];
        var boolen = "";
        <?php foreach($data_murid->result() as $result){ ?>
            var array = {
                'id_murid' : "<?= $result->id_murid; ?>",
                'nama' : "<?= $result->nama; ?>",
                'asal_sekolah' : "<?= $result->asal_sekolah; ?>"
            }
            arr.push(array);
        <?php } ?>
        var val = $(this).val().toLowerCase();
        var regex;

        let data = $(".murid-checkbox").val();

        $.each(arr, function(index, value) {
            regex = value.nama.toLowerCase();
            if(regex.match(val) || value.id_murid.match(val)){
                $('#tr-'+value.id_murid).addClass('table-row');
                $('#tr-'+value.id_murid).removeClass('d-none');
            }else{
                $('#tr-'+value.id_murid).addClass('d-none');
                $('#tr-'+value.id_murid).removeClass('table-row');
            }
        });
    });
</script>