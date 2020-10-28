<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Detail Siswa</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <form action="<?= base_url('editSiswa'); ?>" method="post">
                        <input type="hidden" name="id_murid" class="form-control" required value="<?= $data->id_murid ?>">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="nama" class="form-control" value="<?= $data->nama ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Asal Sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-control" value="<?= $data->asal_sekolah ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat Rumah</label>
                            <input type="text" name="alamat_rumah" class="form-control" value="<?= $data->alamat_rumah ?>" required>
                        </div>
                        <div class="form-group">
                            <label>ID Instagram</label>
                            <input type="text" name="instagram" class="form-control" value="<?= $data->instagram ?>" required>
                        </div>
                        <div class="form-group">
                            <label>ID Line</label>
                            <input type="text" name="line" class="form-control" value="<?= $data->line ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Nomer Whatsaap</label>
                            <input type="text" name="whatsaap" class="form-control" value="<?= $data->whatsaap ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="<?= $data->email ?>" required>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>