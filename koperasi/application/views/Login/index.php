<body>
    <div class="card" style="width:60%; margin:10% 0 0 20%;">
        <div class="card-header">
            <img src="https://www.freepnglogos.com/uploads/logo-koperasi-png/download-logo-koperasi-baru-vector-corel-12.png" alt="logo" style="width:20%; margin-left: 40%;">
        </div>
        <?php if ($this->session->flashdata('pesan') == TRUE) : ?>
            <div class="alert alert-info alert-dismissible">
                <a href="" class="close" data-dismiss="alert" aria-label="close" aria-hidden="true">&times;</a>
                <?php echo $this->session->flashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <div class="mini-card-container">
            <?= form_open('login/auth') ?>
            <form action="" method="post" class="formlogin">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" name="varUsername" id="" placeholder="Username">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    <input type="password" class="form-control" name="varPassword" id="" placeholder="Password">
                </div>
        </div>
    </div>
    <center>
        <button type="submit" class="btn btn-block" style="background-color:#20C997; width:60%; color: white; margin-top:1%">Login</button>
    </center>
    </form>
    <?php form_close() ?>

    <center style="margin-top:1%">
        <span>Belum menjadi Anggota? </span>
        <a href="<?= base_url() . "login/register" ?>">Daftar Menjadi Anggota</a>
    </center>