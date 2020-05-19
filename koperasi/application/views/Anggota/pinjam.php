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
                  <h3 class="card-title">Data Peminjaman</h3>
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
            <h3>
                Saldo : <?php foreach($anggota as $a){echo 'Rp. ' . number_format($a['saldo']);}?>
            </h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Tanggal Pinjam</th>
                        <th scope="col">Nominal</th>
                    </tr>
                </thead>
                <tbody>
                <?php $loop = 1;
                foreach ($pinjam as $p) : ?>
                    <tr>
                        <th scope="row"><?= $loop++ ?></th>
                        <td><?= $p['nama'] ?></td>
                        <td><?= $p['tanggal_pinjam'] ?></td>
                        <td>Rp. <?= number_format($p['nominal']) ?></td>
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