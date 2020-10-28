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
                    <input type="hidden" name="id_murid" class="form-control" required value="<?= $data->id_murid ?>">
                    <label>Nama : </label>
                    <?= $data->nama ?> <br>
                    <label>Asal Sekolah : </label>
                    <?= $data->asal_sekolah ?> <br>
                    <label>Alamat Rumah : </label>
                    <?= $data->alamat_rumah ?><br>
                    <label>ID Instagram : </label>
                    <?= $data->instagram ?><br>
                    <label>ID Line : </label>
                    <?= $data->line ?><br>
                    <label>Nomer Whatsaap : </label>
                    <?= $data->whatsaap ?><br>
                    <label>Email : </label>
                    <?= $data->email ?><br>
                </div>
            </div>
        </div>
    </section>
</div>