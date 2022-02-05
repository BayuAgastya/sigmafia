    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Membership Request </h1>

                        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('request'); ?>"></div>

                        <a style="margin-top: 5px; margin-bottom:5px;" class="ion-chevron-left btn btn-primary" href="<?php echo base_url('admin_menu/m_user') ?>"> Kembali</a>
                        (<?= date('Y-m-d', strtotime('now'));  ?>)
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class=" card-body">

            <div class="row" style="margin-top: 10px;">
                <div class="col-12">
                    <div class="card" style="min-height: 450px">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Tabel Membership Request </h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body table-responsive p-0" style="height: 200px;">
                            <table class="table table-head-fixed">
                                <thead>
                                    <tr>
                                        <th>Id Req</th>
                                        <th>Nama</th>
                                        <th>Bukti Trf</th>
                                        <th>User ID</th>
                                        <th>Membership</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data->result() as $i) : ?>
                                        <tr>
                                            <td style="width:05%"><?= $i->id_request; ?></td>
                                            <td style="width:20%"><?= $i->nama; ?></td>
                                            <td style="width:20%">
                                                <img src="<?= base_url('uploads/bukti_trf/' . $i->bukti_trf) ?>" alt="<?= $i->bukti_trf; ?>" width="300px">
                                            </td>
                                            <td style="width:05%"><?= $i->user_id; ?></td>
                                            <td style="width:10%"><?= $i->akses_konten; ?></td>
                                            <td style="width:30%">
                                                <!-- <a href="<?= base_url('acceptRequest/' . $i->id_request) ?>" class="btn btn-success btn-circle">
                                                    <i class="ion-checkmark-round"></i>
                                                </a> -->
                                                <a class="btn btn-success btn-circle button-accept-request" data-id="<?= $i->id_request; ?>" data-user="<?= $i->user_id; ?>" data-toggle="modal" data-target="#acceptRequest">
                                                    <i class="ion-checkmark-round"></i>
                                                </a>
                                                <a href="<?= base_url('declineRequest/' . $i->id_request) ?>" class="btn btn-danger btn-circle" onclick="return confirm('Yakin ?')">
                                                    <i class="ion-close-round"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="acceptRequest" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Accept Request</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('acceptRequest'); ?>" method="POST">
                    <div class="modal-body">
                    <div id="membership" class="d-flex">
                        <div class="px-2">
                            <button type="button" class="btn btn-outline-info btn-sm btn-membership" data-value='1 days'>1D</button>
                        </div>
                        <div class="px-2">
                            <button type="button" class="btn btn-outline-info btn-sm btn-membership" data-value='7 days'>1W</button>
                        </div>
                        <div class="px-2">
                            <button type="button" class="btn btn-outline-info btn-sm btn-membership" data-value='1 months'>1M</button>
                        </div>
                        <input type="hidden" name="id_request" id="request-id">
                        <input type="hidden" name="id" id="value-id">
                        <input type="hidden" name="membership" id="value-membership" required>
                    </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script>
        $('.btn-membership').on('click',function(){
            $('.btn-membership').removeClass('btn-info').addClass('btn-outline-info');
            $(this).removeClass('btn-outline-info').addClass('btn-info');
            $('#value-membership').removeAttr('value');
            $('#value-membership').attr('value',$(this).data('value'));
            console.log($('#value-id').val());
        });
    </script>
    <script>
        $('.button-accept-request').on('click',function(){
            $('.btn-membership').removeClass('btn-info').addClass('btn-outline-info');
            $('#value-membership').removeAttr('value');
            $('#value-id').removeAttr('value');
            $('#value-id').attr('value',$(this).data('user'));
            $('#request-id').removeAttr('value');
            $('#request-id').attr('value',$(this).data('id'));
        });
    </script>