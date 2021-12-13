<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h2 class="m-0 text-dark" style="text-align: center;">Detail Hasil Tryout</h2>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <a class="btn btn-flat btn-sm btn-default cc_pointer" href="<?= base_url('admin_menu/tryout/tryout'); ?>">
                            <i class=" fa fa-arrow-left"></i> Kembali
                        </a>
                        <button type="button" onclick="reload_ajax()" class="btn btn-flat btn-sm bg-purple cc_pointer">
                            <i class="fa fa-refresh cc_pointer"></i> Reload
                        </button>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <table class="table w-100">
                                <tbody>
                                    <tr>
                                        <th>Nama TO :</th>
                                        <td><?= $data->nama_tryout ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Soal :</th>
                                        <td><?= $data->jumlah_soal ?> (<?= $data->jenis ?>)</td>
                                    </tr>
                                    <tr>
                                        <th>Waktu :</th>
                                        <td><?= $data->waktu ?></td>
                                    </tr>
                                    <tr>
                                        <th>Bobot Total :</th>
                                        <td><?= $bobot_total; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Mata Pelajaran :</th>
                                        <td><?= $data->matpel ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nilai Terendah :</th>
                                        <td><?= number_format($min, 2, '.', ''); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Niliai tertinggi :</th>
                                        <td><?= number_format($max, 2, '.', ''); ?></td>
                                    </tr>
                                    <tr>
                                        <th>Rata-rata :</th>
                                        <td><?= number_format($average, 2, '.', ''); ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
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
                                    <tr style="text-align: center;">
                                        <th>ID Hasil</th>
                                        <th>ID TO</th>
                                        <th>ID User</th>
                                        <th>Urut Soal</th>
                                        <th>Urut Jawaban</th>
                                        <th>Jumlah Benar</th>
                                        <th>Nilai</th>
                                        <th>Total Bobot</th>
                                        <th>Tgl Mulai</th>
                                        <th>Tgl Selesai</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($hasil as $i) : ?>
                                        <tr style="text-align: center;">
                                            <td style="width:01%"><?= $i->id_hasil; ?></td>
                                            <td style="width:01%"><?= $i->id_tryout; ?></td>
                                            <td style="width:01%"><?= $i->id_user; ?></td>
                                            <td style="width:01%"><?= $i->urut_soal; ?></td>
                                            <td style="width:01%"><?= $i->urut_jawaban; ?></td>
                                            <td style="width:10%"><?= $i->jml_benar; ?></td>
                                            <td style="width:10%"><?= $i->nilai; ?></td>
                                            <td style="width:10%"><?= $i->nilai_bobot; ?></td>
                                            <td style="width:10%"><?= $i->tgl_mulai; ?></td>
                                            <td style="width:10%"><?= $i->tgl_selesai; ?></td>
                                            <td style="width:10%"><?= $i->status; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>