<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APLIKASI PEMBAYARAN LISTRIK - PENGGUNAAN LISTRIK</title>
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
</head>

<body style="background:url('../images/bg_pln.jpg');">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class=""></div>
                <div class="col">
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
                            <div style="margin-left: 110px; font-size: 200%;">
                                <strong>TAMBAH PENGGUNAAN LISTRIK</strong>
                            </div>
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
                            <?php foreach ($penggunaan as $p) : ?>
                                <?php if (session()->get('id_pelanggan') == $p['id_pelanggan']) { ?>
                                    <form action="/listrik/tambahP" method="post">
                                        <div class="form-group">
                                            <label>Nama Pelanggan</label>
                                            <input type="hidden" name="id_pelanggan" id="pelanggan" value="<?= session()->get('id_pelanggan'); ?>">
                                            <input type="text" name="" id="" class="form-control" placeholder="<?= session()->get('nama_pelanggan'); ?>" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label>Bulan</label>
                                            <input type="date" name="bulan" id="bulan" class="form-control" placeholder="Bulan">
                                        </div>
                                        <div class="form-group">
                                            <label>Tahun</label>
                                            <input type="month" name="tahun" id="tahun" class="form-control" placeholder="Tahun">
                                        </div>
                                        <div class="form-group">
                                            <label>Meter Awal</label>
                                            <input type="number" name="meter_awal" id="meter_awal" class="form-control" placeholder="Meter Awal" value="<?= $p['meter_akhir']; ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>Meter Akhir</label>
                                            <input type="number" name="meter_akhir" id="meter_akhir" class="form-control" placeholder="Meter Akhir">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary btn-block btn-lg">TAMBAH DATA </button>
                                        </div>
                                    <?php } ?>
                                <?php endforeach ?>

                                    </form>
                        </div><br>
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