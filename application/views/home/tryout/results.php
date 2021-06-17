<link rel="icon" href="<?= base_url('assets/main/'); ?>img/S logo.png" type="image/png">

<section class="section_gap">
    <div class="container">
        <div class="card ">
            <div class="card-header">
                <h2 class="card-title mt-2" style="text-align: center;">Hasil nilai Tryout</h2>
            </div>
            <div class="card-body">
                <div class="row container">
                    <div class="col-lg-6" style="text-align: center;">
                        <img src="<?= base_url('assets/main/'); ?>img/features/no_access.png" alt="Login first" style="height: auto; max-width:70%;">
                    </div>
                    <div class="col-lg-6">
                        <div class="w-100">
                            <h1 class="center"><?= $nilai; ?></h1>
                        </div>
                        <p>Total Soal : <?= $total ?></p>
                        <p>Benar : <?= $benar ?></p>
                        <p>Salah : <?= $salah ?></p>
                    </div>

                </div>
                <a href="<?= base_url('user/tryout/tryout_base'); ?>" type="button" class="genric-btn btn-block primary-border text-uppercase mt-4">Kembali</a>
            </div>
        </div>
    </div>
</section>