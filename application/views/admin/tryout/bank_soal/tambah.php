<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Tambah Soal</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <?php echo form_open_multipart(base_url('admin_menu/tryout/bank_soal/save')) ?>
                    <div class="row">

                        <div class="col-sm-3">
                            <div class="p-3 bg-gray">
                                <div class="form-group col-sm-12">
                                    <label>Guru Pembuat Soal</label>
                                    <select name="id_guru" class="custom-select">
                                        <option selected>>> Pilih Guru</option>
                                        <?php foreach ($data_guru->result() as $g) : ?>
                                            <option value="<?= $g->id_guru; ?>"><?= $g->nama_guru; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label>Mata Pelajaran</label>
                                    <select name="id_matpel" class="custom-select">
                                        <option selected>>> Pilih Mata Pelajaran</option>
                                        <?php foreach ($data_matpel->result() as $g) : ?>
                                            <option value="<?= $g->id_matpel; ?>"><?= $g->nama_matpel; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
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

                        <div class="col-sm-7">
                            <div class="col-sm-12">
                                <label for="soal" class="control-label">Soal</label>
                                <div class="form-group">
                                    <input type="file" name="file_soal">
                                </div>
                                <div class="form-group">
                                    <textarea rows="7" name="soal" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <input name="sumber" class="form-control" placeholder="Sumber Soal"></input>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <label for="file">Opsi A</label>
                                <div class="form-group">
                                    <input type="file" name="file_a">
                                </div>
                                <div class="form-group">
                                    <textarea rows="3" name="opsi_a" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="file">Opsi B</label>
                                <div class="form-group">
                                    <input type="file" name="file_b">
                                </div>
                                <div class="form-group">
                                    <textarea rows="3" name="opsi_b" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="file">Opsi C</label>
                                <div class="form-group">
                                    <input type="file" name="file_c">
                                </div>
                                <div class="form-group">
                                    <textarea rows="3" name="opsi_c" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="file">Opsi D</label>
                                <div class="form-group">
                                    <input type="file" name="file_d">
                                </div>
                                <div class="form-group">
                                    <textarea rows="3" name="opsi_d" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <label for="file">Opsi E</label>
                                <div class="form-group">
                                    <input type="file" name="file_e">
                                </div>
                                <div class="form-group">
                                    <textarea rows="3" name="opsi_e" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <label for="jawaban" class="control-label">Kunci Jawaban</label>
                                <select required="required" name="jawaban" class="form-control select2" style="width:100%!important">
                                    <option value="" disabled selected>Pilih Kunci Jawaban</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                </select>
                            </div>

                            <div class="col-sm-12">
                                <label for="file">Pembahasan</label>
                                <div class="form-group">
                                    <textarea rows="3" name="pembahasan" class="form-control"></textarea>
                                </div>
                            </div>

                            <div class="form-group col-sm-12">
                                <label for="bobot" class="control-label">Bobot Soal (maks 99)</label>
                                <input required="required" value="1" type="number" name="bobot" placeholder="Bobot Soal" class="form-control">
                            </div>
                            <div class="form-group pull-right">
                                <a href="<?= base_url('admin_menu/tryout/bank_soal') ?>" class="btn btn-flat btn-default"><i class="fa fa-arrow-left"></i> Batal</a>
                                <button type="submit" id="submit" class="btn btn-primary bg-purple"><i class="fa fa-save"></i> Simpan</button>
                            </div>
                        </div>
                    </div>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </section>
</div>