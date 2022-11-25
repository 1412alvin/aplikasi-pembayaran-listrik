<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI PEMBAYARAN LISTRIK - PROFILE</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>

<body style="background:url('../images/bg_pln.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="panel panel-primary">
                        <!-- judul aplikasi -->
                        <div class="panel-heading">
                            <a href="/listrik/beranda">
                                <div style="margin-top: 5px;margin-bottom: 5px;">
                                    <img src="../images/logo_pln.png" alt="logo" class="logo" width="90px">
                                </div>
                            </a>
                            <div style="margin-left: 110px; margin-top: -90px; font-size: 120%;">
                                A P L I K A S I &nbsp; P E M B A Y A R A N &nbsp;
                                <br>
                                L I S T R I K &nbsp; P A S C A B A Y A R
                            </div>
                            <br><br>
                            <!-- <div style="margin-left: 110px; font-size: 200%;">
                                <strong>FORM LOGIN</strong>
                            </div> -->
                        </div>
                        <a href="/listrik/beranda">
                            <div class="text-left">
                                <img src="../images/back.png" alt="logo" class="logo" width="40px">
                            </div>
                        </a>
                        <br>
                        <!-- end judul aplikasi -->

                        <!-- isi -->
                        <div class="container">
                            <h4>Username : <?= session()->get('username'); ?></h4>
                            <h4>Nama Pelanggan : <?= session()->get('nama_pelanggan'); ?></h4>
                            <h4>Alamat : <?= session()->get('alamat'); ?></h4>
                            <h4>Nomor KWH : <?= session()->get('nomor_kwh'); ?></h4>
                            <?php foreach ($tarif as $t) : ?>
                                <?php if (session()->get('daya') == $t['id_tarif']) { ?>
                                    <h4>Daya : <?= $t['daya']; ?></h4>
                                <?php } ?>
                            <?php endforeach ?>
                        </div>
                        <div>
                            <a href="/listrik/login">
                                <button class="btn btn-primary btn-lg text-left" style="width: 30%;">UPDATE DATA</button>
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