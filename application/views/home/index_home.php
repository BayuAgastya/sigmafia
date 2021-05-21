<div class="flash-data" data-flashdata="<?= $this->session->flashdata('main'); ?>"></div>
<!--================ Start Home Banner Area =================-->

<section class=" home_banner_area">
	<div class="float">
		<img src="<?= base_url('assets/main/'); ?>img/info_les.png" alt="" style="width: 100px;" data-toggle="modal" data-target="#modal-info">
	</div>
	<div class=" banner_inner">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="text-center">
						<img class="navbar-brand logo_h" href="<?= base_url('home'); ?>"><img src="<?= base_url('assets/main/'); ?>img/Logo Sigmafia 2020-02.png" alt="Sigmafia" style="width: 250px;"></img>
					</div>
					<div class="banner_content text-center">
						<div class="row">
							<div class="col-lg-3">
							</div>
							<div class="col-lg-6">
								<table style="border: 1px;">
									<tr>
										<th class="text-uppercase" style="text-align: center;">
											<h3>
												Once you stop learning, you starts dying
											</h3>
										</th>
									</tr>
									<tr>
										<th>
											<h6 style="float: right;">
												~ Albert Einstein ~
											</h6>
										</th>
									</tr>
								</table>
							</div>
							<div class="col-lg-3">
							</div>
						</div>

						<div>
							<?php if ($this->admin_model->is_role() == "user") { ?>
							<?php } else { ?>
								<a href="#" class="primary-btn ml-sm-3 ml-0" data-toggle="modal" data-target="#modal-daftar">Daftar Les</a>
							<?php } ?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ End Home Banner Area =================-->

<!--================ Start Feature Area =================-->


<section class="feature_area section_gap_top">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5">
				<div class="main_title">
					<h2 class="mb-3">Awesome Feature</h2>
					<hr style="border: 1px solid orange; max-width: 350px;">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="single_feature">
					<div class="icon"><span class="flaticon-student"></span></div>
					<div class="desc">
						<h4 class="mt-3 mb-2">Private</h4>
						<p>
							Pembelajaran tatap muka (offline) dimana guru datang ke rumah murid, ataupun sebaliknya. Suasana belajar di rumah guru yang nyaman dan kondusif membuat
							belajar lebih fokus dan menyenangkan.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="single_feature">
					<div class="icon"><span class="flaticon-student"></span></div>
					<div class="desc">
						<h4 class="mt-3 mb-2">Online Private</h4>
						<p>
							Pembelajaran dilakukan secara daring (online) menggunakan aplikasi skype yang mudah dan relevan untuk digunakan. Tahapan pembelajaran tetap sama seperti
							pembelajaran offline.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="single_feature">
					<div class="icon"><span class="flaticon-earth"></span></div>
					<div class="desc">
						<h4 class="mt-3 mb-2">Video Learning</h4>
						<p>
							Dengan adanya video pembelajaran semakin memudahkan siswa untuk memahami mengenai materi atau bab yang belum dipahami.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6">
				<div class="single_feature">
					<div class="icon"><span class="flaticon-book"></span></div>
					<div class="desc">
						<h4 class="mt-3 mb-2">Soal-Soal</h4>
						<p>
							Kumpulan soal-soal terlengkap dari berbagai tingkat pendidikan mulai dari SD hingga SMA dan bahkan tingkat olimpiade dari berbagai tingkat dengan variasi soal
							yang bervariasi membuat siswa mampu melatih skill dan konsepnya sehingga meningkatkan kepercayaa diri siswa di kelas. Materi yang disediakan yaitu matematika,
							fisika dan kimia untuk SMA dan SMP . Kemudian matematika untuk tingkat SD.
						</p>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6">
				<div class="single_feature">
					<div class="icon"><span class="flaticon-book"></span></div>
					<div class="desc">
						<h4 class="mt-3 mb-2">Materi</h4>
						<p>
							Kumpulan materi berupa ringkasan terlengkap dapat diakses disini. Mulai dari materi matematika, fisika dan kimia untuk SMA dan SMP . kemudian Matematika untuk
							tingkat SD.
						</p>
					</div>
				</div>
			</div>


		</div>
	</div>
