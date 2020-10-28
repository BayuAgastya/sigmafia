<link rel="icon" href="<?= base_url('assets/main/'); ?>img/S logo.png" type="image/png">

<section class="section_gap">
    <div class="container">
        <h1 class="mb-5">Persiapkan Sebelum Tryout</h1>
        <div class="card ">
            <div class="card-header">
                <h2 class="card-title mt-2" style="text-align: center;"><?= $to->nama_tryout ?></h2>
            </div>
            <div class="card-body">
                <div class="row container">
                    <div class="col-lg-6" style="text-align: center;">
                        <img src="<?= base_url('assets/main/'); ?>img/features/no_access.png" alt="Login first" style="height: auto; max-width:70%;">
                    </div>
                    <div class="col-lg-6">
                        <p>Mata Pelajaran : <?= $to->matpel ?></p>
                        <p>Jumlah Soal : <?= $to->jumlah_soal ?></p>
                        <p>Waktu : <?= $to->waktu ?> Menit</p>
                        <p>Total Bobot : 200</p>
                    </div>

                </div>
                <a href="<?= base_url('startTO/' . $to->id_tryout) ?>" type="button" class="genric-btn btn-block primary-border text-uppercase mt-4">Mulai Tryout</a>
            </div>
        </div>
    </div>
</section>