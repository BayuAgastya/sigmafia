    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    	<!-- Content Header (Page header) -->
    	<div class="content-header">
    		<div class="container-fluid">
    			<div class="row mb-2">
    				<div class="col-sm-6">
    					<h1 class="m-0 text-dark">Dashboard</h1>

    					<div class="flash-data" data-flashdata="<?= $this->session->flashdata('admin'); ?>"></div>

    				</div><!-- /.col -->
    			</div><!-- /.row -->
    		</div><!-- /.container-fluid -->
    	</div>
    	<!-- /.content-header -->

    	<!-- Main content -->
    	<section class="content">
    		<div class="container-fluid">
    			<!-- Small boxes (Stat box) -->
    			<div class="row">
    				<div class="col-lg-3 col-6">
    					<!-- small box -->
    					<div class="small-box bg-info">
    						<div class="inner">
    							<h3><?php echo $request; ?></h3>

    							<h4>Request Baru</h4>
    						</div>
    						<div class="icon">
    							<i class="ion ion-email-unread"></i>
    						</div>
    						<a href="<?= base_url('admin_menu/m_user/requestPage') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
    					</div>
    				</div>
    				<!-- ./col -->
    				<div class="col-lg-3 col-6">
    					<!-- small box -->
    					<div class="small-box bg-info">
    						<div class="inner">
    							<h3><?php echo $murid; ?></h3>

    							<h4>Jumlah Murid</h4>
    						</div>
    						<div class="icon">
    							<i class="ion ion-person-stalker"></i>
    						</div>
    						<a href="<?= base_url('admin_menu/m_siswa') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
    					</div>
    				</div>
    				<!-- ./col -->
    				<div class="col-lg-3 col-6">
    					<!-- small box -->
    					<div class="small-box bg-info">
    						<div class="inner">
    							<h3><?php echo $alumnus; ?></h3>

    							<h4>Jumlah Alumnus</h4>
    						</div>
    						<div class="icon">
    							<i class="ion ion-university"></i>
    						</div>
    						<a href="<?= base_url('admin_menu/m_alumni') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
    					</div>
    				</div>
    				<!-- ./col -->
    				<div class="col-lg-3 col-6">
    					<!-- small box -->
    					<div class="small-box bg-info">
    						<div class="inner">
    							<h3><?php echo $user; ?></h3>

    							<h4>Jumlah User & Admin</h4>
    						</div>
    						<div class="icon">
    							<i class="ion ion-key"></i>
    						</div>
    						<a href="<?= base_url('admin_menu/m_user') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
    					</div>
    				</div>
    				<!-- ./col -->
    			</div>
    			<div class="row">
    				<div class="col-lg-4 col-6">
    					<!-- small box -->
    					<div class="small-box bg-info">
    						<div class="inner">
    							<h3><?php echo $video; ?></h3>

    							<h4>Jumlah Video</h4>
    						</div>
    						<div class="icon">
    							<i class="ion ion-android-film"></i>
    						</div>
    						<a href="<?= base_url('admin_menu/m_video') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
    					</div>
    				</div>
    				<!-- ./col -->
    				<div class="col-lg-4 col-6">
    					<!-- small box -->
    					<div class="small-box bg-info">
    						<div class="inner">
    							<h3><?php echo $soal; ?></h3>

    							<h4>Jumlah Soal</h4>
    						</div>
    						<div class="icon">
    							<i class="ion ion-edit"></i>
    						</div>
    						<a href="<?= base_url('admin_menu/m_soal') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
    					</div>
    				</div>
    				<!-- ./col -->
    				<div class="col-lg-4 col-6">
    					<!-- small box -->
    					<div class="small-box bg-info">
    						<div class="inner">
    							<h3><?php echo $materi; ?></h3>

    							<h4>Jumlah Materi</h4>
    						</div>
    						<div class="icon">
    							<i class="ion ion-easel"></i>
    						</div>
    						<a href="<?= base_url('admin_menu/m_materi') ?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
    					</div>
    				</div>
    				<!-- ./col -->
    			</div>
    			<!-- /.row -->
    			<!-- Main row -->
    			<hr>
    			<div class="content-header">
    				<div class="container-fluid">
    					<div class="row mb-2">
    						<div class="col-sm-6">
    							<h1 class="m-0 text-dark">Widget</h1>
    						</div><!-- /.col -->
    					</div><!-- /.row -->
    				</div><!-- /.container-fluid -->
    			</div>
    			<div class="row">
    			</div>
    			<!-- /.row (main row) -->
    		</div><!-- /.container-fluid -->
    	</section>
    	<!-- /.content -->
    </div>
    <!-- /.content-wrapper -->