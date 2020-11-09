<title><?= $title ?></title>

<body>
    <nav class="navbar navbar-dark">
        <a style="color: whitesmoke;">
            <h5>
                <img src="<?= base_url('assets/main/'); ?>img/elements/user-white.png" style="height: 30px;">
                <?= $this->session->userdata("user_name") ?>
            </h5>
        </a>
        <a class="" href="#">
            <img src="<?= base_url('assets/main/'); ?>img/Logo Sigmafia 2020-01.png" height="30px" class="d-inline-block align-top" style="color:aliceblue;">
        </a>
    </nav>

    <div class="row m-2 pt-1">
        <div class="col-lg-8 container">
            <?php $no = 1; ?>
            <?php foreach ($relation->result() as $rel) : ?>
                <div class="card">
                    <div class="card-header">
                        <h4>Soal No.<?= $no; ?> </h4>
                    </div>
                    <div class="card-body" style="text-align: justify;">
                        <?php if (!empty($rel->file_soal)) : ?>
                            <div class="w-25">
                                <?= tampil_media('uploads/bank_soal/' . $rel->file_soal); ?>
                            </div>
                        <?php endif; ?>
                        <?= $rel->soal ?>
                        <hr class="my-3">

                        <?php
                        $abjad = ['a', 'b', 'c', 'd', 'e'];

                        foreach ($abjad as $abj) :
                            $ABJ = strtoupper($abj);
                            $opsi = 'opsi_' . $abj;
                            $file = 'file_' . $abj;
                        ?>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="opsi_<?= $abj ?>" value="opsi_<?= $abj ?>">
                                <label class="form-check-label">
                                    <h5><?= $ABJ ?></h5>
                                </label>.
                                <?= $rel->$opsi ?>
                                <?php if (!empty($rel->$file)) : ?>
                                    <div class="w-25 mx-auto">
                                        <?= tampil_media('uploads/bank_soal/' . $rel->$file); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                        <hr>
                        <a href="" class="btn btn-flat btn-block btn-outline-success">Submit </a>
                    </div>
                </div>
                <?php $no++; ?>
            <?php endforeach; ?>
            <a href="" class="btn btn-flat btn-outline-secondary"><span class="fa fa-arrow-left"></span> Soal Sebelumnya</a>
            <a href="" class="btn btn-flat btn-outline-secondary" style="float:right;">Soal Selanjutnya <span class="fa fa-arrow-right"></span></a>
        </div>
        <div class="col-lg-4">
            <div class="sticky">
                <div class="card">
                    <div class="card-header">
                        <h5 style="text-align: center;">Sisa Waktu : <span id="countdown"><?= $to->waktu ?> Menit 00 Detik</span></h5>
                    </div>
                    <div class="card-body">
                        <h5 style="text-align: center;">Navigasi Soal</h5>
                        <ul class="pagination">
                            <li class="page-item"><a class="btn btn-flat btn-outline-dark" href="#">1</a></li>
                            <li class="page-item"><a class="btn btn-flat btn-outline-dark" href="#">2</a></li>
                            <li class="page-item"><a class="btn btn-flat btn-outline-dark" href="#">3</a></li>
                        </ul>
                        <!-- <div class="m-1">
                            <?php
                            $number = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '120'];
                            foreach ($number as $num) :
                            ?>
                                <a href="" class="btn btn-flat btn-outline-dark m-1" style="width: 50px;"><?= $num ?></a>
                            <?php endforeach; ?>
                        </div> -->
                    </div>
                </div>

                <div class="card">
                    <a href="" class="btn btn-flat btn-block btn-outline-danger">Hentikan Ujian </a>
                </div>
            </div>
        </div>

    </div>


    <script>
        function startTimer(duration, display) {
            var timer = duration,
                minutes, seconds;
            setInterval(function() {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                display.textContent = minutes + " Menit " + seconds + " Detik";

                if (--timer < 0) {
                    timer = duration;
                }
            }, 1000);
        }

        window.onload = function() {
            var countdownMinutes = 60 * <?= $to->waktu ?>,
                display = document.querySelector('#countdown');
            startTimer(countdownMinutes, display);
        };
    </script>

</body>

</html>