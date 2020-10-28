<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h2 class="m-0 text-dark" style="text-align: center;">Detail Tryout</h2>
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <a class="btn btn-flat btn-sm btn-default" href="<?= base_url('admin_menu/tryout/tryout'); ?>">
                            <i class=" fa fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <table class="table w-100">
                                <tbody>
                                    <tr>
                                        <th>Nama TO :</th>
                                        <td><input type="text" class="form-control" name="nama_tryout" value="<?= $data->nama_tryout ?>"></td>
                                    </tr>
                                    <tr>
                                        <th>Jumlah Soal :</th>
                                        <td><input type="number" class="form-control" name="nama_tryout" value="<?= $data->jumlah_soal ?>">

                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Soal :</th>
                                        <td>
                                            <select name="jenis" class="form-control">
                                                <option value="" disabled selected><?= $data->jenis ?></option>
                                                <option value="acak">Acak Soal</option>
                                                <option value="urut">Urut Soal</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Waktu (menit) :</th>
                                        <td><input type="number" class="form-control" name="waktu" value="<?= $data->waktu ?>"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Mata Pelajaran : (<?= $data->matpel ?>)</th>
                                        <td>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="matpel[]" value="Matematika">
                                                <label class="form-check-label">Matematika</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="matpel[]" value="Fisika">
                                                <label class="form-check-label">Fisika</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" name="matpel[]" value="Kimia">
                                                <label class="form-check-label">Kimia</label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label>Tingkat : (<?= $data->id_tingkat ?>)</label>
                                        </td>
                                        <td>
                                            <div class="form-group col-sm-12">

                                                <?= form_dropdown('tingkat', get_combo('tingkat', 'id_tingkat', 'nama_tingkat', array(">> Pilih Tingkat")), $data_tingkat, array('class' => "form-control", 'id' => "tingkat")) ?>

                                            </div>
                                        </td>
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
                <div class="col-sm-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="container">
                                <h3 class="text-center">Bank Soal</h3>
                            </div>
                            <a class="btn btn-flat btn-default btn-lg float-right bg-gradient-purple" href="<?= base_url('admin_menu/tryout/tryout'); ?>">
                                Tambah <i class=" fa fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-head-fixed">
                                <thead>
                                    <tr>
                                        <th>Pilih</th>
                                        <th>ID</th>
                                        <th>Bobot</th>
                                        <th>Soal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_bank->result() as $i) : ?>
                                        <tr>
                                            <td style="width:01%">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="">
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
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <div class="container">
                                <h3 class="text-center">Pilihan Soal</h3>
                            </div>
                            <a class="btn btn-flat btn-default btn-lg bg-gradient-purple" href="<?= base_url('admin_menu/tryout/tryout'); ?>">
                                <i class=" fa fa-arrow-left"></i> Kurangi
                            </a>
                            <label class="float-right">Bobot total : (Jumlah Bobot)</label>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-head-fixed">
                                <thead>
                                    <tr>
                                        <th>Pilih</th>
                                        <th>ID</th>
                                        <th>Bobot</th>
                                        <th>Soal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data_bank->result() as $i) : ?>
                                        <tr>
                                            <td style="width:01%">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" name="">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>