</section>

<!--================ End Feature Area =================-->

<!--================ Start Testimonial Area =================-->
<section class="testimonial_area">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="main_title">
					<h2 class="mb-3">Testimonial</h2>
					<hr style="border: 1px solid orange; max-width: 300px;">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="testi_slider owl-carousel">
				<div class="testi_item" style="border:2px solid orange">
					<div class="row">
						<div class="testi_text">
							<h4>Ayu Sintya Devi</h4>
							<h6>Farmasi – Udayana</h6>
							<p style="border-left: 3px solid orange; padding-left: 10px;">
								Di Sigmafia private itu belajarnya asyik banget. Soal- soal nya lengkap dan terupdate dan
								diajarinnya juga dengan konsep-konsep yang mateng banget dan mudah diingat terutama untuk
								mempersiapkan diri untuk SBMPTN.
							</p>
						</div>
					</div>
				</div>
				<div class="testi_item" style="border:2px solid orange">
					<div class="row">
						<div class="testi_text">
							<h4>Pradnya Deva</h4>
							<h6>Ilmu Komputer – University of Technology Sydney</h6>
							<p style="border-left: 3px solid orange; padding-left: 10px;">
								Jujur, aku benci banget setiap liat soal hitungan tapi setelah tau sigmafia private yang dimana
								satu guru bisa ngajar 3 mapel nah aku jadi langsung coba nih. Dan that’s it! Ternyata kesibukanku
								selama ini jadi osis dapat terbayarkan dengan belajar singkat namun tepat dalam meraih
								universitas impianku.
							</p>
						</div>
					</div>
				</div>
				<div class="testi_item" style="border:2px solid orange">
					<div class="row">
						<div class="testi_text">
							<h4>Ratih Wiraputri</h4>
							<h6>Fakultas Kedokteran – Universitas Udayana</h6>
							<p style="border-left: 3px solid orange; padding-left: 10px;">
								Firstly, aku emang orang yang lebih suka buat belajar fokus dan kalau bisa sendiri biar lebih
								eksklusif. Dan akhirnya nemu private ini. Bener-bener terkesan nih aku, semua penjelasan konsep
								dan pengembangan soal-soal nya membuat aku sangat terbantu dalam mengerjakan soal SBMPTN.
							</p>
						</div>
					</div>
				</div>
				<div class="testi_item" style="border:2px solid orange">
					<div class="row">
						<div class="testi_text">
							<h4>Bella Donna</h4>
							<h6>Hukum – S2 – Universitas Padjajaran</h6>
							<p style="border-left: 3px solid orange; padding-left: 10px;">
								Dulu aku bingung bgt udh jarang ketemu matik terus test s2 nya ada test sejenis matik sbm gtu.
								Yatuhan! Bagus banget dan detail banget pengulangan materi dan semua konsep berpikir yang cepet
								ditularin ke aku smua. Thanks yaa udh sangat membantu aku!
							</p>
						</div>
					</div>
				</div>
				<div class="testi_item" style="border:2px solid orange">
					<div class="row">
						<div class="testi_text">
							<h4>Prapti Sukma</h4>
							<h6>D3 perpajakan – STAN</h6>
							<p style="border-left: 3px solid orange; padding-left: 10px;">
								Awalnya aku sempet down, karena melihat bnyk bgt yang pengen STAN apalagi D3 nya ☹ tapi berkat
								pengajaran konsep, cara cepat, pr online sampai ke konsep detail dalam menyelesaikan soal
								versi yang sangat mudah, saya merasa sangat fun dalam belajar.
							</p>
						</div>
					</div>
				</div>
				<div class="testi_item" style="border:2px solid orange">
					<div class="row">
						<div class="testi_text">
							<h4>Inten Bajra</h4>
							<h6>Sistem Informasi – UNAIR</h6>
							<p style="border-left: 3px solid orange; padding-left: 10px;">
								Aku dari kelas 10 SMA ikutan private ini, selalu bilang kalo belajar private sama kak diah
								asyik banget. Tutornya friendly banget . Pelayanan dalam bertanya 24 jam apalagi ada video
								pembelajaran yang dikasi ke kita. Thanks kak! Segala usaha dari dulu akhirnya terbayarkan
							</p>
						</div>
					</div>
				</div>
				<div class="testi_item" style="border:2px solid orange">
					<div class="row">
						<div class="testi_text">
							<h4>Prada Himawan</h4>
							<h6>Psikologi (International) – UGM</h6>
							<p style="border-left: 3px solid orange; padding-left: 10px;">
								Soal-soal yang bener-bener hampir mirip keluar semua di IUP test nya nih, semua konsep, cara
								berpikir mengenai solusi pemecahan masalah yang tepat itu bener-bener kak diah banget. Thanks
								ya kak!
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--================ End Testimonial Area =================-->

