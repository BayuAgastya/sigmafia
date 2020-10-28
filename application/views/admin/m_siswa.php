    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Manage Siswa</h1>

              <div class="flash-data" data-flashdata="<?= $this->session->flashdata('murid'); ?>"></div>

            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <button type="button" class="ion-plus btn btn-block btn-primary" data-toggle="modal" data-target="#modal-tambah-murid"> Tambah Siswa</button>
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
                  <h3 class="card-title">Daftar Tabel Siswa</h3>

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
                        <th>Asal Sekolah</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($data_murid->result() as $i) : ?>
                        <tr>
                          <td style="width:05%"><?php echo $i->id_murid; ?></td>
                          <td style="width:35%"><?php echo $i->nama; ?></td>
                          <td style="width:40%"><?php echo $i->alamat_rumah; ?></td>
                          <td style="width:20%">
                            <a href="<?= base_url('detailMurid/' . $i->id_murid) ?>" type="button" class="btn btn-warning btn-circle">
                              <i class="fas fa-search"></i>
                            </a>
                            <a href="<?= base_url('hapusMurid/' . $i->id_murid) ?>" type="button" class="btn btn-danger btn-circle" onclick="return confirm('Yakin ingin menghapus data ?')">
                              <i class="fas fa-trash"></i>
                            </a>
                            <a href="<?= base_url('editMurid/' . $i->id_murid) ?>" class="btn btn-info btn-circle">
                              <i class="fas fa-edit"></i>
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
    <div class="modal fade" id="modal-tambah-murid">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Tambah Murid</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?= base_url('tambahSiswa'); ?>">
              <div class="form-group">
                <label>Name</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
              </div>
              <div class="form-group">
                <label>Asal Sekolah</label>
                <input type="text" name="asal_sekolah" class="form-control" placeholder="Masukan Nama Asal Sekolah" required>
              </div>
              <div class="form-group">
                <label>Alamat Rumah</label>
                <input type="text" name="alamat_rumah" class="form-control" placeholder="Masukan Alamat Rumah" required>
              </div>
              <div class="form-group">
                <label>ID Instagram</label>
                <input type="text" name="instagram" class="form-control" placeholder="Masukan ID Instagram" required>
              </div>
              <div class="form-group">
                <label>ID Line</label>
                <input type="text" name="line" class="form-control" placeholder="Masukan ID Line" required>
              </div>
              <div class="form-group">
                <label>Nomer Whatsaap</label>
                <input type="text" name="whatsaap" class="form-control" placeholder="Masukan Nomer Whatsaap" required>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" placeholder="Masukan Alamat Email" required>
              </div>
              <hr>
              <button type="submit" class="btn btn-primary" style="margin-right: 0; margin-left:auto">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>