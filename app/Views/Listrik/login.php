<!DOCTYPE html>
<html>

<head>
    <title>APLIKASI PEMBAYARAN LISTRIK - FORM LOGIN PLN</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>

<body style="background:url('../images/bg_pln.jpg');">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="col"></div>
                <div class="col">
                    <div class="panel panel-primary">
                        <!-- judul aplikasi -->
                        <div class="panel-heading">
                            <a href="/listrik">
                                <div style="margin-top: 5px;margin-bottom: 5px;">
                                    <img src="../images/logo_pln.png" alt="logo" class="logo" width="90px">
                                </div>
                            </a>
                            <div style="margin-left: 110px; margin-top: -90px; font-size: 120%;">
                                A P L I K A S I &nbsp; P E M B A Y A R A N &nbsp;
                                <br>
                                L I S T R I K &nbsp; P A S C A B A Y A R
                            </div>
                            <div style="margin-left: 110px; font-size: 200%;">
                                <strong>FORM LOGIN</strong>
                            </div>
                        </div>
                        <!-- end judul aplikasi -->

                        <!-- isi -->
                        <div class="panel-body">
                            <div class="col-md-12">
                                <form action="/listrik/ceklogin" method="post">
                                    <div class="form-group">
                                        <label>USERNAME</label>
                                        <input type="text" name="username" class="form-control" placeholder="Masukan username Anda..." required maxlength="30" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <label>PASSWORD</label>
                                        <input type="password" name="password" class="form-control" placeholder="Masukan password Anda..." required maxlength="30" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="login" class="btn btn-primary btn-block btn-lg" value="LOGIN">
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <a href="/listrik/registrasi">Belum punya akun? klik disini!</a>
                                    </div>
                                </form>
                                <?php if (session()->getFlashdata('gagal')) : ?>
                                    <div class="alert alert-success" role="alert">
                                        <?= session()->getFlashdata('gagal'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <!-- end isi -->

                        <!-- footer -->
                        <div class="panel-footer">
                            <center>
                                <strong>uji kompetensi 2022
                                    <br>

                            </center>
                        </div>
                        <!-- end footer -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>