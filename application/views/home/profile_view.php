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
                            <a href="<?= base_url('profile'); ?>">Profile</a>
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
            <a class="btn btn-warning" style="color: white; padding:20px; float: right;" href="<?= base_url('home/profile_edit'); ?>">EDIT PROFILE</a>
            <table style="text-align: left;">
                <tr>
                    <td style="width: 30%;">
                        <input type="hidden" name="id_murid" class="form-control" required value="<?= strval($this->session->userdata('id_murid')); ?>">
                        <h5>Nama:</h5>
                    </td>
                    <td>
                        <?= $data_murid['nama']; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Asal Sekolah:</h5>
                    </td>
                    <td>
                        <?= $data_murid['asal_sekolah'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Alamat Rumah:</h5>
                    </td>
                    <td>
                        <?= $data_murid['alamat_rumah'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Instagram:</h5>
                    </td>
                    <td>
                        <?= $data_murid['instagram'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Line:</h5>
                    </td>
                    <td>
                        <?= $data_murid['line'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Whatsaap:</h5>
                    </td>
                    <td>
                        <?= $data_murid['whatsaap'] ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h5>Email:</h5>
                    </td>
                    <td>
                        <?= $data_murid['email'] ?>
                    </td>
                </tr>
            </table>
        </div>

        <div class="card-body">
            <?php if ($this->admin_model->is_akses() == "yes") { ?>
                <a class="btn btn-success btn-block" style="color: white; padding:20px;">
                    <h3 style="color: white;">
                        Berlangganan Sampai<br>
                        <?= strval($this->session->userdata('endDate')); ?>
                    </h3>
                </a>
            <?php } else { ?>
                <a class="btn btn-danger btn-block" style="color: white; padding:20px;" data-toggle="modal" data-target="#modal-request">
                    <h3 style="color: white;">Mulai Berlangganan</h3>
                </a>
            <?php } ?>
        </div>
    </div>
</section>