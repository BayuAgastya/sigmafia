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
				<div class="col-sm-6">
					<ol class="breadcrumb float-right">
						<a href="<?= base_url('admin_menu/tryout/bank_soal/page_tambah') ?>" type="button" class="ion-plus btn btn-block btn-primary"> Tambah Soal</a>
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
							<h3 class="card-title">Daftar tabel Soal</h3>

							<div class="card-tools">
								<div class="input-group input-group-sm" style="width: 150px;">
									<input type="text" name="table_search" class="form-control float-right" placeholder="Search">
									<div class="input-group-append">
										<button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
									</div>
								</div>
							</div>
						</div>
						<!-- /.card-header -->
						<div class="card-body table-responsive p-0" style="height: 400px;">
							<table class="table table-bordered table-head-fixed">
								<thead>
									<tr>
										<th>ID</th>
										<th>Bobot</th>
										<th>Kode Soal</th>
										<th>Soal</th>
										<th>Dibuat</th>
										<th>Diupdate</th>
										<th style="text-align: center;">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data_bank->result() as $i) : ?>
										<tr>
											<td style="width:01%"><?= $i->id_bank; ?></td>
											<td style="width:01%; text-align:center"><?= $i->bobot; ?></td>
											<td style="width:02%; text-align:center">G<?= $i->id_guru; ?>T<?= $i->id_tingkat; ?>M<?= $i->id_matpel; ?></td>
											<td style="width:30%"><?= $i->soal; ?></td>
											<td style="width:05%"><?= $i->created_on; ?></td>
											<td style="width:05%"><?= $i->updated_on; ?></td>
											<td style="width:10%; text-align:center">
												<a href="<?= base_url('bankSoalDetail/' . $i->id_bank) ?>" type="button" class="btn btn-xs btn-flat bg-gradient-cyan">
													<i class="fas fa-eye"> Lihat</i>
												</a>
												<a href="<?= base_url('bankSoalEdit/' . $i->id_bank) ?>" type="button" class="btn btn-xs btn-flat bg-gradient-purple">
													<i class="fas fa-edit"> edit</i>
												</a>
												<a href="<?= base_url('hapusBankSoal/' . $i->id_bank) ?>" type="button" class="btn btn-xs btn-flat bg-red" onclick="return confirm('Yakin ingin menghapus data ?')">
													<i class="fas fa-trash"> Hapus</i>
												</a>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="row mb-2" style="text-align:center">
				<div class="col-sm-4">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Kode</th>
								<th>Nama Guru <a href="#" type="button" class="ion-plus btn-xs btn-flat btn-primary float-right"> Tambah</a></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data_guru->result() as $i) : ?>
								<tr>
									<td>G<?= $i->id_guru; ?></td>
									<td><?= $i->nama_guru; ?>
										<a href="#" type="button" class="ion-trash-b btn-xs btn-flat btn-danger float-right"> Hapus</a></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="col-sm-4">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Kode</th>
								<th>Tingkat <a href="#" type="button" class="ion-plus btn-xs btn-flat btn-primary float-right"> Tambah</a></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data_tingkat->result() as $i) : ?>
								<tr>
									<td>T<?= $i->id_tingkat; ?></td>
									<td><?= $i->nama_tingkat; ?>
										<a href="#" type="button" class="ion-trash-b btn-xs btn-flat btn-danger float-right"> Hapus</a></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
				<div class="col-sm-4">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Kode</th>
								<th>Matpel <a href="#" type="button" class="ion-plus btn-xs btn-flat btn-primary float-right"> Tambah</a></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($data_matpel->result() as $i) : ?>
								<tr>
									<td>M<?= $i->id_matpel; ?></td>
									<td><?= $i->nama_matpel; ?>
										<a href="#" type="button" class="ion-trash-b btn-xs btn-flat btn-danger float-right"> Hapus</a></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
	</section>
</div>