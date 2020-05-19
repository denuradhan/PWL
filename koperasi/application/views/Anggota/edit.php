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
                  <h3 class="card-title">Edit Data Anggota</h3>
                </div>
              </div>
              <!-- Tabel -->
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="nama" class="col-form-label">Nama :</label>
                      <input name="nama" type="text" class="form-control" id="nama" value="<?= $anggota['nama'] ?>">
                      <input type="hidden" name="id" value="<?= $anggota['id'] ?>">
                    </div>
                    <label for="jurusan">Gender : </label>
                    <select class="form-control" id="gender" name="gender">
                      <option value="<?= $anggota['gender'] ?>" selected>Current Gender : <?= $anggota['gender'] ?></option>
                      <option value="L">Laki-laki</option>
                      <option value="P">Perempuan</option>

                    </select>
                    <div class="form-group">
                      <label for="alamat" class="col-form-label">Alamat :</label>
                      <input name="alamat" type="text" class="form-control" id="alamat" value="<?= $anggota['alamat'] ?>">
                    </div>
                    <div class="form-group">
                      <label for="nohp" class="col-form-label">Nomor HP :</label>
                      <input name="nohp" type="text" class="form-control" id="nohp" value="<?= $anggota['nohp'] ?>">
                    </div>
                    <div class="modal-footer">
                      <a href="<?= base_url() ?>Anggota" class="btn btn-danger">Batal</a>

                      <button type="submit" name="tambahanggota" class="btn btn-primary">Simpan Data</button>
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