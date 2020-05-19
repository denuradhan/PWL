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
                                  <h3 class="card-title">Tambah Data Barang</h3>
                              </div>
                          </div>
                          <!-- Tabel -->
                          <div class="card">
                              <!-- /.card-header -->
                              <div class="card-body">
                                  <form action="" method="post" enctype="multipart/form-data">

                                      <div class="form-group">
                                          <label for="nama_barang" class="col-form-label">Nama :</label>
                                          <input name="nama_barang" type="text" class="form-control" id="nama_barang">
                                      </div>
                                      <div class="form-group">
                                          <label for="harga" class="col-form-label">Harga :</label>
                                          <input name="harga" type="text" class="form-control" id="harga">
                                      </div>
                                      <div class="form-group">
                                          <label for="gambar" class="col-form-label">Foto :</label>
                                          <input name="gambar" type="file" class="form-control" id="gambar">
                                      </div>
                                      <div class="modal-footer">
                                          <a href="<?= base_url() ?>Barang" class="btn btn-danger">Batal</a>
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