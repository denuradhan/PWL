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

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor HP</th>
                        <th scope="col">Saldo</th>
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