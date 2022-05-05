<div class="flash-data" data-flashdata="<?= $this->session->flashdata('main'); ?>"></div>
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Profile</h2>
                        <div class="page_link">
                            <a href="<?= base_url('home'); ?>">Home</a>
                            <a href="<?= base_url('evaluasi'); ?>">Evaluasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<!--================ Start About Area =================-->
<section class="about_area section_gap">
    <div class="container">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <form class="form-signin mt-3" action="<?= base_url('evaluasi'); ?>" method="GET">
                    <div class="form-group">
                        <select name="tanggal-evaluasi" onchange="this.form.submit();">
                            <option value="0">-- PILIH BULAN --</option>
                            <option value="1" <?php if($this->input->get('tanggal-evaluasi')==1){ echo "selected"; } ?>>Januari</option>
                            <option value="2" <?php if($this->input->get('tanggal-evaluasi')==2){ echo "selected"; } ?>>Februari</option>
                            <option value="3" <?php if($this->input->get('tanggal-evaluasi')==3){ echo "selected"; } ?>>Maret</option>
                            <option value="4" <?php if($this->input->get('tanggal-evaluasi')==4){ echo "selected"; } ?>>April</option>
                            <option value="5" <?php if($this->input->get('tanggal-evaluasi')==5){ echo "selected"; } ?>>Mei</option>
                            <option value="6" <?php if($this->input->get('tanggal-evaluasi')==6){ echo "selected"; } ?>>Juni</option>
                            <option value="7" <?php if($this->input->get('tanggal-evaluasi')==7){ echo "selected"; } ?>>Juli</option>
                            <option value="8" <?php if($this->input->get('tanggal-evaluasi')==8){ echo "selected"; } ?>>Agustus</option>
                            <option value="9" <?php if($this->input->get('tanggal-evaluasi')==9){ echo "selected"; } ?>>September</option>
                            <option value="10" <?php if($this->input->get('tanggal-evaluasi')==10){ echo "selected"; } ?>>Oktober</option>
                            <option value="11" <?php if($this->input->get('tanggal-evaluasi')==11){ echo "selected"; } ?>>November</option>
                            <option value="12" <?php if($this->input->get('tanggal-evaluasi')==12){ echo "selected"; } ?>>Desember</option>
                        </select>
                    </div>
                </form>
                <?php if(empty($this->input->get('tanggal-evaluasi'))){ ?>
                    <a class="btn btn-info" style="color: white; padding:20px; float: right;" href="<?= base_url('/print_evaluasi'); ?>">PRINT EVALUASI</a>
                <?php }else{ ?>
                    <a class="btn btn-info" style="color: white; padding:20px; float: right;" href="<?= base_url('/print_evaluasi?tanggal-evaluasi='.$this->input->get('tanggal-evaluasi')); ?>">PRINT EVALUASI</a>
                <?php } ?>
            </div>
        </div>

        <div class="card-body" style="padding-top: 40px;">
            <h5>Tryout</h5>
            <table style="text-align: left;">
                <tr>
                    <td><b>No</b></td>
                    <td><b>Nama Tryout</b></td>
                    <td><b>Nilai</b></td>
                    <td><b>Score</b></td>
                    <td><b>Status</b></td>
                </tr>
                <?php $no=1; foreach($evaluations as $data){ ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $data['nama_tryout']; ?></td>
                        <td><?= $data['nilai']; ?></td>
                        <td><?= $data['nilai_bobot']; ?></td>
                        <td><?= $data['status']; ?></td>
                    </tr>
                <?php $no++; } ?>
            </table>
        </div>

        <div class="card-body" style="padding-top: 40px;">
            <h5>Kehadiran</h5>
            <div id="chartContainer" style="height: 370px; width: 100%;"></div>
        </div>

        <div class="card-body border" style="margin-top: 40px;">
            <h5 class="text-center">Kartu Evaluasi</h5>
            <table>
                <tr>
                    <td style="width: 20%;">Jumlah Nilai Tryout</td>
                    <td style="width: 1%">:</td>
                    <td> <?= $jumlah; ?></td>
                </tr>
                <tr>
                    <td>Jumlah Score Kehadiran</td>
                    <td>:</td>
                    <td> <?= $kehadiran; ?>%</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td>:</td>
                    <td> <?= $total ?>%</td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td> <?= $comment; ?></td>
                </tr>
            </table>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	data: [{        
		type: "line",
      	indexLabelFontSize: 16,
		dataPoints: [
            {label: "Minggu 1", y: <?= $minggu1; ?> },
            {label: "Minggu 2", y: <?= $minggu2; ?> },
            {label: "Minggu 3", y: <?= $minggu3; ?> },
            {label: "Minggu 4", y: <?= $minggu4; ?> },
		]
	}]
});
chart.render();

}
</script>
<script>
    $('#evaluasi').on('change',function(){
        // this.form.submit();
        alert('test');
    });
</script>