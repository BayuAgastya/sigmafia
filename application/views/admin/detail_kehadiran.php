<small class="help-block" style="color: #dc3545"><?= form_error('error') ?></small>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Bank Soal</h1>

					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('bank'); ?>"></div>

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
							<h3 class="card-title">Detail Kehadiran <b><?= $murid['nama']; ?></b> bulan <b><?= $bulan; ?></b></h3>
                        </div>
						<!-- /.card-header -->
						<div class="card-body table-responsive p-0" style="height: 400px;">
							<table class="table table-bordered table-head-fixed">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Tanggal Hadir</th>
										<th style="text-align: center;">Action</th>
									</tr>
								</thead>
								<tbody id="table-body-modify">
									<?php foreach ($data as $i) : ?>
										<tr id="data-<?= $i->id_kehadiran; ?>">
											<td style="text-align:center"><?= $i->nama; ?></td>
											<td style="text-align:center"><?= $i->tanggal_hadir; ?></td>
                                            <td style="text-align:center">
                                                <button data-id="<?= $i->id_kehadiran; ?>" class="btn btn-danger btn-sm delete-detail-kehadiran"><i class="fas fa-trash"></i> Hapus</button>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
	</section>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
    $('.delete-detail-kehadiran').on('click',function(){
        var id = $(this).data('id');

        if (confirm('Yakin ingin menghapus data?')) {
            $.ajax({
                url: "<?php echo base_url("admin_menu/m_user/hapus_kehadiran");?>",
                type: "POST",
                cache: false,
                data :{
                    id: id
                },
                success: function(results) {
                    var result = $.parseJSON(results);  
                    console.log(result);

                    if(result == 200){
                        $('#data-'+id).remove();
                    }else{
                        alert('Gagal menghapus!');
                    }
                }
            });
        }
    })
</script>