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

    <form action="<?= base_url('finish'); ?>" method="POST">
        <input type="hidden" name="now" value="<?= $now; ?>">
        <div class="row m-2 pt-1">
            <div class="col-lg-8 container">
                <?php $no = 1; ?>
                <?php 
                    // var_dump($relation->result());return;
                ?>
                <?php foreach ($relation->result() as $rel) : ?>
                    <div class="card soal soal-<?= $no; ?>" style="display: none;">
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
                                    <input class="form-check-input" type="radio" name="jawaban[<?= $rel->id_bank; ?>]" value="opsi_<?= $abj ?>">
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
                            
                        </div>
                    </div>
                    <?php $no++; ?>
                <?php endforeach; ?>
                <a class="btn btn-flat btn-outline-secondary prev-question"><span class="fa fa-arrow-left"></span> Soal Sebelumnya</a>
                <a class="btn btn-flat btn-outline-secondary next-question" style="float:right;">Soal Selanjutnya <span class="fa fa-arrow-right"></span></a>
            </div>
            <div class="col-lg-4">
                <div class="sticky">
                    <div class="card">
                        <div class="card-header">
                            <h5 style="text-align: center;">Sisa Waktu : <span id="countdown"><?= $to->waktu ?> Menit 00 Detik</span></h5>
                        </div>
                        <div class="card-body">
                            <h5 style="text-align: center;">Navigasi Soal</h5>
                            <ul class="pagination" data-number="<?= $no; ?>">
                                <?php $no_kedua = 1;
                                for($no_kedua=1;$no_kedua<=$no;$no_kedua++){ ?>
                                <li class="page-item m-1"><a class="btn btn-flat btn-outline-dark" onclick="showquestion(<?= $no_kedua; ?>);" style="cursor: pointer;"><?= $no_kedua; ?></a></li>
                                <?php } ?>
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

                    <div class="card d-flex flex-row justify-content-center">
                        <div class="p-2 w-50">
                            <input type="hidden" name="id" value="<?= $id; ?>">
                            <button type="submit" class="btn btn-flat btn-block btn-outline-success">Submit </button>
                        </div>
                        <div class="p-2 w-50">
                            <a href="" class="btn btn-flat btn-block btn-outline-danger">Hentikan Ujian </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </form>

    <script>
    function prevquestion(id){
        var main = id-1;
        if(main <= 0){
            main = 1;
        }
        showquestion(main);
    }
    function nextquestion(id){
        var main = id+1;
        if(main >= $('.pagination').data('number')){
            main = $('.pagination').data('number');
        }
        showquestion(main);
    }
    function showquestion(id){
        $('.soal').hide();
        $('.soal-'+id).show();
        $('.prev-question').removeAttr('onclick');
        $('.next-question').removeAttr('onclick');
        $('.prev-question').attr('onclick','prevquestion('+id+');');
        $('.next-question').attr('onclick','nextquestion('+id+');');
    }
    showquestion(1);
    </script>


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