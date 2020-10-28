    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('soal'); ?>"></div>
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Soal</h1>

            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <button type="button" class="ion-plus btn btn-block btn-primary" data-toggle="modal" data-target="#modal-tambah-soal"> Tambah Soal</button>
              </ol>
            </div><!-- /.col -->

          </div><!-- /.row -->
          <div class="tab" style="align-content: center;">
            <div class="btn-group" style="width:100%">
              <button class="tablinks" onclick="openLesson(event, 'SD')" id="defaultOpen" style="width:33.3%">SD</button>
              <button class="tablinks" onclick="openLesson(event, 'SMP')" style="width:33.3%">SMP</button>
              <button class="tablinks" onclick="openLesson(event, 'SMA')" style="width:33.3%">SMA</button>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <div id="SD" class="tabcontent">
        <!-- Content Header (Page header) -->


        <!-- Main content -->
        <div class=" card-body">
          <div class="row">
            <div class="col-12">
              <div class="card" style="min-height: 450px">
                <div class="card-header">
                  <h3 class="card-title">Matematika SD</h3>

                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                      <div class="input-group-append">
                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                  <table class="table table-head-fixed">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Tingkat</th>
                        <th>Nama Soal</th>
                        <th>File</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($matik_sd as $i) : ?>
                        <tr>
                          <td style="width:05%"><?= $i->id_soal; ?></td>
                          <td style="width:05%"><?= $i->tingkat; ?></td>
                          <td style="width:25%"><?= $i->judul; ?></td>
                          <td style="width:20%"><?= $i->soal; ?></td>
                          <td style="width:25%"><?= $i->deskripsi; ?></td>
                          <td style="width:20%">
                            <a href="<?= base_url('hapusSoalMatik/' . $i->id_soal) ?>" type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">
                              <i class="fas fa-trash"></i>
                            </a>
                            <a href="<?= base_url('editSoalMatik/' . $i->id_soal) ?>" class="btn btn-info">
                              <i class="fas fa-edit"></i>
                            </a>
                            <a href="<?= base_url('uploads/soal/matik/' . $i->soal) ?>" class="btn btn-success">
                              <i class="fas fa-download"></i>
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
      </div><!-- /SD -->

      <div id="SMP" class="tabcontent">

        <!-- Main content -->
        <div class=" card-body">
          <ul class="nav nav-tabs" id="content-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="content-matematika-smp-tab" data-toggle="pill" href="#content-matematika-smp" role="tab" aria-controls="content-matematika-smp" aria-selected="true">Matematika</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="content-fisika-smp-tab" data-toggle="pill" href="#content-fisika-smp" role="tab" aria-controls="content-fisika-smp" aria-selected="false">Fisika</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="content-kimia-smp-tab" data-toggle="pill" href="#content-kimia-smp" role="tab" aria-controls="content-kimia-smp" aria-selected="false">Kimia</a>
            </li>
          </ul>

          <div class="tab-content" id="content-tab">

            <div class="tab-pane fade show active" id="content-matematika-smp" role="tabpanel" aria-labelledby="content-matematika-smp-tab">

              <div class="row">
                <div class="col-12">
                  <div class="card" style="min-height: 450px">
                    <div class="card-header">
                      <h3 class="card-title">Matematika SMP</h3>

                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                      <table class="table table-head-fixed">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Tingkat</th>
                            <th>Nama Soal</th>
                            <th>File</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($matik_smp as $i) : ?>
                            <tr>
                              <td style="width:05%"><?= $i->id_soal; ?></td>
                              <td style="width:05%"><?= $i->tingkat; ?></td>
                              <td style="width:25%"><?= $i->judul; ?></td>
                              <td style="width:20%"><?= $i->soal; ?></td>
                              <td style="width:25%"><?= $i->deskripsi; ?></td>
                              <td style="width:20%">
                                <a href="<?= base_url('hapusSoalMatik/' . $i->id_soal) ?>" type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">
                                  <i class="fas fa-trash"></i>
                                </a>
                                <a href="<?= base_url('editSoalMatik/' . $i->id_soal) ?>" class="btn btn-info">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('uploads/soal/matik/' . $i->soal) ?>" class="btn btn-success">
                                  <i class="fas fa-download"></i>
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

            <div class="tab-pane fade" id="content-fisika-smp" role="tabpanel" aria-labelledby="content-fisika-smp-tab">

              <div class="row">
                <div class="col-12">
                  <div class="card" style="min-height: 450px">
                    <div class="card-header">
                      <h3 class="card-title">Fisika SMP</h3>

                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                      <table class="table table-head-fixed">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Tingkat</th>
                            <th>Nama Soal</th>
                            <th>File</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($fisika_smp as $i) : ?>
                            <tr>
                              <td style="width:05%"><?= $i->id_soal; ?></td>
                              <td style="width:05%"><?= $i->tingkat; ?></td>
                              <td style="width:25%"><?= $i->judul; ?></td>
                              <td style="width:20%"><?= $i->soal; ?></td>
                              <td style="width:25%"><?= $i->deskripsi; ?></td>
                              <td style="width:20%">
                                <a href="<?= base_url('hapusSoalFisika/' . $i->id_soal) ?>" type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">
                                  <i class="fas fa-trash"></i>
                                </a>
                                <a href="<?= base_url('editSoalFisika/' . $i->id_soal) ?>" class="btn btn-info btn-circle">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('uploads/soal/fisika/' . $i->soal) ?>" class="btn btn-success btn-circle">
                                  <i class="fas fa-download"></i>
                                </a>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="content-kimia-smp" role="tabpanel" aria-labelledby="content-kimia-smp-tab">

              <div class="row">
                <div class="col-12">
                  <div class="card" style="min-height: 450px">
                    <div class="card-header">
                      <h3 class="card-title">Kimia SMP</h3>

                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                      <table class="table table-head-fixed">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Tingkat</th>
                            <th>Nama Soal</th>
                            <th>File</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($kimia_smp as $i) : ?>
                            <tr>
                              <td style="width:05%"><?= $i->id_soal; ?></td>
                              <td style="width:05%"><?= $i->tingkat; ?></td>
                              <td style="width:25%"><?= $i->judul; ?></td>
                              <td style="width:20%"><?= $i->soal; ?></td>
                              <td style="width:25%"><?= $i->deskripsi; ?></td>
                              <td style="width:20%">
                                <a href="<?= base_url('hapusSoalKimia/' . $i->id_soal) ?>" type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">
                                  <i class="fas fa-trash"></i>
                                </a>
                                <a href="<?= base_url('editSoalKimia/' . $i->id_soal) ?>" class="btn btn-info btn-circle">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('uploads/soal/kimia/' . $i->soal) ?>" class="btn btn-success btn-circle">
                                  <i class="fas fa-download"></i>
                                </a>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /SMP -->

      <div id="SMA" class="tabcontent">

        <!-- Main content -->
        <div class=" card-body">
          <ul class="nav nav-tabs" id="content-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="content-matematika-sma-tab" data-toggle="pill" href="#content-matematika-sma" role="tab" aria-controls="content-matematika-sma" aria-selected="true">Matematika</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="content-fisika-sma-tab" data-toggle="pill" href="#content-fisika-sma" role="tab" aria-controls="content-fisika-sma" aria-selected="false">Fisika</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="content-kimia-sma-tab" data-toggle="pill" href="#content-kimia-sma" role="tab" aria-controls="content-kimia-sma" aria-selected="false">Kimia</a>
            </li>
          </ul>

          <div class="tab-content" id="content-tab">

            <div class="tab-pane fade show active" id="content-matematika-sma" role="tabpanel" aria-labelledby="content-matematika-sma-tab">

              <div class="row">
                <div class="col-12">
                  <div class="card" style="min-height: 450px">
                    <div class="card-header">
                      <h3 class="card-title">Matematika SMA</h3>

                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                      <table class="table table-head-fixed">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Tingkat</th>
                            <th>Nama Soal</th>
                            <th>File</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($matik_sma as $i) : ?>
                            <tr>
                              <td style="width:05%"><?= $i->id_soal; ?></td>
                              <td style="width:05%"><?= $i->tingkat; ?></td>
                              <td style="width:25%"><?= $i->judul; ?></td>
                              <td style="width:20%"><?= $i->soal; ?></td>
                              <td style="width:25%"><?= $i->deskripsi; ?></td>
                              <td style="width:20%">
                                <a href="<?= base_url('hapusSoalMatik/' . $i->id_soal) ?>" type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">
                                  <i class="fas fa-trash"></i>
                                </a>
                                <a href="<?= base_url('editSoalMatik/' . $i->id_soal) ?>" class="btn btn-info">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('uploads/soal/matik/' . $i->soal) ?>" class="btn btn-success">
                                  <i class="fas fa-download"></i>
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

            <div class="tab-pane fade" id="content-fisika-sma" role="tabpanel" aria-labelledby="content-fisika-sma-tab">

              <div class="row">
                <div class="col-12">
                  <div class="card" style="min-height: 450px">
                    <div class="card-header">
                      <h3 class="card-title">Fisika SMA</h3>

                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                      <table class="table table-head-fixed">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Tingkat</th>
                            <th>Nama Soal</th>
                            <th>File</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($fisika_sma as $i) : ?>
                            <tr>
                              <td style="width:05%"><?= $i->id_soal; ?></td>
                              <td style="width:05%"><?= $i->tingkat; ?></td>
                              <td style="width:25%"><?= $i->judul; ?></td>
                              <td style="width:20%"><?= $i->soal; ?></td>
                              <td style="width:25%"><?= $i->deskripsi; ?></td>
                              <td style="width:20%">
                                <a href="<?= base_url('hapusSoalFisika/' . $i->id_soal) ?>" type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">
                                  <i class="fas fa-trash"></i>
                                </a>
                                <a href="<?= base_url('editSoalFisika/' . $i->id_soal) ?>" class="btn btn-info btn-circle">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('uploads/soal/fisika/' . $i->soal) ?>" class="btn btn-success btn-circle">
                                  <i class="fas fa-download"></i>
                                </a>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="content-kimia-sma" role="tabpanel" aria-labelledby="content-kimia-sma-tab">

              <div class="row">
                <div class="col-12">
                  <div class="card" style="min-height: 450px">
                    <div class="card-header">
                      <h3 class="card-title">Kimia SMA</h3>

                      <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                          <div class="input-group-append">
                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                      <table class="table table-head-fixed">
                        <thead>
                          <tr>
                            <th>id</th>
                            <th>Tingkat</th>
                            <th>Nama Soal</th>
                            <th>File</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($kimia_sma as $i) : ?>
                            <tr>
                              <td style="width:05%"><?= $i->id_soal; ?></td>
                              <td style="width:05%"><?= $i->tingkat; ?></td>
                              <td style="width:25%"><?= $i->judul; ?></td>
                              <td style="width:20%"><?= $i->soal; ?></td>
                              <td style="width:25%"><?= $i->deskripsi; ?></td>
                              <td style="width:20%">
                                <a href="<?= base_url('hapusSoalKimia/' . $i->id_soal) ?>" type="button" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data ?')">
                                  <i class="fas fa-trash"></i>
                                </a>
                                <a href="<?= base_url('editSoalKimia/' . $i->id_soal) ?>" class="btn btn-info btn-circle">
                                  <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('uploads/soal/kimia/' . $i->soal) ?>" class="btn btn-success btn-circle">
                                  <i class="fas fa-download"></i>
                                </a>
                              </td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /SMA -->

    </div> <!-- /.Content Wrapper -->


    <div class="modal fade" id="modal-tambah-soal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Soal Baru</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php if ($error !== null) : echo $error;
            endif; ?>
            <?php echo form_open_multipart(base_url('admin_menu/m_soal/upload')) ?>
            <div class="form-group">
              <label>Tingkat</label>
              <select name="tingkat" class="form-control">
                <option value="sd">SD</option>
                <option value="smp">SMP</option>
                <option value="sma">SMA</option>
              </select>
            </div>
            <div class="form-group">
              <label>Materi</label>
              <select name="materi" class="form-control">
                <option value="matematika">Matematika</option>
                <option value="fisika">Fisika</option>
                <option value="kimia">Kimia</option>
              </select>
            </div>
            <div class="form-group">
              <label>Nama Soal</label>
              <input name="judul" type="text" class="form-control" placeholder="Masukan Nama Soal" required>
            </div>
            <div class="form-group">
              <label>Deskripsi</label>
              <input name="deskripsi" type="text" class="form-control" placeholder="Masukan Deskripsi Soal" required>
            </div>
            <div class="custom-file">
              <input name="file" type="file" id="customFile" required>
            </div>
            <hr>
            <button type="submit" class="btn btn-primary btn-block" value="upload">Tambah</button>
            <?= form_close(); ?>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->