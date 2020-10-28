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
                            <a href="<?= base_url('home/profile_edit'); ?>">Profile</a>
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
        <form action="<?= base_url('editSiswaProfile'); ?>" method="post">
            <input type="hidden" name="id_murid" class="form-control" required value="<?= strval($this->session->userdata('id_murid')); ?>">
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="nama" class="form-control" value="<?= $data_murid['nama']; ?>" required>
            </div>
            <div class="form-group">
                <label>Asal Sekolah</label>
                <input type="text" name="asal_sekolah" class="form-control" value="<?= $data_murid['asal_sekolah'] ?>" required>
            </div>
            <div class="form-group">
                <label>Alamat Rumah</label>
                <input type="text" name="alamat_rumah" class="form-control" value="<?= $data_murid['alamat_rumah'] ?>" required>
            </div>
            <div class="form-group">
                <label>ID Instagram</label>
                <input type="text" name="instagram" class="form-control" value="<?= $data_murid['instagram'] ?>" required>
            </div>
            <div class="form-group">
                <label>ID Line</label>
                <input type="text" name="line" class="form-control" value="<?= $data_murid['line'] ?>" required>
            </div>
            <div class="form-group">
                <label>Nomer Whatsaap</label>
                <input type="text" name="whatsaap" class="form-control" value="<?= $data_murid['whatsaap'] ?>" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?= $data_murid['email'] ?>" required>
            </div>
            <hr>
            <button type="submit" class="btn btn-warning" style="color: white; padding:20px; float:right;">Simpan</button>
        </form>
    </div>
</section>