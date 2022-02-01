<small class="help-block" style="color: #dc3545"><?= form_error('error') ?></small>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Kehadiran</h1>

					<!-- <div class="flash-data" data-flashdata=""></div> -->

				</div><!-- /.col -->
                <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <button type="button" class="ion-plus btn btn-block btn-primary" data-toggle="modal" data-target="#modal-kehadiran"> Tambah Kehadiran</button>
                </ol>
            </div><!-- /.col -->
			</div><!-- /.row -->

		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<!-- Main row -->
			<div class="row">
				<div class="col-12">
					<div class="card" style="min-height: 450px">
						<div class="card-header">
							<h3 class="card-title">Kalender Kehadiran</h3>
						</div>
                        <div class="container-calendar">
                            <div id="calendarContainer"></div>
                            <div id="organizerContainer"></div>
                            </div>
                            <div class="card-body">
                            </div>
					</div>
				</div>
			</div>
	</section>
</div>
<div class="modal fade" id="modal-kehadiran">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Tambah Kehadiran</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <?php echo form_open_multipart(base_url('admin_menu/m_user/update_kehadiran')) ?>
        <input type="date" name="tanggal_hadir" class="form-control" id="tanggal_hadir">
        <table class="table table-head-fixed">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                </tr>
            </thead>
            <tbody id="data-kehadiran">
                <?php foreach($data as $murid){ ?>
                    <tr>
                        <td><input type="checkbox" class="nilai-murid" name="murid[]" value="<?= $murid['id_murid']; ?>"></td>
                        <td><?= $murid['nama']; ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <hr>
        <button type="submit" class="btn btn-primary btn-block">Tambah</button>
        <?= form_close(); ?>
        </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script src='<?= base_url('assets/admin/'); ?>dist/js/calendarorganizer.min.js'></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    $('#tanggal_hadir').on('change',function(){
        var date    = $(this).val();
        $.ajax({
            url: "<?= base_url("admin_menu/m_user/get_data_kehadiran"); ?>",
            type: "POST",
            cache: false,
            data :{
                tanggal_hadir : date
            },
            success: function(result){
                var murid = $.parseJSON(result);

                $('#data-kehadiran').html("");
                $(".nilai-murid").val("");
                $.each(murid,function(index, value){
                    console.log(value.id_tryout);
                    $('#data-kehadiran').append(`
                        <tr>
                            <td><input type="checkbox" class="nilai-murid" name="murid[]" value="`+value.id_murid+`"></td>
                            <td>`+value.nama+`</td>
                        </tr>
                    `);
                });
            }
        })
    });
</script>
<script>
    generateData();
    function generateData() {
        $.ajax({
                url: "<?php echo base_url("admin_menu/m_user/get_kehadiran");?>",
                type: "POST",
                success: function(result) {
                    var date = new Date();
                    var data = {};
                    for (var i = 0; i < <?= $year; ?>; i++) {
                        data[date.getFullYear() - i] = {};

                        for (var j = 0; j < 12; j++) {
                            data[date.getFullYear() + i][j + 1] = {};
                        }
                    }

                    var murid = $.parseJSON(result);
                    const count = Object.keys(murid).length;

                    console.log(murid);

                    $.each(murid,function(index, value){
                        var hadir = new Date(value.tanggal_hadir);
                        var year = hadir.getFullYear();
                        var month = hadir.getMonth()+1;
                        var date = hadir.getDate();
                        try {
                            data[year][month][date].push({
                                startTime: "10:00",
                                endTime: "12:00",
                                text: value.nama
                            });
                            console.log('try');
                        } catch (e) {
                            data[year][month][date] = [];
                            data[year][month][date].push({
                                startTime: "10:00",
                                endTime: "12:00",
                                text: value.nama
                            });
                            console.log('catch');
                        }
                    })

                    var calendar = new Calendar("calendarContainer", "small",
                            [ "Senin", 3 ],
                            [ "#343a40", "#212529", "#ffffff", "#ffffff" ],
                            {
                                days: [ "Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat",  "Sabtu" ],
                                months: [ "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember" ],
                                indicator: true,
                                indicator_type: 0,
                                placeholder: "<span>Daftar Kehadiran</span>"
                            });
                    var organizer = new Organizer("organizerContainer", calendar, data);
                }
        });

    }
</script>