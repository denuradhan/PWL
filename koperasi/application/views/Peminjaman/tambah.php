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
                  <h3 class="card-title">Tambah Data Peminjaman</h3>
                </div>
              </div>
              <!-- Tabel -->
              <div class="card">
            <!-- /.card-header -->
            <div class="card-body">
    <form action="" method="post">
        <label for="jurusan">Nama : </label>
        <select class="form-control" id="nama" name="id">
            <?php foreach ($anggota as $pjm) : ?>
                <option value="<?= $pjm['id'] ?>" selected><?= $pjm['nama'] ?></option>
            <?php endforeach; ?>
        </select>
        <div class="form-group">
            <label for="nominal" class="col-form-label">Nominal :</label>
            <input name="nominal" type="number" class="form-control" id="nominal">
        </div>
        <div class="form-group">
            <label for="tanggal" class="col-form-label">Tanggal :</label>
            <input name="tanggal" type="date" class="form-control" id="tanggal">
        </div>
        <div class="">
            <a href="<?= base_url() ?>Peminjaman" class="btn btn-danger">Batal</a>
            <button type="submit" name="tambahpeminjaman" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
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