<!--================ Start Registration Area =================-->

<section class="section_gap registration_area">
	<div class="container">
		<div class="row justify-content-center">
			<?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
				<div class="col-lg">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12">
							<h1 class="mb-3" style="text-align: center;">Video Pembelajaran</h1>
							<hr style="border: 1px solid orange; max-width: 500px;">

							<div class="row">
								<div class="testi_slider owl-carousel">
									<?php $m = 0; ?>
									<?php $f = 0; ?>
									<?php $k = 0; ?>
									<?php foreach ($video_matik->result() as $i) : ?>
										<?php if (++$m > 2) break; ?>
										<div class="testi_item" style="border:2px solid orange">
											<div class="row">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $i->url; ?>" allowfullscreen></iframe>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
									<?php foreach ($video_fisika->result() as $i) : ?>
										<?php if (++$f > 2) break; ?>
										<div class="testi_item" style="border:2px solid orange">
											<div class="row">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $i->url; ?>" allowfullscreen></iframe>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
									<?php foreach ($video_kimia->result() as $i) : ?>
										<?php if (++$k > 2) break; ?>
										<div class="testi_item" style="border:2px solid orange">
											<div class="row">
												<div class="embed-responsive embed-responsive-16by9">
													<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $i->url; ?>" allowfullscreen></iframe>
												</div>
											</div>
										</div>
									<?php endforeach; ?>
								</div>
								<a class="text-white btn btn-warning btn-block" href="<?= base_url('video'); ?>">
									<h4 class="mt-2 mb-2 text-white">Lihat Semua Video</h4>
								</a>
							</div>
						</div>
					</div>
				</div>
			<?php } else if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() != "yes") { ?>
				<div class="col-lg-6">
					<div class="main_title">
						<h2 class="mb-3 text-white" style="margin-top: 20px">Video Pembelajaran</h2>
						<hr style="border: 1px solid orange; max-width: 300px;">
						<h4 class="mb-3 text-white">Anda tidak memiliki ijin untuk mengakses konten ini!</h4>
						<img src="<?= base_url('assets/main/'); ?>img/features/no_access.png" alt="Login first" style="height: auto; max-width:100%">
						<button class="mt-3 btn btn-danger btn-block" data-toggle="modal" data-target="#modal-request">Request Akses</button>
					</div>
				</div>
			<?php } else { ?>
				<div class="col-lg">
					<div class="row clock_sec clockdiv" id="clockdiv">
						<div class="col-lg-12">
							<h1 class="mb-3" style="text-align: center;">Ayo Daftar Sekarang</h1>
							<hr style="border: 1px solid orange; max-width: 500px;">
							<p style="text-align: center;">Bagi murid yang sudah selesai mendaftar les harap untuk menghubungi tutor
								melalui salah satu
								<a href="<?= base_url('contact'); ?>" style="color: orange;"><ins><strong>kontak</strong></ins></a>
								yang sudah tersedia
							</p>
						</div>
					</div>
					<div class="register_form">
						<form method="post" action="<?= base_url('tambahMurid'); ?>">
							<div class="row">
								<div class="col-lg-12 form_group" style="text-align: left">
									<input style="margin-top:10px; margin-bottom:10px" type="text" name="username" class="form-control" placeholder="Username" required>
									<input style="margin-top:10px; margin-bottom:10px" type="password" name="password" class="form-control" placeholder="Password" required>
									<input style="margin-top:10px; margin-bottom:10px" type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
									<input style="margin-top:10px; margin-bottom:10px" type="text" name="asal_sekolah" class="form-control" placeholder="Nama Asal Sekolah" required>
									<input style="margin-top:10px; margin-bottom:10px" type="text" name="alamat_rumah" class="form-control" placeholder="Alamat Rumah" required>
									<div class="row" style="margin-top:10px; margin-bottom:10px">
										<div class="col-sm-6">
											<input type="text" name="instagram" class="form-control" placeholder="ID Instagram" required>
										</div>
										<div class="col-sm-6">
											<input type="text" name="line" class="form-control" placeholder="ID Line" required>
										</div>
									</div>
									<div class="row" style="margin-top:10px; margin-bottom:10px" required>
										<div class="col-sm-6">
											<input type="text" name="whatsaap" class="form-control" placeholder="Nomer Whatsaap" required>
										</div>
										<div class="col-sm-6">
											<input type="text" name="email" class="form-control" placeholder="Alamat Email" required>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-12 text-center">
								<button type="submit" class="primary-btn">Daftar</button>
							</div>
						</form>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!--================ End Registration Area =================-->

<!--================ Start Trainers Area =================-->
<section class="trainer_area section_gap_top">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5">
				<div class="main_title">
					<h2 class="mb-3">Our Expert Trainers</h2>
					<hr style="border: 1px solid orange; max-width: 400px;">
				</div>
			</div>
		</div>
		<div class="row justify-content-center d-flex align-items-center">
			<div class="col-lg-8 col-md-6 col-sm-12 single-trainer">
				<div class="meta-text text-sm-center">
					<div class="row">
						<div class="col-lg-5">
							<img class="img-fluid" src="<?= base_url('assets/main/'); ?>img/trainer/" alt="">
						</div>
						<div class="col-lg-6" style="margin-top: 10px;">
							<h4>Putu Diah Prema Vahini, S.Pd</h4>
							<p class="designation">Main Teacher</p>
							<div class="mb-4">
								<p>
									Motto : Push Yourself Because No One Else Is Going To Do It For You
								</p>
								<p>
									Tutor berpengalaman mengajar private selama 4 tahun di bidang Matematika, Fisika dan Kimia non billingual dan bilingual.
								</p>
							</div>
							<div class="align-items-center justify-content-center d-flex">
								<a href="https://www.facebook.com/sonehyun?fref=nf&__tn__=%2Cdm*F-R&eid=ARD-CGPGcHx1srx4Eo1pskFTrky842Lxkyu1-ruTRT0KzPfLNIkc_YrZ-mZuU4ckYoTg75_GAmz0PaTB"><i class="ti-facebook"></i></a>
								<a href="https://www.instagram.com/diahprema/"><i class="ti-instagram"></i></a>
								<a href="https://twitter.com/diah_prema"><i class="ti-twitter"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
<!--================ End Trainers Area =================-->

<!--================ Start Soal- Materi Area =================-->
<section class="section_gap">
	<div class="container" id="rcorners1">
		<h1>Materi</h1>
		<hr style="border: 1px solid orange; max-width: 120px;">

		<div class="container">
			<div class="tab mb-3" style="align-content: center;">
				<div class="btn-group" style="width:100%">
					<button class="tablinks" onclick="openLesson(event, 'KN')" style="width:50%">Kurikulum Nasional</button>
					<button class="tablinks" onclick="openLesson(event, 'KI')" style="width:50%">Kurikulum Internasional</button>
				</div>
			</div>
		</div>

		<div id="KN" class="tabcontent">
			<div class="container mb-5">

				<div class="row">
					<div class="col-3">
						<h3 style="color: white; border-bottom: 1px solid orange; text-align:center;">Tingkat</h3>
						<!-- Tab navs -->
						<div class="nav flex-column nav-pills text-center" id="v-pills-tab-materi" role="tablist" aria-orientation="vertical">
							<a class="nav-link active" id="v-pills-sd-tab" data-toggle="pill" href="#v-pills-sd" role="tab" aria-controls="v-pills-sd" aria-selected="true">SD</a>
							<a class="nav-link" id="v-pills-smp-tab" data-toggle="pill" href="#v-pills-smp" role="tab" aria-controls="v-pills-smp" aria-selected="false">SMP</a>
							<a class="nav-link" id="v-pills-sma-tab" data-toggle="pill" href="#v-pills-sma" role="tab" aria-controls="v-pills-sma" aria-selected="false">SMA</a>
						</div>
						<!-- Tab navs -->
					</div>

					<div class="col-3" style="border-left: 1px solid orange;">
						<h3 style="color: white; border-bottom: 1px solid orange; text-align:center;">Kelas</h3>
						<ul>
							<li class="dropdown dropright"><a href="#">4</a></li>
							<li class="dropdown dropright"><a href="#">5</a></li>
							<li class="dropdown dropright"><a href="#">6</a></li>
						</ul>

					</div>
					<div class="col-6" style="border-left: 1px solid orange;">
						<h3 style="color: white; border-bottom: 1px solid orange; text-align:center;">Materi</h3>

					</div>

				</div>

			</div>
		</div>

		<div id="KI" class="tabcontent">
			<div class="container mb-5">

				<div class="row">
					<div class="col-3">
						<!-- Tab navs -->
						<div class="nav flex-column nav-pills text-center" id="inter-pills-tab-materi" role="tablist" aria-orientation="vertical">
							<a class="nav-link active" id="inter-pills-sd-tab" data-toggle="pill" href="#inter-pills-sd" role="tab" aria-controls="inter-pills-sd" aria-selected="true">SD</a>
							<a class="nav-link" id="inter-pills-smp-tab" data-toggle="pill" href="#inter-pills-smp" role="tab" aria-controls="inter-pills-smp" aria-selected="false">SMP</a>
							<a class="nav-link" id="inter-pills-sma-tab" data-toggle="pill" href="#inter-pills-sma" role="tab" aria-controls="inter-pills-sma" aria-selected="false">SMA</a>
						</div>
						<!-- Tab navs -->
					</div>

					<div class="col-9" style="border-left: 1px solid orange;">
						<!-- Tab content -->
						<div class="tab-content" id="inter-pills-tab-materiContent">
							<div class="tab-pane fade show active" id="inter-pills-sd" role="tabpanel" aria-labelledby="inter-pills-sd-tab">
								<h3 style="color: white;">Grade</h3>
							</div>
							<div class="tab-pane fade" id="inter-pills-smp" role="tabpanel" aria-labelledby="inter-pills-smp-tab">
								<h3 style="color: white;">Grade</h3>
							</div>
							<div class="tab-pane fade" id="inter-pills-sma" role="tabpanel" aria-labelledby="inter-pills-sma-tab">
								<h3 style="color: white;">Grade</h3>
							</div>
						</div>
						<!-- Tab content -->
					</div>
				</div>

			</div>
		</div>


	</div>
	</div>

</section>
<section class="soal_area">
	<div class="container">
		<div class="row justify-content-center">

			<?php if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() == "yes") { ?>
				<div class="col-lg-6">
					<div class="main_title">
						<h2 class="mb-3 text-white" style="margin-top: 20px">Soal - Soal</h2>
						<hr style="border: 1px solid orange; max-width: 200px;">
						<table>
							<?php $m = 0; ?>
							<?php $f = 0; ?>
							<?php $k = 0; ?>
							<?php foreach ($soal_matik->result() as $i) : ?>
								<?php if (++$m > 2) break; ?>
								<tr>
									<td style="color: white"><?php echo $i->judul; ?></td>
									<td style="text-align: end">
										<a class="btn btn-warning circle" style="color: white" href="<?= base_url('uploads/soal/matik/' . $i->soal) ?>" target="_blank"><span class="ti-search"></span>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
							<?php foreach ($soal_fisika->result() as $i) : ?>
								<?php if (++$f > 2) break; ?>
								<tr>
									<td style="color: white"><?php echo $i->judul; ?></td>
									<td style="text-align: end">
										<a class="btn btn-warning circle" style="color: white" href="<?= base_url('uploads/soal/fisika/' . $i->soal) ?>"><span class="ti-search"></span>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
							<?php foreach ($soal_kimia->result() as $i) : ?>
								<?php if (++$k > 2) break; ?>
								<tr>
									<td style="color: white"><?php echo $i->judul; ?></td>
									<td style="text-align: end">
										<a class="btn btn-warning circle" style="color: white" href="<?= base_url('uploads/soal/kimia/' . $i->soal) ?>"><span class="ti-search"></span>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div>
					<div class="text-center">
						<a href="<?= base_url('soal'); ?>" class="event-link">
							Lihat Semua Soal <img src="<?= base_url('assets/main/'); ?>img/next.png" alt="" />
						</a>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="main_title">
						<h2 class="mb-3 text-white" style="margin-top: 20px">Materi</h2>
						<hr style="border: 1px solid orange; max-width: 200px;">
						<table>
							<?php $m = 0; ?>
							<?php $f = 0; ?>
							<?php $k = 0; ?>
							<?php foreach ($materi_matik->result() as $i) : ?>
								<?php if (++$m > 2) break; ?>
								<tr>
									<td style="color: white"><?php echo $i->judul; ?></td>
									<td style="text-align: end">
										<a class="btn btn-warning circle" style="color: white" href="<?= base_url('uploads/materi/matik/' . $i->materi) ?>"><span class="ti-search"></span>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
							<?php foreach ($materi_fisika->result() as $i) : ?>
								<?php if (++$f > 2) break; ?>
								<tr>
									<td style="color: white"><?php echo $i->judul; ?></td>
									<td style="text-align: end">
										<a class="btn btn-warning circle" style="color: white" href="<?= base_url('uploads/materi/fisika/' . $i->materi) ?>"><span class="ti-search"></span>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
							<?php foreach ($materi_kimia->result() as $i) : ?>
								<?php if (++$k > 2) break; ?>
								<tr>
									<td style="color: white"><?php echo $i->judul; ?></td>
									<td style="text-align: end">
										<a class="btn btn-warning circle" style="color: white" href="<?= base_url('uploads/materi/kimia/' . $i->materi) ?>"><span class="ti-search"></span>
										</a>
									</td>
								</tr>
							<?php endforeach; ?>
						</table>
					</div>
					<div class="text-center">
						<a href="<?= base_url('soal'); ?>" class="event-link">
							Lihat Semua Materi <img src="<?= base_url('assets/main/'); ?>img/next.png" alt="" />
						</a>
					</div>
				</div>
			<?php } else if ($this->admin_model->is_role() == "user" & $this->admin_model->is_akses() != "yes") { ?>
				<div class="col-lg-6">
					<div class="main_title">
						<h2 class="mb-3 text-white" style="margin-top: 20px">Soal dan Materi</h2>
						<hr style="border: 1px solid orange; max-width: 300px;">
						<h4 class="mb-3 text-white">Anda tidak memiliki akses untuk mengakses konten ini!</h4>
						<img src="<?= base_url('assets/main/'); ?>img/features/no_access.png" alt="Login first" style="height: auto; max-width:100%">
						<button class="mt-3 btn btn-danger btn-block" data-toggle="modal" data-target="#modal-request">Request Akses</button>
					</div>
				</div>
			<?php } else { ?>
				<div class="col-lg-6">
					<div class="main_title">
						<h2 class="mb-3 text-white" style="margin-top: 20px">Soal dan Materi</h2>
						<hr style="border: 1px solid orange; max-width: 300px;">
						<h4 class="mb-3 text-white">Login terlebih dahulu dan request akses konten</h4>
						<img src="<?= base_url('assets/main/'); ?>img/features/login_first.png" alt="Login" style="height: auto; max-width:100%">
						<a class="mt-3 text-white btn btn-warning btn-block" href="<?= base_url('login'); ?>">
							<h4 class="mt-2 mb-2 text-white">LOGIN</h4>
						</a>
					</div>
				</div>
			<?php } ?>

		</div>
	</div>
