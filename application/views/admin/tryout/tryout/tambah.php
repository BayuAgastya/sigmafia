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
                    <?php echo form_open_multipart(base_url('admin_menu/tryout/tryout/save')) ?>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="p-3 bg-gray">

                                <div class="form-group col-sm-12">
                                    <label>Tingkat</label>
                                    <select name="id_tingkat" class="custom-select">
                                        <option selected>>> Pilih Tingkat</option>
                                        <?php foreach ($data_tingkat->result() as $g) : ?>
                                            <option value="<?= $g->id_tingkat; ?>"><?= $g->nama_tingkat; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>

                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="nama_ujian">Nama Tryout</label>
                                <input placeholder="Nama Ujian" type="text" class="form-control" name="nama_tryout">
                                <!-- <small class="help-block"></small> -->
                            </div>
                            <div class="form-group">
                                <label for="jumlah_soal">Jumlah Soal</label>
                                <input placeholder="Jumlah Soal" type="number" class="form-control" name="jumlah_soal">
                            </div>

                            <div class="form-group">
                                <label for="jumlah_soal">Mata Pelajaran</label>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="matpel[]" value=" Matematika">
                                    <label class="form-check-label">Matematika</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="matpel[]" value=" Fisika">
                                    <label class="form-check-label">Fisika</label>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" name="matpel[]" value=" Kimia">
                                    <label class="form-check-label">Kimia</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="waktu">Waktu</label>
                                <input placeholder="menit" type="number" class="form-control" name="waktu">
                            </div>

                            <div class="form-group">
                                <label for="waktu">Kode</label>
                                <input placeholder="kode" type="text" class="form-control" name="kode" maxlength="5" value="<?= $kode; ?>">
                            </div>

                        </div>
                        <div class="form-group">
                            <label>Pilih Soal</label>
                            <div class="d-flex flex-row">
                                <div class="px-1"><input type="checkbox" value="true" class="checkbox-d-flex" id="checkbox-sd"></div>
                                <div class="px-1 pr-2">SD</div>
                                <div class="px-1"><input type="checkbox" value="true" class="checkbox-d-flex" id="checkbox-smp"></div>
                                <div class="px-1 pr-2">SMP</div>
                                <div class="px-1"><input type="checkbox" value="true" class="checkbox-d-flex" id="checkbox-sma"></div>
                                <div class="px-1 pr-2">SMA</div>
                                <div class="px-1 ml-auto"><input type="checkbox" value="true" class="checkbox-d-flex" id="checkbox-matematika"></div>
                                <div class="px-1 pr-2">Matematika</div>
                                <div class="px-1"><input type="checkbox" value="true" class="checkbox-d-flex" id="checkbox-fisika"></div>
                                <div class="px-1 pr-2">Fisika</div>
                                <div class="px-1"><input type="checkbox" value="true" class="checkbox-d-flex" id="checkbox-kimia"></div>
                                <div class="px-1 pr-2">Kimia</div>
                                <div class="px-1 ml-auto"><input type="text" class="form-control form-control-sm" id="input-d-flex"></div>
                            </div>
                            <table class="table table-bordered table-head-fixed">
                                <thead>
                                    <tr>
                                        <th>Pilih</th>
                                        <th>ID</th>
                                        <th>Bobot</th>
                                        <th>Soal</th>
                                    </tr>
                                </thead>
                                <tbody id="table-body-modify">
                                    <?php foreach ($data_bank->result() as $i) : ?>
                                        <tr>
                                            <td style="width:01%">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="soal[]" value="<?= $i->id_bank; ?>">
                                                </div>
                                            </td>
                                            <td style="width:01%"><?= $i->id_bank; ?></td>
                                            <td style="width:01%; text-align:center"><?= $i->bobot; ?></td>
                                            <td style="width:30%"><?= $i->soal; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                        <div class="form-group pull-right">
                            <a href="<?= base_url('admin_menu/tryout/tryout') ?>" class="btn btn-flat btn-default"><i class="fa fa-arrow-left"></i> Batal</a>
                            <button type="submit" id="submit" class="btn btn-primary bg-purple"><i class="fa fa-save"></i> Buat</button>
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
	$(".checkbox-d-flex").on('click',function(){
        callBankSoal();
	});

    $("#input-d-flex").on('keyup',function(){
        callBankSoal();
    });

    function callBankSoal(){
        if($("#checkbox-sd").prop("checked")){
			sd = 1;
		}else{
			sd = 0;
		}
		if($("#checkbox-smp").prop("checked")){
			smp = 1;
		}else{
			smp = 0;
		}
		if($("#checkbox-sma").prop("checked")){
			sma = 1;
		}else{
			sma = 0;
		}
		if($("#checkbox-matematika").prop("checked")){
			matematika = 1;
		}else{
			matematika = 0;
		}
		if($("#checkbox-kimia").prop("checked")){
			kimia = 1;
		}else{
			kimia = 0;
		}
		if($("#checkbox-fisika").prop("checked")){
			fisika = 1;
		}else{
			fisika = 0;
		}

        var search = $("#input-d-flex").val();
        console.log(search);

		$.ajax({
                url: "<?php echo base_url("admin_menu/tryout/Bank_soal/bank_soal_check");?>",
                type: "POST",
                cache: false,
                data :{
                    sd : sd,
					smp : smp,
					sma : sma,
					matematika : matematika,
					kimia : kimia,
					fisika : fisika,
                    search : search
                },
                success: function(data) {
                    var data = $.parseJSON(data);  

                    const count = Object.keys(data).length;

					$("#table-body-modify").html("");
					for(var i = 0; i<count; i++){
						if(data[i].updated_on === undefined){
							updated_on = data[i].update_on;
						}else{
							updated_on = '';
						}
						$("#table-body-modify").append(`
							<tr>
                                <td style="width:01%">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" name="soal[]" value="`+data[i].id_bank+`">
                                    </div>
                                </td>
								<td style="width:01%">`+data[i].id_bank+`</td>
								<td style="width:01%; text-align:center">`+data[i].bobot+`</td>
								<td style="width:30%">`+data[i].soal+`</td>
							</tr>
							`);
					}
                }
        });
    }
</script>