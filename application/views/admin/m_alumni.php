    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Manage Alumni</h1>

              <div class="flash-data" data-flashdata="<?= $this->session->flashdata('alumni'); ?>"></div>

            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <button type="button" class="ion-plus btn btn-block btn-primary" data-toggle="modal" data-target="#modal-tambah-alumnus"> Tambah Alumnus</button>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <!-- Main row -->
          <div class="row">
            <div class="col-12">
              <div class="card" style="min-height: 450px">
                <div class="card-header">
                  <h3 class="card-title">Daftar tabel Alumnus</h3>

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
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Universitas</th>
                        <th>Jurusan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data_alumnus->result() as $i) : ?>
                        <tr>
                          <td style="width:05%"><?php echo $i->id_alumnus; ?></td>
                          <td style="width:25%"><?php echo $i->nama; ?></td>
                          <td style="width:25%"><?php echo $i->universitas; ?></td>
                          <td style="width:25%"><?php echo $i->jurusan; ?></td>
                          <td style="width:20%">
                            <a href="<?= base_url('hapusAlumnus/' . $i->id_alumnus) ?>" type="button" class="btn btn-danger btn btn-danger btn-circle" onclick="return confirm('Yakin ingin menghapus data ?')">
                              <i class="fas fa-trash"></i>
                            </a>
                            <a href="<?= base_url('editAlumnus/' . $i->id_alumnus) ?>" class="btn btn-info btn-circle">
                              <i class="fas fa-edit"></i>
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
      </section>
    </div>

    <div class="modal fade" id="modal-tambah-alumnus">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">

          <div class="modal-header">
            <h4 class="modal-title">Tambah Alumus</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?= base_url('tambahAlumni'); ?>">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Alumnus" required>
              </div>
              <div class="form-group">
                <label>Universiats</label>
                <input type="text" name="universitas" class="form-control" placeholder="Masukan Nama Universitas" required>
              </div>
              <div class="form-group">
                <label>Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Masukan Nama Jurusan" required>
              </div>
              <hr>
              <button type="submit" class="btn btn-primary btn-block" style="margin-right: 0; margin-left:auto">Tambah</button>
            </form>
          </div>

        </div>
      </div>
    </div>