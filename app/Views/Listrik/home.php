<!DOCTYPE html>
<html>

<head>
    <title>APLIKASI PEMBAYARAN LISTRIK</title>
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
                            <a href="/">
                                <div style="margin-top: 5px;margin-bottom: 5px;">
                                    <img src="../images/logo_pln.png" alt="logo" class="logo" width="90px">
                                </div>
                            </a>
                            <div style="margin-left: 110px; margin-top: -90px; font-size: 120%;">
                                A P L I K A S I &nbsp; P E M B A Y A R A N &nbsp;
                                <br>
                                L I S T R I K &nbsp; P A S C A B A Y A R
                            </div>
                            <!-- <div style="margin-left: 110px; font-size: 200%;">
                                <strong>FORM LOGIN</strong>
                            </div> -->
                            <br> <br>
                        </div>
                        <br><br>
                        <!-- end judul aplikasi -->

                        <!-- isi -->
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="text-center" style="margin-top: 100px;">
                            <a href="/listrik/login">
                                <button class="btn btn-primary btn-lg">silahkan login</button>
                            </a>

                        </div>
                        <br><br><br><br><br>

                        <!-- end isi -->

                        <!-- footer -->
                        <div class="panel-footer">
                            <center>
                                <strong>Uji kompetensi 2022
                                    <!-- <br> -->

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