</section>
<!--================ End Soal-soal Area =================-->

<!--================ Start Alumnus Area =================-->
<div class="popular_courses section_gap">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-5">
				<div class="main_title">
					<h2 class="mb-3">Alumnus</h2>
					<hr style="border: 1px solid orange; max-width: 200px;">
				</div>
			</div>
		</div>
		<div class="row">
			<!-- single course -->
			<div class="col-lg-12">
				<div class="tbl-header" style="width:100%">
					<table cellpadding="0" cellspacing="0" border="0">
						<thead>
							<tr>
								<th style="width:05%">No</th>
								<th style="width:30%">Nama</th>
								<th style="width:35%">Universitas</th>
								<th style="width:30%">Jurusan</th>
							</tr>
						</thead>
					</table>
				</div>
				<div class="tbl-content">
					<table cellpadding="0" cellspacing="0" border="0">
						<tbody>
							<?php foreach ($data_alumnus->result() as $i) : ?>
								<tr>
									<td style="width:05%"><?php echo $i->id_alumnus; ?></td>
									<td style="width:30%"><?php echo $i->nama; ?></td>
									<td style="width:35%"><?php echo $i->universitas; ?></td>
									<td style="width:30%"><?php echo $i->jurusan; ?></td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<!--================ End Alumnus Area =================-->



