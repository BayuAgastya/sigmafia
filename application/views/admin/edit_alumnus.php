    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Edit Alumnus</h1>
                    </div>
                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <form action="<?= base_url('editAlumni'); ?>" method="post">
                            <input type="hidden" name="id_alumnus" class="form-control" required value="<?= $data->id_alumnus ?>">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" required value="<?= $data->nama ?>">
                            </div>
                            <div class="form-group">
                                <label>Universitas</label>
                                <input type="text" name="universitas" class="form-control" required value="<?= $data->universitas ?>">
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <input type="text" name="jurusan" class="form-control" required value="<?= $data->jurusan ?>"></<input>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>