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
                                  <h3 class="card-title">Daftar Barang</h3>
                              </div>
                          </div>
                          <!-- Tabel -->
                          <div class="card">
                              <!-- /.card-header -->
                              <div class="card-body">
                                  <!-- Button trigger modal -->
                                  <?php if ($this->session->flashdata('pesan')) : ?>
                                      <div class="alert alert-info alert-dismissible fade show" role="alert">
                                          Data Barang <strong> <?= $this->session->flashdata('pesan'); ?> </strong>
                                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                  <?php endif; ?>
                                  <a href="<?= base_url() ?>Barang/tambah" type="button" class="btn btn-success" style="margin-bottom:2%;">
                                      <i class="fa fa-plus" aria-hidden="true"></i>
                                      Tambah Data
                                  </a>
                                  <table class="table table-striped">
                                      <thead>
                                          <tr>
                                              <th scope="col">No</th>
                                              <th scope="col">Nama</th>
                                              <th scope="col">Harga</th>
                                              <th scope="col">Gambar</th>

                                              <th scope="col"></th>


                                          </tr>
                                      </thead>
                                      <tbody>
                                          <?php $loop = 1;
                                            foreach ($barang as $agt) : ?>
                                              <tr>
                                                  <th scope="row"><?= $loop++ ?></th>
                                                  <td><?= $agt['nama_barang'] ?></td>
                                                  <td><?= $agt['harga'] ?></td>
                                                  <td><img src="<?= base_url() . 'uploads/barang/' . $agt['gambar'] ?>" style="max-width:100px; min-height:100px" /></td>

                                                  <td>
                                                      <a href="<?= base_url() ?>Barang/edit/<?= $agt['id']; ?>" class="btn btn-warning" style="margin-left: 5%;">
                                                          <i class="fas fa-edit    "></i>
                                                          Edit
                                                      </a>
                                                      <a href="<?= base_url() ?>Barang/hapus/<?= $agt['id']; ?>" class="btn btn-danger" style="margin-left: 10%;">
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