<div class="modal fade" id="modal-info">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">INFO LES</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Satu</a>
					<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Dua</a>
					<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">TIGA</a>
				</div>
			</nav>
			<div class="tab-content" id="nav-tabContent">
				<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<div class="modal-body">
						<div class="container">
							PENJELASAN TENTANG LES PRIVATE
							<br>
							**COMING SOON**
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<div class="modal-body">
						<div class="container">
							PENJELASAN TENTANG LES PRIVATE
							<br>
							**COMING SOON**
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
					<div class="modal-body">
						<div class="container">
							PENJELASAN TENTANG LES PRIVATE
							<br>
							**COMING SOON**
						</div>
					</div>
				</div>
			</div>



		</div>
	</div>
</div>




<div class="modal fade" id="modal-daftar">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">FORM DAFTAR LES</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<form method="post" action="<?= base_url('tambahMurid'); ?>">
						<div class="row">
							<div class="col-lg-12 form_group" style="text-align: left">
								<input style="margin-top:10px; margin-bottom:10px" type="text" name="username" class="form-control" placeholder="Username" required>
								<input style="margin-top:10px; margin-bottom:10px" type="password" name="password" class="form-control" placeholder="Password" required>
								<input style="margin-top:10px; margin-bottom:10px" type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
								<input style="margin-top:10px; margin-bottom:10px" type="text" name="asal_sekolah" class="form-control" placeholder="Nama Asal Sekolah" required>
								<input style="margin-top:10px; margin-bottom:10px" type="text" name="alamat_rumah" class="form-control" placeholder="Alamat Rumah" required>
								<div class="row" style="margin-top:10px; margin-bottom:10px">
									<div class="col-sm-6">
										<input type="text" name="instagram" class="form-control" placeholder="ID Instagram" required>
									</div>
									<div class="col-sm-6">
										<input type="text" name="line" class="form-control" placeholder="ID Line" required>
									</div>
								</div>
								<div class="row" style="margin-top:10px; margin-bottom:10px" required>
									<div class="col-sm-6">
										<input type="text" name="whatsaap" class="form-control" placeholder="Nomer Whatsaap" required>
									</div>
									<div class="col-sm-6">
										<input type="text" name="email" class="form-control" placeholder="Alamat Email" required>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<button type="submit" class="btn btn-primary btn-block">Daftar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>