<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Detail Soal</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <div class="container">
                        <h3 class="text-center">Soal</h3>
                        <?php if (!empty($data->file_soal)) : ?>
                            <div class="w-25">
                                <?= tampil_media('uploads/bank_soal/' . $data->file_soal); ?>
                            </div>
                        <?php endif; ?>
                        <?= $data->soal ?>
                        <hr class="my-4">
                        <h3 class="text-center">Jawaban</h3>

                        <?php
                        $abjad = ['a', 'b', 'c', 'd', 'e'];
                        $benar = "<i class='fa fa-check-circle text-purple'></i>";

                        foreach ($abjad as $abj) :

                            $ABJ = strtoupper($abj);
                            $opsi = 'opsi_' . $abj;
                            $file = 'file_' . $abj;
                        ?>

                            <h4>Pilihan <?= $ABJ ?> <?= $data->jawaban === $ABJ ? $benar : "" ?></h4>
                            <?= $data->$opsi ?>

                            <?php if (!empty($data->$file)) : ?>
                                <div class="w-25 mx-auto">
                                    <?= tampil_media('uploads/bank_soal/' . $data->$file); ?>
                                </div>
                            <?php endif; ?>

                        <?php endforeach; ?>

                        <hr class="my-4">
                        <h3>Pembahasan</h3>
                        <?= $data->pembahasan ?>
                        <hr class="my-4">
                        <strong>Dibuat pada :</strong> <?= date($data->created_on) ?>
                        <br>
                        <strong>Terkahir diupdate :</strong> <?= date($data->updated_on) ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>