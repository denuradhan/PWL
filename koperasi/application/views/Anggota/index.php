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
                  <h3 class="card-title">Daftar Anggota</h3>
                </div>
              </div>
              <!-- Tabel -->
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <!-- Button trigger modal -->
                  <?php if ($this->session->flashdata('pesan')) : ?>
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                      Data Anggota <strong> <?= $this->session->flashdata('pesan'); ?> </strong>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <?php endif; ?>
                  <a href="<?= base_url() ?>Anggota/tambah" type="button" class="btn btn-success" style="margin-bottom:2%;">
                    <i class="fa fa-plus" aria-hidden="true"></i>
                    Tambah Data
                  </a>
                  <a href="<?= base_url() ?>Anggota/laporan_pdf" type="button" class="btn btn-secondary" target="_blank" style="margin-bottom:2%; float: right;">
                    Download
                  </a>
                  <a href="<?= base_url() ?>Anggota/konfirmasi" type="button" class="btn btn-primary" style="margin-bottom:2%; float: right;">
                    Konfirmasi user
                  </a>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Saldo</th>
                        <th scope="col"></th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php $loop = 1;
                      foreach ($anggota as $agt) : ?>
                        <tr>
                          <th scope="row"><?= $loop++ ?></th>
                          <td><?= $agt['nama'] ?></td>
                          <td><?= $agt['gender'] ?></td>
                          <td><?= $agt['alamat'] ?></td>
                          <td><?= $agt['nohp'] ?></td>
                          <td>Rp. <?= number_format($agt['saldo']) ?></td>
                          <td>
                            <a href="<?= base_url() ?>Anggota/edit/<?= $agt['id']; ?>" class="btn btn-warning" style="margin-left: 5%;">
                              <i class="fas fa-edit    "></i>
                              Edit
                            </a>
                            <a href="<?= base_url() ?>Anggota/hapus/<?= $agt['id']; ?>" class="btn btn-danger" style="margin-left: 10%;">
                              <i class="fa fa-trash" aria-hidden="true"></i>
                              Hapus
                            </a>
                          </td>
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