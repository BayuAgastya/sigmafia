<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Edit User</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <form action="<?= base_url('editUser'); ?>" method="post">
                        <input type="hidden" name="user_id" class="form-control" required value="<?= $data->user_id ?>">
                        <input type="hidden" name="id_murid" class="form-control" required value="<?= $data->id_murid ?>">

                        <label>Role: <?= $data->role ?></label>
                        <hr>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" value="<?= $data->username ?>" required>
                        </div>
                        <button type="disable" class="btn btn-danger" data-toggle="modal" data-target="#modal-ganti-password">Ganti Password</button>
                        <!-- <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control" value="" required>
                        </div> -->
                        <hr>
                        <div class="form-group">
                            <label>Membership</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="akses_konten" value="yes" required>
                                <label class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="akses_konten" value="no" required>
                                <label class="form-check-label">No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>End Date</label> <br>
                            <input type="text" id="datepicker-1" name="endDate" value="<?= $data->endDate ?>">
                        </div>

                        <hr>
                        <button type="submit" class="btn btn-primary btn-block">Update Data</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>