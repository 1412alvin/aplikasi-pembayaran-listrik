<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI PEMBAYARAN LISTRIK - Beranda</title>
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
                            </div><br><br>
                            <div class="text-right">
                                <h3>hello <?= session()->get('nama_pelanggan'); ?> </h3>
                            </div>
                            <!-- <div style="margin-left: 110px; font-size: 200%;">
                                <strong>FORM LOGIN</strong>
                            </div> -->
                        </div>
                        <br><br><br><br>
                        <!-- end judul aplikasi -->

                        <!-- isi -->
                        <div class="text-center">
                            <a href="/listrik/penggunaanlistrik">
                                <button class="btn btn-primary btn-lg" style="width: 55%;">Lihat Penggunaan Listrik</button>
                            </a>

                        </div><br>
                        <div class="text-center">
                            <a href="/listrik/login">
                                <button class="btn btn-primary btn-lg" style="width: 55%;">Bayar Tagihan Listrik</button>
                            </a>

                        </div> <br>
                        <div class="text-center">
                            <a href="/listrik/profile">
                                <button class="btn btn-primary btn-lg" style="width: 55%;">Profile</button>
                            </a>

                        </div> <br>
                        <div class="text-center">
                            <a href="/listrik/logout">
                                <button class="btn btn-primary btn-lg" style="width: 55%;">Logout</button>
                            </a>

                        </div> <br>
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