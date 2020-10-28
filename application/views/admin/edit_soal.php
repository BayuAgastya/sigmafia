<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Soal</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <?php echo form_open_multipart(base_url($soalUp)) ?>
                    <input type="hidden" name="id_soal" class="form-control" required value="<?= $data->id_soal ?>">
                    <div class="form-group">
                        <label>Judul</label>
                        <input type="text" name="judul" class="form-control" required value="<?= $data->judul ?>">
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="textarea" name="deskripsi" class="form-control" required value="<?= $data->deskripsi ?>">
                    </div>
                    <div class="form-group">
                        <label>Soal</label>
                        <input type="text" name="soal" class="form-control" disabled value="<?= $data->soal ?>">
                        <div class="custom-file">
                            <input name="file" type="file" id="customFile" required>
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </section>
</div>