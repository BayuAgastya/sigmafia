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
                                <label for="jenis">Acak Soal</label>
                                <select name="jenis" class="form-control">
                                    <option value="" disabled selected>--- Pilih ---</option>
                                    <option value="acak">Acak Soal</option>
                                    <option value="urut">Urut Soal</option>
                                </select>
                                <small class="help-block"></small>
                            </div>
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