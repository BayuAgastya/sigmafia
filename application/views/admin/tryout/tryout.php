    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    	<!-- Content Header (Page header) -->
    	<div class="content-header">
    		<div class="container-fluid">
    			<div class="row mb-2">
    				<div class="col-sm-6">
    					<h1 class="m-0 text-dark">Tryout</h1>

    					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('tryout'); ?>"></div>

    				</div>
    				<div class="col-sm-6">
    					<ol class="breadcrumb float-sm-right">
    						<a href="<?= base_url('admin_menu/tryout/tryout/page_tambah') ?>" type="button" class="ion-plus btn btn-block btn-primary"> Tambah Tryout</a>
    					</ol>
    				</div>
    			</div>
    		</div>
    	</div>

    	<section class="content">
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-12">
    					<div class="card" style="min-height: 450px">
    						<div class="card-header">
    							<h3 class="card-title">Daftar tabel Tryout</h3>

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
    						<div class="card-body table-responsive p-0" style="height: 300px;">
    							<table class="table table-bordered table-head-fixed">
    								<thead>
    									<tr>
    										<th>ID</th>
    										<th>Tingkat</th>
    										<th>Matpel</th>
    										<th>Nama TO</th>
    										<th>Jumlah Soal</th>
    										<th>Waktu</th>
    										<th>Jenis</th>
    										<th style="text-align: center;">Action</th>
    									</tr>
    								</thead>
    								<tbody>
    									<?php foreach ($data_tryout->result() as $i) : ?>
    										<tr>
    											<td style="width:01%"><?= $i->id_tryout; ?></td>
    											<td style="width:01%; text-align:center"><?= $i->id_tingkat; ?></td>
    											<td style="width:01%"><?= $i->matpel; ?></td>
    											<td style="width:25%"><?= $i->nama_tryout; ?></td>
    											<td style="width:10%"><?= $i->jumlah_soal; ?></td>
    											<td style="width:10%"><?= $i->waktu; ?></td>
    											<td style="width:10%"><?= $i->jenis; ?></td>
    											<td style="width:30%; text-align:center">
    												<a href="<?= base_url('hasilTODetail/' . $i->id_tryout) ?>" type="button" class="btn btn-xs btn-flat bg-gradient-cyan">
    													<i class="fas fa-eye"> Lihat Hasil</i>
    												</a>
    												<a href="<?= base_url('tryoutDetail/' . $i->id_tryout) ?>" type="button" class="btn btn-xs btn-flat bg-gradient-purple">
    													<i class="fas fa-edit"> edit</i>
    												</a>
    												<a href="<?= base_url('hapusTO/' . $i->id_tryout) ?>" type="button" class="btn btn-xs btn-flat bg-red" onclick="return confirm('Yakin ingin menghapus data ?')">
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
    	</section>
    </div>

    <div class="modal fade" id="modal-tambah-tryout">
    	<div class="modal-dialog modal-lg">
    		<div class="modal-content">

    			<div class="modal-header">
    				<h4 class="modal-title">Tambah Alumus</h4>
    				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    					<span aria-hidden="true">&times;</span>
    				</button>
    			</div>
    			<div class="modal-body">
    				<form method="post" action="<?= base_url('tambahAlumni'); ?>">
    					<div class="form-group">
    						<label>Nama</label>
    						<input type="text" name="nama" class="form-control" placeholder="Masukan Nama tryout" required>
    					</div>
    					<div class="form-group">
    						<label>Universiats</label>
    						<input type="text" name="universitas" class="form-control" placeholder="Masukan Nama Universitas" required>
    					</div>
    					<div class="form-group">
    						<label>Jurusan</label>
    						<input type="text" name="jurusan" class="form-control" placeholder="Masukan Nama Jurusan" required>
    					</div>
    					<hr>
    					<button type="submit" class="btn btn-primary btn-block" style="margin-right: 0; margin-left:auto">Tambah</button>
    				</form>
    			</div>

    		</div>
    	</div>
    </div>