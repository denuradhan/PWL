<div class="card" style="width:60%; margin:10% 0 0 20%;">
    <div class="card-header">
        <img src="https://www.freepnglogos.com/uploads/logo-koperasi-png/download-logo-koperasi-baru-vector-corel-12.png" alt="logo" style="width:20%; margin-left: 40%;">
    </div>
    <?php if ($this->session->flashdata('pesan')) : ?>
        <div class="alert alert-info alert-dismissible">
            <a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?php echo $this->session->flashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="mini-card-container">
        <?= form_open('login/register') ?>
        <form action="" method="post" class="formlogin">
            <div class="form-group">
                <label for="nama" class="col-form-label">Nama :</label>
                <input name="nama" type="text" class="form-control" id="nama">
            </div>
            <label for="jurusan">Gender : </label>
            <select class="form-control" id="gender" name="gender">
                <option value="" selected>-</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>

            </select>
            <div class="form-group">
                <label for="alamat" class="col-form-label">Alamat :</label>
                <input name="alamat" type="text" class="form-control" id="alamat">
            </div>
            <div class="form-group">
                <label for="nohp" class="col-form-label">Nomor HP :</label>
                <input name="nohp" type="text" class="form-control" id="nohp">
            </div>
            <div class="form-group">
                <label for="username" class="col-form-label">Username :</label>
                <input name="username" type="text" class="form-control" id="username">
            </div>
            <div class="form-group">
                <label for="password" class="col-form-label">Password :</label>
                <input name="password" type="password" class="form-control" id="password">
            </div>
            <div class="form-group">
                <label for="password2" class="col-form-label">Confirm Password :</label>
                <input name="password2" type="password" class="form-control" id="password2">
            </div>
    </div>
</div>
<center>
    <button type="submit" class="btn btn-block" style="background-color:#20C997; width:60%; color: white; margin-top:1%">Register</button>
</center>
</form>
<?php form_close() ?>

<center style="margin-top:1%">
    <span>Sudah Punya Akun Anggota?</span>
    <a href="<?= base_url() . "login/" ?>">Login Anggota</a>
</center>