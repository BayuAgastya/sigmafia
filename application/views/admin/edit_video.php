<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit Video</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <form action="<?= base_url($pilihanUp); ?>" method="post">
                        <input type="hidden" name="id_video" class="form-control" required value="<?= $data->id_video ?>">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" name="judul" class="form-control" required value="<?= $data->judul ?>">
                        </div>
                        <div class="form-group">
                            <label>Url</label>
                            <input type="text" name="url" class="form-control" required value="<?= $data->url ?>">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="textarea" name="deskripsi" class="form-control" required value="<?= $data->deskripsi ?>">
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>