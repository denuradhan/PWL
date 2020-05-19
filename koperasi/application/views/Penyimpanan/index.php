<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col">
          <div class="card" style="margin-top:2%">
            <div class="card-header border-1">
              <div class="d-flex justify-content-between">
                <h3 class="card-title">Data Penyimpanan</h3>
              </div>
            </div>
            <!-- Tabel -->
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Button trigger modal -->
                <?php if ($this->session->flashdata('pesan')) : ?>
                  <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Data Penyimpan <strong> berhasil</strong> <?= $this->session->flashdata('pesan'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                <?php endif; ?>
                <a href="<?= base_url() ?>Penyimpanan/tambah" type="button" class="btn btn-success" style="margin-bottom: 2%;margin-right: 2%;">
                  <i class="fa fa-plus" aria-hidden="true"></i>
                  Tambah Data
                </a>
                <a href="<?= base_url() ?>Penyimpanan/hapus/" type="button" class="btn btn-danger" style="margin-bottom: 2%;">
                  <i class="fa fa-trash" aria-hidden="true"></i>
                  Hapus Semua
                </a>
                <table class="table table-striped">
                  <thead>
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Nominal</th>
                      <th scope="col">Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $loop = 1;
                    foreach ($penyimpanan as $agt) : ?>
                      <tr>
                        <th scope="row"><?= $loop++ ?></th>
                        <td><?= $agt['nama'] ?></td>
                        <td>Rp. <?= number_format($agt['nominal']) ?></td>
                        <td><?= date("d-m-Y", strtotime($agt['tanggal_simpan'])) ?></td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->