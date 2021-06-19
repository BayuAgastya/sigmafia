<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Tryout</h2>
                        <div class="page_link">
                            <a href="#">Home</a>
                            <a href="#">tryout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================ Start About Area =================-->
<section class="section_gap">
    <div class="container">
        <form class="mb-3">
            <label for="">Kode Tryout:</label>
            <input type="text">
            <button type="button" class="genric-btn primary-border text-uppercase">Tambah</button>
        </form>

        <table class="table table-bordered table-head-fixed">
            <thead>
                <tr>
                    <th style="width:3%">ID</th>
                    <th style="width:7%">Tingkat</th>
                    <th style="width:15%">Matpel</th>
                    <th style="width:25%">Nama TO</th>
                    <th style="width:10%">Jumlah</th>
                    <th style="width:10%">Waktu</th>
                    <th style="width:10%">Jenis</th>
                    <th style="width:30%;text-align: center;">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_tryout->result() as $i) : ?>
                    <tr>
                        <td style="text-align: center;"><?= $i->id_tryout; ?></td>
                        <td style="text-align: center;"><?= $i->id_tingkat; ?></td>
                        <td><?= $i->matpel; ?></td>
                        <td><?= $i->nama_tryout; ?></td>
                        <td><?= $i->jumlah_soal; ?></td>
                        <td><?= $i->waktu; ?> Menit</td>
                        <td><?= $i->jenis; ?></td>
                        <td style=" text-align:center">
                            <a href="<?= base_url('prep/' . $i->id_tryout) ?>" type="button" class="genric-btn primary-border text-uppercase">
                                Ikuti Tryout
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</section>