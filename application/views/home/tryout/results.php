<link rel="icon" href="<?= base_url('assets/main/'); ?>img/S logo.png" type="image/png">

<section class="section_gap">
    <div class="container">
        <div class="card ">
            <div class="card-header">
                <h2 class="card-title mt-2" style="text-align: center;">Hasil Tryout (Isi Nama Tryoutnya)</h2>
            </div>
            <div class="card-body">
                <div class="row container">
                    <div class="col-lg-6" style="text-align: center;">
                        <!-- <img src="<?= base_url('assets/main/'); ?>img/features/no_access.png" alt="Login first" style="height: auto; max-width:70%;"> -->
                    </div>
                    <div class="col-lg-6">
                        <h1>Total Score : <?= $nilai; ?></h1>
                        <p>Total Soal : <?= $total ?></p>
                        <div class="row">
                            <div class="col-lg-6">
                                <p>Benar : <?= $benar ?></p>

                            </div>
                            <div class="col-lg-6">
                                <p>Salah : <?= $salah ?></p>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="<?= base_url('user/tryout/tryout_base'); ?>" type="button" class="genric-btn btn-block primary-border text-uppercase mt-4">Kembali</a>
                    </div>
                    <div class="col-lg-6">
                        <a href="<?= base_url('user/tryout/tryout_base'); ?>" type="button" class="genric-btn btn-block primary-border text-uppercase mt-4">Periksa Jawaban</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>