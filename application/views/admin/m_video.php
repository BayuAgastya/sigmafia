<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Video</h1>

          <div class="flash-data" data-flashdata="<?= $this->session->flashdata('video'); ?>"></div>

        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <button type="button" class="ion-plus btn btn-block btn-primary" data-toggle="modal" data-target="#modal-tambah-video"> Tambah Video</button>
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

  <!-- Main content -->
  <div id="SD" class="tabcontent">
    <div class=" card-body">
      <div class="row" style="margin-top: 10px;">
        <?php foreach ($matik_sd as $i) : ?>
          <div class="col-md-4">
            <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title col-md-9"><?= $i->judul; ?> (<?= $i->tingkat; ?>)</h3>
                <div class="card-tools col-md-3" style="display: flex; justify-content: flex-end">
                  <a href="<?= base_url('hapusVideoMatik/' . $i->id_video) ?>" type="button" class="btn btn-danger btn btn-danger btn-circle" style="margin: 1px" onclick="return confirm('Yakin ingin menghapus data ?')">
                    <i class="fas fa-trash"></i>
                  </a>
                  <a href="<?= base_url('editVideoMatik/' . $i->id_video) ?>" class="btn btn-info btn-circle" style="margin: 1px">
                    <i class="fas fa-edit"></i>
                  </a>
                </div>
              </div>
              <div class="card-body">
                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $i->url; ?>" allowfullscreen></iframe>
                </div>
              </div>
              <div class="card-footer" style="text-align: left;">
                <p>
                  <?= $i->deskripsi; ?>
                </p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div id="SMP" class="tabcontent">
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
      <div class="tab-content" id="content-tabContent">

        <div class="tab-pane fade show active" id="content-matematika-smp" role="tabpanel" aria-labelledby="content-matematika-smp-tab">
          <div class="row" style="margin-top: 10px;">
            <?php foreach ($matik_smp as $i) : ?>
              <div class="col-md-4">
                <div class="card card-outline card-primary">
                  <div class="card-header">
                    <h3 class="card-title col-md-9"><?= $i->judul; ?> (<?= $i->tingkat; ?>)</h3>
                    <div class="card-tools col-md-3" style="display: flex; justify-content: flex-end">
                      <a href="<?= base_url('hapusVideoMatik/' . $i->id_video) ?>" type="button" class="btn btn-danger btn btn-danger btn-circle" style="margin: 1px" onclick="return confirm('Yakin ingin menghapus data ?')">
                        <i class="fas fa-trash"></i>
                      </a>
                      <a href="<?= base_url('editVideoMatik/' . $i->id_video) ?>" class="btn btn-info btn-circle" style="margin: 1px">
                        <i class="fas fa-edit"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $i->url; ?>" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="card-footer" style="text-align: left;">
                    <p>
                      <?= $i->deskripsi; ?>
                    </p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="tab-pane fade show" id="content-fisika-smp" role="tabpanel" aria-labelledby="content-fisika-smp-tab">
          <div class="row" style="margin-top: 10px;">
            <?php foreach ($fisika_smp as $i) : ?>
              <div class="col-md-4">
                <div class="card card-outline card-primary">
                  <div class="card-header">
                    <h3 class="card-title col-md-9"><?= $i->judul; ?> (<?= $i->tingkat; ?>)</h3>
                    <div class="card-tools col-md-3" style="display: flex; justify-content: flex-end">
                      <a href="<?= base_url('hapusVideoFisika/' . $i->id_video) ?>" type="button" class="btn btn-danger btn btn-danger btn-circle" style="margin: 1px" onclick="return confirm('Yakin ingin menghapus data ?')">
                        <i class="fas fa-trash"></i>
                      </a>
                      <a href="<?= base_url('editVideoFisika/' . $i->id_video) ?>" class="btn btn-info btn-circle" style="margin: 1px">
                        <i class="fas fa-edit"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $i->url; ?>" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="card-footer" style="text-align: left;">
                    <p>
                      <?= $i->deskripsi; ?>
                    </p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="tab-pane fade show" id="content-kimia-smp" role="tabpanel" aria-labelledby="content-kimia-smp-tab">
          <div class="row" style="margin-top: 10px;">
            <?php foreach ($kimia_smp as $i) : ?>
              <div class="col-md-4">
                <div class="card card-outline card-primary">
                  <div class="card-header">
                    <h3 class="card-title col-md-9"><?= $i->judul; ?> (<?= $i->tingkat; ?>)</h3>
                    <div class="card-tools col-md-3" style="display: flex; justify-content: flex-end">
                      <a href="<?= base_url('hapusVideoKimia/' . $i->id_video) ?>" type="button" class="btn btn-danger btn btn-danger btn-circle" style="margin: 1px" onclick="return confirm('Yakin ingin menghapus data ?')">
                        <i class="fas fa-trash"></i>
                      </a>
                      <a href="<?= base_url('editVideoKimia/' . $i->id_video) ?>" class="btn btn-info btn-circle" style="margin: 1px">
                        <i class="fas fa-edit"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $i->url; ?>" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="card-footer" style="text-align: left;">
                    <p>
                      <?= $i->deskripsi; ?>
                    </p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="SMA" class="tabcontent">
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
      <div class="tab-content" id="content-tabContent">

        <div class="tab-pane fade show active" id="content-matematika-sma" role="tabpanel" aria-labelledby="content-matematika-sma-tab">
          <div class="row" style="margin-top: 10px;">
            <?php foreach ($matik_sma as $i) : ?>
              <div class="col-md-4">
                <div class="card card-outline card-primary">
                  <div class="card-header">
                    <h3 class="card-title col-md-9"><?= $i->judul; ?> (<?= $i->tingkat; ?>)</h3>
                    <div class="card-tools col-md-3" style="display: flex; justify-content: flex-end">
                      <a href="<?= base_url('hapusVideoMatik/' . $i->id_video) ?>" type="button" class="btn btn-danger btn btn-danger btn-circle" style="margin: 1px" onclick="return confirm('Yakin ingin menghapus data ?')">
                        <i class="fas fa-trash"></i>
                      </a>
                      <a href="<?= base_url('editVideoMatik/' . $i->id_video) ?>" class="btn btn-info btn-circle" style="margin: 1px">
                        <i class="fas fa-edit"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $i->url; ?>" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="card-footer" style="text-align: left;">
                    <p>
                      <?= $i->deskripsi; ?>
                    </p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="tab-pane fade show" id="content-fisika-sma" role="tabpanel" aria-labelledby="content-fisika-sma-tab">
          <div class="row" style="margin-top: 10px;">
            <?php foreach ($fisika_sma as $i) : ?>
              <div class="col-md-4">
                <div class="card card-outline card-primary">
                  <div class="card-header">
                    <h3 class="card-title col-md-9"><?= $i->judul; ?> (<?= $i->tingkat; ?>)</h3>
                    <div class="card-tools col-md-3" style="display: flex; justify-content: flex-end">
                      <a href="<?= base_url('hapusVideoFisika/' . $i->id_video) ?>" type="button" class="btn btn-danger btn btn-danger btn-circle" style="margin: 1px" onclick="return confirm('Yakin ingin menghapus data ?')">
                        <i class="fas fa-trash"></i>
                      </a>
                      <a href="<?= base_url('editVideoFisika/' . $i->id_video) ?>" class="btn btn-info btn-circle" style="margin: 1px">
                        <i class="fas fa-edit"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $i->url; ?>" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="card-footer" style="text-align: left;">
                    <p>
                      <?= $i->deskripsi; ?>
                    </p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <div class="tab-pane fade show" id="content-kimia-sma" role="tabpanel" aria-labelledby="content-kimia-sma-tab">
          <div class="row" style="margin-top: 10px;">
            <?php foreach ($kimia_sma as $i) : ?>
              <div class="col-md-4">
                <div class="card card-outline card-primary">
                  <div class="card-header">
                    <h3 class="card-title col-md-9"><?= $i->judul; ?> (<?= $i->tingkat; ?>)</h3>
                    <div class="card-tools col-md-3" style="display: flex; justify-content: flex-end">
                      <a href="<?= base_url('hapusVideoKimia/' . $i->id_video) ?>" type="button" class="btn btn-danger btn btn-danger btn-circle" style="margin: 1px" onclick="return confirm('Yakin ingin menghapus data ?')">
                        <i class="fas fa-trash"></i>
                      </a>
                      <a href="<?= base_url('editVideoKimia/' . $i->id_video) ?>" class="btn btn-info btn-circle" style="margin: 1px">
                        <i class="fas fa-edit"></i>
                      </a>
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?= $i->url; ?>" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="card-footer" style="text-align: left;">
                    <p>
                      <?= $i->deskripsi; ?>
                    </p>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </div>


</div><!-- /.content-wrapper -->


<div class="modal fade" id="modal-tambah-video">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Video</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="<?= base_url('tambahVideo'); ?>">
        <div class="modal-body">
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
            <label>Judul Video</label>
            <input name="judul" type="text" class="form-control" placeholder="Masukan Nama Video" required>
          </div>
          <div class="form-group">
            <label>Link Embed Video</label>
            <input name="url" type="text" class="form-control" placeholder="Masukan Embed Link" required>
          </div>
          <div class="form-group">
            <label>Deskripsi Video</label>
            <textarea name="deskripsi" type="text" class="form-control" rows="5"></textarea>
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary btn-block" style="margin-right: 0; margin-left:auto">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>