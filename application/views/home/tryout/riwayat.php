<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Riwayat Nilai</h2>
                        <div class="page_link">
                            <a href="#">Home</a>
                            <a href="#">Tryout</a>
                            <a href="#">Riwayat Nilai</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<style>
    th {
        text-align: center;
    }
</style>
<!--================ Start About Area =================-->
<section class="section_gap">
    <div class="container">
        <a href="<?= base_url('user/tryout/tryout_base'); ?>" type="button" class="genric-btn primary text-uppercase mb-3">Kembali</a>
        <table class="table table-bordered table-head-fixed">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama TO</th>
                    <th>Tgl Mulai</th>
                    <th>Tgl Selesai</th>
                    <th>Jumlah Soal</th>
                    <th>Benar</th>
                    <th>Nilai</th>
                    <th>Total Nilai(Score)</th>

                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $i=1;
                    foreach($data_hasil->result() as $tryout){
                ?>
                <tr>
                    <td style="width: 1%;"><?= $i; ?></td>
                    <td><?= $tryout->nama_tryout; ?></td>
                    <td><?= $tryout->tgl_mulai; ?></td>
                    <td><?= $tryout->tgl_selesai; ?></td>
                    <td><?= $tryout->jumlah_soal; ?></td>
                    <td><?= $tryout->jml_benar; ?></td>
                    <td><?= $tryout->nilai; ?></td>
                    <td><?= $tryout->nilai; ?>/<?= $tryout->nilai_bobot; ?></td>

                    <td><?= $tryout->status; ?></td>
                    <td><a href="<?= base_url('detail_riwayat/'.$tryout->id_hasil); ?>" type="button" class="genric-btn primary text-uppercase mb-3">Lihat</a></td>

                </tr>
                <?php 
                    $i++;
                }
                ?>
            </tbody>
        </table>
    </div>
</section>